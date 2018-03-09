<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'Benvenuto nella lista ban di {server}.';
        $array["index_allsins"] = 'Qui ci saranno tutte le punizioni dei giocatori.';

        $array["title.index"] = 'Home';
        $array["title.bans"] = 'Ban';
        $array["title.mutes"] = 'Mute';
        $array["title.warnings"] = 'Warning';
        $array["title.kicks"] = 'Kick';

        $array["page.permanent.ban"] = 'Ban Permanente';
        $array["page.permanent.mute"] = 'Mute Permanente';
        $array["page.permanent.warning"] = 'Permanente';
        $array["page.expired.ban"] = '(Sbannato)';
        $array["page.expired.ban-by"] = '(Sbannato da {name})';
        $array["page.expired.mute"] = '(Smutato)';
        $array["page.expired.mute-by"] = '(Smutato da {name})';
        $array["page.expired.warning"] = '(Terminato)';
        $array["page_title_ban"] = 'Ban';
        $array["page_title_mute"] = 'Mute';
        $array["page_title_warn"] = 'Warning';
        $array["page_title_kick"] = 'Kick';
        $array["check.username"] = "Giocatore";
        $array["action.check"] = "Controlla";
        $array["table.pager.number"] = "Pagina";

        $array["error.name.unseen"] = "non è mai entrato nel server.";

        $array["title.staff-history"] = "punizioni recenti di ";
        $array["title.player-history"] = "punizioni recenti per  ";
        $array["history.type"] = "Tipo";
        $array["history_tableplayer"] = "Giocatore";
        $array["history_tablemoderator"] = "Moderatore";
        $array["history_tablereason"] = "Motivo";
        $array["history_tabledate"] = "Data";
        $array["history_tableexpires"] = "Termina";
        $array["history.error.uuid.no-result"] = "Nessuna punizione trovata.";
        $array["action.return"] = "Torna a";

        $array["info_banned_player"] = "Giocatore bannato";
        $array["info_banned_by"] = "Bannato da";
        $array["info_banned_reason"] = "Motivo Ban";
        $array["info_banned_when"] = "Banato il";
        $array["info_banned_expiry"] = "Termina il";
        $array["info_muted_player"] = "Giocatore mutato";
        $array["info_muted_by"] = "Mutato da";
        $array["info_muted_reason"] = "Motivo mute";
        $array["info_muted_when"] = "Mutato il";
        $array["info_muted_expiry"] = "Termina il";
        $array["info_warn_name"] = "Warning";
        $array["info_warn_player"] = "Player Ammonito";
        $array["info_warn_by"] = "Ammonito da";
        $array["info_warn_reason"] = "Motivo ammonizione";
        $array["info_warn_when"] = "Ammonito il";
        $array["info_warn_expiry"] = "Termina il";
        $array["info_kick_player"] = "Giocatore kickato";
        $array["info_kick_by"] = "Kickato da";
        $array["info_kick_reason"] = "Motivo Kick";
        $array["info_kick_when"] = "Data Kick";

        $array["bans_player"] = "Nome";
        $array["bans_by"] = "Bannato da";
        $array["bans_reason"] = "Motivo";
        $array["bans_when"] = "Bannato il";
        $array["bans_expiry"] = "Durata ban";

        $array["kicks_player"] = "Nome";
        $array["kicks_by"] = "Kickato da";
        $array["kicks_reason"] = "Motivo";
        $array["kicks_when"] = "Data";

        $array["mutes_player"] = "Nome";
        $array["mutes_by"] = "Mutato da";
        $array["mutes_reason"] = "Motivo";
        $array["mutes_when"] = "Mutato il";
        $array["mutes_expiry"] = "Durata mute";

        $array["warns_player"] = "Nome";
        $array["warns_by"] = "Avvertito da";
        $array["warns_reason"] = "Motivo";
        $array["warns_when"] = "Avvertuti il";
        $array["warnings.received"] = "Avvertimento ricevuto";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Nome invalido.";
        $array["history.error.uuid.required"] = "Argomenti mancanti (uuid).";
        $array["info.error.type-id.required"] = "Argomenti mancanti (type, id).";
        $array["info.error.type.invalid"] = "Pagina richiesta sconosciuta.";
        $array["info.error.id.invalid"] = "ID Invalido";
        $array["info.error.id.no-result"] = "Errore: ";
        $array["info_error_notfound2"] = " Non trovato nel database.";
        $array["info_error_notplayer"] = "Errore: Giocatore non trovato";
        $array["history_playernotfound"] = "Giocatore non trovato nel database.";
    }
}
