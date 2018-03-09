<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome1"] = "Welkom op {server}'s Ban Lijst.";
        $array["index.welcome.sub"] = 'Hier staan al onze uitgedeelde straffen.';

        $array["title.index"] = 'Home';
        $array["title.bans"] = 'Bans';
        $array["title.mutes"] = 'Mutes';
        $array["title.warnings"] = 'Waarschuwingen';
        $array["title.kicks"] = 'Kicks';

        $array["page.permanent.ban"] = 'Permanente Ban';
        $array["page.permanent.mute"] = 'Permanente Mute';
        $array["page.permanent.warning"] = 'Permanent';
        $array["page.expired.ban"] = '(Unbanned)';
        $array["page.expired.ban-by"] = '(Unbanned door {name})';
        $array["page.expired.mute"] = '(Unmuted)';
        $array["page.expired.mute-by"] = '(Unmuted door {name})';
        $array["page.expired.warning"] = '(Verlopen)';
        $array["page_title_ban"] = 'Bans';
        $array["page_title_mute"] = 'Mutes';
        $array["page_title_warn"] = 'Waarschuwingen';
        $array["page_title_kick"] = 'Kicks';
        $array["check.username"] = "Player";
        $array["action.check"] = "Check";
        $array["table.pager.number"] = "Pagina";

        $array["error.name.unseen"] = "heeft niet eerder deelgenomen.";

        $array["title.staff-history"] = "Recente straffen door ";
        $array["title.player-history"] = "Recente straffen voor ";
        $array["history.type"] = "Type";
        $array["history_tableplayer"] = "Player";
        $array["history_tablemoderator"] = "Moderator";
        $array["history_tablereason"] = "Rede";
        $array["history_tabledate"] = "Datum";
        $array["history_tableexpires"] = "Verloopt";
        $array["history.error.uuid.no-result"] = "Geen straffen gevonden.";
        $array["action.return"] = "Terug naar";

        $array["info_banned_player"] = "Verbannen speler";
        $array["info_banned_by"] = "Geband door";
        $array["info_banned_reason"] = "Ban rede";
        $array["info_banned_when"] = "Ban datum";
        $array["info_banned_expiry"] = "Verloopt";
        $array["info_muted_player"] = "Muted speler";
        $array["info_muted_by"] = "Gemute door";
        $array["info_muted_reason"] = "Mute rede";
        $array["info_muted_when"] = "Mute datum";
        $array["info_muted_expiry"] = "Verloopt";
        $array["info_warn_name"] = "Waarschuwing";
        $array["info_warn_player"] = "Gewaarschuwde speler";
        $array["info_warn_by"] = "Gewaarschuwd door";
        $array["info_warn_reason"] = "Waarschuwing rede";
        $array["info_warn_when"] = "Waarschuwing datum";
        $array["info_warn_expiry"] = "Verloopt";
        $array["info_kick_player"] = "Kicked speler";
        $array["info_kick_by"] = "Kicked door";
        $array["info_kick_reason"] = "Kick rede";
        $array["info_kick_when"] = "Kick datum";

        $array["bans_player"] = "Naam";
        $array["bans_by"] = "Geband door";
        $array["bans_reason"] = "Rede";
        $array["bans_when"] = "Geband door";
        $array["bans_expiry"] = "Geband tot";

        $array["kicks_player"] = "Naam";
        $array["kicks_by"] = "Gekickt door";
        $array["kicks_reason"] = "Rede";
        $array["kicks_when"] = "Gekickt op";

        $array["mutes_player"] = "Naam";
        $array["mutes_by"] = "Muted door";
        $array["mutes_reason"] = "Rede";
        $array["mutes_when"] = "Gemute op";
        $array["mutes_expiry"] = "Gemute tot";

        $array["warns_player"] = "Naam";
        $array["warns_by"] = "Gewaarschuwd door";
        $array["warns_reason"] = "Rede";
        $array["warns_when"] = "Gewaarschuwing tot";
        $array["warnings.received"] = "Waarschuwing ontvangen";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Ongeldige naam.";
        $array["history.error.uuid.required"] = "Missende parameter (uuid).";
        $array["info.error.type-id.required"] = "Missende parameter (type, id).";
        $array["info.error.type.invalid"] = "Ongebekende pagina type opgevraagd.";
        $array["info.error.id.invalid"] = "Ongeldig ID";
        $array["info.error.id.no-result"] = "Error: ";
        $array["info_error_notfound2"] = " niet gevonden in de database.";
        $array["info_error_notplayer"] = "Error: Spelernaam niet gevonden.";
        $array["history_playernotfound"] = "Speler niet gevonden in de database.";
    }
}
