<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'Vítej na {server}.';
        $array["index.welcome.sub"] = 'Zde nalezneš vypsány všechny své tresty.';

        $array["title.index"] = 'Úvod';
        $array["title.bans"] = 'Bany';
        $array["title.mutes"] = 'Umlčení';
        $array["title.warnings"] = 'Varování';
        $array["title.kicks"] = 'Vyhození';
        $array["page.permanent.ban"] = 'Trvalý ban';
        $array["page.permanent.mute"] = 'Umlčen navždy';
        $array["page.permanent.warning"] = 'Trvalé varování';
        $array["page.expired.ban"] = '(Odbanován)';
        $array["page.expired.ban-by"] = '(Odbanován kým {name})';
        $array["page.expired.mute"] = '(Odmlčen)';
        $array["page.expired.mute-by"] = '(Odmlčen kým {name})';
        $array["page.expired.warning"] = '(Vypršel)';

        $array["check.username"] = "Hráč";
        $array["action.check"] = "Ověřit";
        $array["table.pager.number"] = "Strana";
        $array["error.name.invalid"] = "Neplatné zadání";
        $array["error.name.unseen"] = "u nás ještě nebyl";
        $array["history.error.uuid.required"] = "Chybějící argument (uuid)";

        $array["title.staff-history"] = "Nedávné tresty od ";
        $array["title.player-history"] = "Nedávne tresty pro ";
        $array["history.type"] = "Typ";

        $array["history.error.uuid.no-result"] = "Nenalezeny žádné tresty";
        $array["action.return"] = "Vrátit se na";

        $array["info.error.type-id.required"] = "Neplatné argumenty (typ, id)";
        $array["info.error.type.invalid"] = "Vyžádána neznámá stránka";
        $array["info.error.id.invalid"] = "Neplatné ID";
        $array["info.error.id.no-result"] = "Chyba: ";

        $array["warnings.received"] = "Varování doručeno";
    }
}
