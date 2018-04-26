<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'Benvenuto nella lista ban di {server}.';

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

        $array["check.username"] = "Giocatore";
        $array["action.check"] = "Controlla";
        $array["table.pager.number"] = "Pagina";

        $array["error.name.unseen"] = "non è mai entrato nel server.";

        $array["title.staff-history"] = "punizioni recenti di ";
        $array["title.player-history"] = "punizioni recenti per  ";
        $array["history.type"] = "Tipo";

        $array["history.error.uuid.no-result"] = "Nessuna punizione trovata.";
        $array["action.return"] = "Torna a";

        $array["table.received-warning"] = "Avvertimento ricevuto";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Nome invalido.";
        $array["history.error.uuid.required"] = "Argomenti mancanti (uuid).";
        $array["info.error.type-id.required"] = "Argomenti mancanti (type, id).";
        $array["info.error.type.invalid"] = "Pagina richiesta sconosciuta.";
        $array["info.error.id.invalid"] = "ID Invalido";
        $array["info.error.id.no-result"] = "Errore: ";

    }
}
