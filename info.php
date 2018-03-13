<?php
require_once './inc/page.php';

abstract class Info {
    /**
     * @param $row PDO::PDORow
     * @param $page Page
     */
    public function __construct($row, $page) {
        $this->row = $row;
        $this->page = $page;
        $this->table = $page->table;
    }

    static function create($row, $page, $type) {
        switch ($type) {
            case "ban":
                return new BanInfo($row, $page);
            case "mute":
                return new MuteInfo($row, $page);
            case "warn":
                return new WarnInfo($row, $page);
            case "kick":
                return new KickInfo($row, $page);
        }
        return null;
    }

    function name() {
        return ucfirst($this->page->type);
    }

    function permanent() {
        return ((int)$this->row['until']) <= 0;
    }

    function punished_avatar($player_name, $row) {
        return $this->page->get_avatar($player_name, $row['uuid'], true, $this->history_link($player_name, $row['uuid']), $name_left = false);
    }

    function history_link($player_name, $uuid, $args = "") {
        return "<a href=\"history.php?uuid=$uuid$args\">$player_name</a>";
    }

    function moderator_avatar($row) {
        $banner_name = $this->page->get_banner_name($row);
        return $this->page->get_avatar($banner_name, $row['banned_by_uuid'], true, $this->history_link($banner_name, $row['banned_by_uuid'], "&staffhistory=1"), $name_left = false);
    }

    abstract function basic_info($row, $player_name);
}

class BanInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->t("table.player")        => $this->punished_avatar($player_name, $row),
            $page->t("table.executor")      => $this->moderator_avatar($row),
            $page->t("table.reason")        => $page->clean($row['reason']),
            $page->t("table.date")          => $page->millis_to_date($row['time']),
            $page->t("table.expires")       => $page->expiry($row),
            $page->t("table.server.scope")  => $page->server($row),
            $page->t("table.server.origin") => $page->server($row, "server_origin"),
        );
    }
}

class MuteInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->t("table.player")        => $this->punished_avatar($player_name, $row),
            $page->t("table.executor")      => $this->moderator_avatar($row),
            $page->t("table.reason")        => $page->clean($row['reason']),
            $page->t("table.date")          => $page->millis_to_date($row['time']),
            $page->t("table.expires")       => $page->expiry($row),
            $page->t("table.server.scope")  => $page->server($row),
            $page->t("table.server.origin") => $page->server($row, "server_origin"),
        );
    }
}

class WarnInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->t("table.player")        => $this->punished_avatar($player_name, $row),
            $page->t("table.executor")      => $this->moderator_avatar($row),
            $page->t("table.reason")        => $page->clean($row['reason']),
            $page->t("table.date")          => $page->millis_to_date($row['time']),
            $page->t("table.expires")       => $page->expiry($row),
            $page->t("table.server.scope")  => $page->server($row),
            $page->t("table.server.origin") => $page->server($row, "server_origin"),
        );
    }
}

class KickInfo extends Info {
    function basic_info($row, $player_name) {
        $page = $this->page;
        return array(
            $page->t("table.player")        => $this->punished_avatar($player_name, $row),
            $page->t("table.executor")      => $this->moderator_avatar($row),
            $page->t("table.reason")        => $page->clean($row['reason']),
            $page->t("table.date")          => $page->millis_to_date($row['time']),
            $page->t("table.server.scope")  => $page->server($row),
            $page->t("table.server.origin") => $page->server($row, "server_origin"),
        );
    }
}

// check if info.php is requested, otherwise it's included
if ((substr($_SERVER['SCRIPT_NAME'], -strlen("info.php"))) !== "info.php") {
    return;
}

isset($_GET['type'], $_GET['id']) && is_string($_GET['type']) && is_string($_GET['id']) or die($page->t("error.missing-args"));

$type = $_GET['type'];
$id = $_GET['id'];
$page = new Page($type);

($page->type !== null) or die("Unknown page type requested");

filter_var($id, FILTER_VALIDATE_INT) or die("Invalid ID");

$id = (int)$id;

$type = $page->type;
$table = $page->table;
$sel = $page->get_selection($table);
$query = "SELECT $sel FROM $table WHERE id=? LIMIT 1";

$st = $page->conn->prepare($query);

if ($st->execute(array($id))) {
    ($row = $st->fetch()) or die(str_replace("{type}", $type, $page->t("info.error.id.no-result")));
    $st->closeCursor();

    $player_name = $page->get_name($row['uuid']);

    ($player_name !== null) or die(str_replace("{name}", $player_name, $page->t("error.name.unseen")));

    $info = Info::create($row, $page, $type);

    $name = $page->t("generic.$type");
    $permanent = $info->permanent();

    $page->name = $page->title = "$name #$id";
    $page->print_title();

    $header = $page->name;

    if (!($info instanceof KickInfo)) {
        $active = $page->active($row);
        $ipban = $page->active($row, 'ipban');
        if ($ipban === true) {
            $idx = null;
            if ($info instanceof BanInfo) {
                $idx = "generic.ipban";
            } else if ($info instanceof MuteInfo) {
                $idx = "generic.ipmute";
            }
            if ($idx !== null) {
                $header .= "<span class='label label-danger litebans-label-info'>" . $page->t($idx) . "</span>";
            }
        }
        if ($active === true) {
            $header .= "<span class='label label-danger litebans-label-info'>" . $page->t("generic.active") . "</span>";
            if ($permanent) {
                $header .= "<span class='label label-danger litebans-label-info'>" . $page->t("generic.permanent") . "</span>";
            }
        } else {
            $header .= "<span class='label label-warning litebans-label-info'>" . $page->t("generic.inactive") . "</span>";
        }
    }
    $page->print_header(true, $header);

    $map = $info->basic_info($row, $player_name);

    $page->table_begin();

    foreach ($map as $key => $val) {
        echo "<tr><td>$key</td><td>$val</td></tr>";
    }

    $page->table_end(false);

    $page->print_footer();
}
