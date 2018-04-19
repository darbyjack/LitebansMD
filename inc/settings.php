<?php

final class Settings {
    public static $TRUE = "1", $FALSE = "0";

    public function __construct($connect = true) {
        // Web interface language. Languages are stored in the "lang/" directory.
        $this->lang = 'en_US.utf8';

        // Database information
        $this->host = 'localhost';
        $this->port = 3306;

        $database = 'litebans';

        $username = '';
        $password = '';

        // If you set a table prefix in config.yml, set it here as well
        $this->table_prefix = "litebans_";

        // Supported drivers: mysql, pgsql
        $driver = 'mysql';

        // Server name, shown on the main page and on the header
        $this->name = 'LiteBans';

        // Clicking on the header name will send you to this address.
        // $this->name_link = 'https://example.com';
        $this->name_link = 'index.php';

        // Show server scope column?
        $this->show_server_scope = true;

        // Show inactive bans? Removed bans will show (Unbanned), mutes will show (Unmuted), warnings will show (Expired).
        $this->show_inactive_bans = true;

        // Show silent bans?
        $this->show_silent_bans = true;

        // Show pager? This allows users to page through the list of bans.
        $this->show_pager = true;

        // Amount of bans/mutes/warnings to show on each page
        $this->limit_per_page = 10;

        // The server console will be identified by any of these names.
        // It will be given a standard name and avatar image.
        $this->console_aliases = array(
            "CONSOLE", "Console",
        );
        $this->console_name = "Console";
        $this->console_image = "inc/img/console.png";

        // Avatar images for all players will be fetched from this URL.
        // Examples:
        // 'https://cravatar.eu/avatar/{uuid}/25'
        // 'https://crafatar.com/avatars/{uuid}?size=25'
        // 'https://minotar.net/avatar/{uuid}/25'
        $this->avatar_source = 'https://crafatar.com/avatars/{uuid}?size=25';

        // `avatar_source_offline_mode` controls where avatars for offline-mode players are fetched from.
        // Offline-mode UUIDs are substituted for player names unless the `avatar_allow_offline_mode_uuids` option is enabled.
        // (This is done because avatar sources generally serve the default "Steve" avatar for *all* offline-mode UUIDs, including those of premium players)
        // Crafatar no longer supports names, so it cannot be used as an offline-mode player-name avatar source as of 2018-02-16 (https://crafatar.com/#meta-usernames)
        // Since "skins.minecraft.net" is no longer available, this could pose a problem for other avatar sources as well.
        $this->avatar_source_offline_mode = 'https://minotar.net/avatar/{name}/25';

        // If enabled, names will be shown below avatars instead of being shown next to them.
        $this->avatar_names_below = true;

        // If enabled, offline-mode UUIDs will be requested from avatar_source instead of player names.
        $this->avatar_allow_offline_mode_uuids = false;

        // If enabled, the total amount of bans, mutes, warnings, and kicks will be shown next to the buttons in the header.
        $this->header_show_totals = true;

        // The date format can be changed here.
        // https://secure.php.net/manual/en/function.strftime.php
        // Example output of default format: July 2, 2015, 09:19; August 4, 2016, 18:37
        $this->date_format = '%B %d, %Y, %H:%M';

        // https://secure.php.net/manual/en/timezones.php
        $timezone = "UTC";

        // Enable PHP error reporting.
        $this->error_reporting = true;

        // Enable error pages.
        $this->error_pages = true;

        $this->date_month_translations = null;

        // If your system locale doesn't automatically translate month names, you can set them manually here.
        // Change "if (false)" to "if (true)" for this to take effect.
        // X=>Y, X is replaced with Y. E.g. "January"=>"Januari"
        if (false) {
            $this->date_month_translations = array(
                "January"   => "Month 1",
                "February"  => "Month 2",
                "March"     => "Month 3",
                "April"     => "Month 4",
                "May"       => "Month 5",
                "June"      => "Month 6",
                "July"      => "Month 7",
                "August"    => "Month 8",
                "September" => "Month 9",
                "October"   => "Month 10",
                "November"  => "Month 11",
                "December"  => "Month 12",
            );
        }


        /*** End of configuration ***/


        /** Don't modify anything here unless you know what you're doing **/

        if ($this->error_reporting) {
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
        }

        $this->active_query = "";

        if ($driver === "pgsql") {
            Settings::$TRUE = "B'1'";
            Settings::$FALSE = "B'0'";
        }

        if (!$this->show_inactive_bans) {
            $this->active_query = self::append_query($this->active_query, "active=" . Settings::$TRUE);
        }

        if (!$this->show_silent_bans) {
            $this->active_query = self::append_query($this->active_query, "silent=" . Settings::$FALSE);
        }

        $this->test_strftime();

        date_default_timezone_set($timezone); // set configured timezone

        $table_prefix = $this->table_prefix;

        // Internal table names, do not translate.
        $this->table = array(
            'bans'     => "${table_prefix}bans",
            'mutes'    => "${table_prefix}mutes",
            'warnings' => "${table_prefix}warnings",
            'kicks'    => "${table_prefix}kicks",
            'history'  => "${table_prefix}history",
            'servers'  => "${table_prefix}servers",
            'config'   => "${table_prefix}config",
        );

        $this->driver = $driver;
        if ($connect) {
            if ($username === "" && $password === "") {
                $this->redirect("error/unconfigured.php");
            }
            $host = $this->host;
            $port = $this->port;

            $dsn = "$driver:dbname=$database;host=$host;port=$port";
            if ($driver === 'mysql') {
                $dsn .= ';charset=utf8';
            }

            $options = array(
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            );

            try {
                $this->conn = new PDO($dsn, $username, $password, $options);

                $st = $this->conn->query("SELECT * FROM " . $this->table['config'] . " LIMIT 1;");
                $st->fetch();
                $st->closeCursor();
            } catch (PDOException $e) {
                Settings::handle_error($this, $e);
            }
            if ($driver === 'pgsql') {
                $this->conn->query("SET NAMES 'UTF8';");
            }
        }
    }

