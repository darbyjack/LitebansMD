<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Velkommen Til {server}'s Ban Liste.";
        $array["index.welcome.sub"] = 'Her er all dine afstraffelser listed.';

        $array["title.index"] = 'Hjem';
        $array["title.bans"] = 'Forbud';
        $array["title.mutes"] = 'Dæmpelser';
        $array["title.warnings"] = 'Advarelser';
        $array["title.kicks"] = 'Spark';

        $array["page.permanent.ban"] = 'Permanent Forbud';
        $array["page.permanent.mute"] = 'Permanent Dæmpelse';
        $array["page.permanent.warning"] = 'Permanent';
        $array["page.expired.ban"] = '(Forbud Ophævet)';
        $array["page.expired.ban-by"] = '(Forbud Ophævet af {name})';
        $array["page.expired.mute"] = '(Dæmpelse Fjernet)';
        $array["page.expired.mute-by"] = '(Dæmpelse Fjernet af {name})';
        $array["page.expired.warning"] = '(Udløbet)';
        $array["page_title_ban"] = 'Forbud';
        $array["page_title_mute"] = 'Dæmpelser';
        $array["page_title_warn"] = 'Advarelser';
        $array["page_title_kick"] = 'Spark';
        $array["check.username"] = "Spiller";
        $array["action.check"] = "Tjek";
        $array["table.pager.number"] = "Side";

        $array["error.name.unseen"] = "har ikke været på serveren.";

        $array["title.staff-history"] = "Seneste Straffe af ";
        $array["title.player-history"] = "Senseste for ";
        $array["history.type"] = "Type";
        $array["history_tableplayer"] = "Spiller";
        $array["history_tablemoderator"] = "Moderator";
        $array["history_tablereason"] = "Grund";
        $array["history_tabledate"] = "Dato";
        $array["history_tableexpires"] = "Udløber";
        $array["history.error.uuid.no-result"] = "Ingen straf fundet.";
        $array["action.return"] = "Retuner til";

        $array["info_banned_player"] = "Forbudt Spiller";
        $array["info_banned_by"] = "Forbud Af";
        $array["info_banned_reason"] = "Grund For Forbud";
        $array["info_banned_when"] = "Forbud Påført";
        $array["info_banned_expiry"] = "Forbud Udløber";
        $array["info_muted_player"] = "Afdæmpet Spiller";
        $array["info_muted_by"] = "Afdæmpet Af";
        $array["info_muted_reason"] = "Grund For Afdæmpelse";
        $array["info_muted_when"] = "Afdæmpelse Påført";
        $array["info_muted_expiry"] = "Afdæmpelse Udløber";
        $array["info_warn_name"] = "Advarelse";
        $array["info_warn_player"] = "Advaret Spiller";
        $array["info_warn_by"] = "Advaret Af";
        $array["info_warn_reason"] = "Advaret Fordi";
        $array["info_warn_when"] = "Advarelse Påført";
        $array["info_warn_expiry"] = "Advarelse Udløber";
        $array["info_kick_player"] = "Sparket Spiller";
        $array["info_kick_by"] = "Sparket Af";
        $array["info_kick_reason"] = "Sparket Fordi";
        $array["info_kick_when"] = "Spark Påført";

        $array["bans_player"] = "Navn";
        $array["bans_by"] = "Forbud Af";
        $array["bans_reason"] = "Forbudt Fordi";
        $array["bans_when"] = "Forbud Påført";
        $array["bans_expiry"] = "Forbudt Indtil";

        $array["kicks_player"] = "Navn";
        $array["kicks_by"] = "Sparket Af";
        $array["kicks_reason"] = "Sparket Fordi";
        $array["kicks_when"] = "Sparket Indtil";

        $array["mutes_player"] = "Navn";
        $array["mutes_by"] = "Afdæmpet Af";
        $array["mutes_reason"] = "Afdæmpet Fordi";
        $array["mutes_when"] = "Afdæmpelse Påført";
        $array["mutes_expiry"] = "Afdæmpet Indtil";

        $array["warns_player"] = "Navn";
        $array["warns_by"] = "Advaret Af";
        $array["warns_reason"] = "Advaret Fordi";
        $array["warns_when"] = "Advaret Indtil";
        $array["warnings.received"] = "Modtog Advarelse";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Ugyldigt Navn.";
        $array["history.error.uuid.required"] = "Mangler argumenter (uuid).";
        $array["info.error.type-id.required"] = "Mangler argumenter (type, id).";
        $array["info.error.type.invalid"] = "Ukendt side type anmodet.";
        $array["info.error.id.invalid"] = "Ugyldigt ID";
        $array["info.error.id.no-result"] = "Fejl: ";
        $array["info_error_notfound2"] = " blev ikke fundet i databasen.";
        $array["info_error_notplayer"] = "Fejl: Spiller ikke fundet.";
        $array["history_playernotfound"] = "Spiller blev ikke fundet i databasen.";
    }
}
