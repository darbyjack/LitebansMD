<?php

class DefaultLang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Welcome to {server}'s Ban List.";
        $array["index.welcome.sub"] = "Here is where all of our punishments are listed.";

        $array["title.index"] = 'Home';
        $array["title.bans"] = 'Bans';
        $array["title.mutes"] = 'Mutes';
        $array["title.warnings"] = 'Warnings';
        $array["title.kicks"] = 'Kicks';
        $array["title.player-history"] = "Recent Punishments for {name}";
        $array["title.staff-history"] = "Recent Punishments by {name}";

        $array["page.expired.ban"] = '(Unbanned)';
        $array["page.expired.ban-by"] = '(Unbanned by {name})';
        $array["page.expired.mute"] = '(Unmuted)';
        $array["page.expired.mute-by"] = '(Unmuted by {name})';
        $array["page.expired.warning"] = '(Expired)';

        $array["generic.ban"] = "Ban";
        $array["generic.mute"] = "Mute";
        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];
        $array["generic.warn"] = "Warning";
        $array["generic.kick"] = "Kick";
        $array["generic.type"] = "Type";
        $array["generic.active"] = "Active";
        $array["generic.inactive"] = "Inactive";
        $array["generic.permanent"] = "Permanent";
        $array["generic.player-name"] = "Player";

        $array["table.player"] = $array["generic.player-name"];
        $array["table.executor"] = "Moderator";
        $array["table.reason"] = "Reason";
        $array["table.date"] = "Date";
        $array["table.expires"] = "Expires";

        $array["table.server.name"] = "Server";
        $array["table.server.scope"] = "Server Scope";
        $array["table.server.origin"] = "Origin Server";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Page";

        $array["action.check"] = "Check";
        $array["action.return"] = "Return to {origin}";

        $array["warnings.received"] = "Received Warning";

        $array["error.missing-args"] = "Missing arguments.";
        $array["error.name.unseen"] = "{name} has not joined before.";
        $array["error.name.invalid"] = "Invalid name.";
        $array["history.error.uuid.no-result"] = "No punishments found.";
        $array["info.error.id.no-result"] = "Error: {type} not found in database.";
    }
}