    static function append_query($existing, $new) {
        if ($existing !== "") {
            return "$existing AND $new";
        }
        return "WHERE $new";
    }

    /**
     * @param $settings Settings
     * @param $e Exception
     */
    static function handle_error($settings, $e) {
        $message = $e->getMessage();
        if ($settings->error_pages) {
            if (strstr($message, "Access denied for user")) {
                if ($settings->error_reporting) {
                    $settings->redirect("error/access-denied.php?error=" . base64_encode($message));
                } else {
                    $settings->redirect("error/access-denied.php");
                }
            }
            if (strstr($message, "Base table or view not found:")) {
                try {
                    $st = $settings->conn->query("SELECT * FROM " . $settings->table['bans'] . " LIMIT 1;");
                    $st->fetch();
                    $st->closeCursor();
                } catch (PDOException $e) {
                    $settings->redirect("error/tables-not-found.php");
                }
                $settings->redirect("error/outdated-plugin.php");
            }
            if (strstr($message, "Unknown column")) {
                $settings->redirect("error/outdated-plugin.php");
            }
        }
        if ($settings->error_reporting === false) {
            die("Database error");
        }
        die('Database error: ' . $message);
    }


    function redirect($url, $showtext = true) {
        if ($showtext === true) {
            echo "<a href=\"$url\">Redirecting...</a>";
        }
        echo "<script data-cfasync=\"false\" type=\"text/javascript\">document.location=\"$url\";</script>";
        die;
    }

    private function test_strftime() {
        // If you modify this function, you may get an "Assertion failed" error.
        date_default_timezone_set("UTC"); // temporarily set UTC timezone for testing purposes

        $fail = false;
        $test = gmstrftime($this->date_format, 0);
        if ($test == false) {
            ob_start();
            var_dump($test);
            $testdump = ob_get_clean();
            echo("Error: date_format test failed. gmstrftime(\"" . $this->date_format . "\",0) returned " . $testdump);
            $fail = true;
        }

        $test = gmstrftime("%Y-%m-%d %H:%M", 0);
        if ($test !== "1970-01-01 00:00") {
            ob_start();
            var_dump($test);
            $testdump = ob_get_clean();
            echo("Assertion failed: gmstrftime(\"%Y-%m-%d %H:%M\",0) != \"1970-01-01 00:00\"<br>");
            echo("Actual result: " . $testdump);
            $fail = true;
        }

        if ($fail === true) {
            die;
        }
    }
}
