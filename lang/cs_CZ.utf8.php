<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Vítejte na {server} BanListu.";
        $array["index.welcome.sub"] = "Naleznete zde vypsány všechny své tresty.";

        $array["title.index"] = 'Domů';
        $array["title.bans"] = 'Bany';
        $array["title.mutes"] = 'Umlčení';
        $array["title.warnings"] = 'Varování';
        $array["title.kicks"] = 'Vyhození';
        $array["title.player-history"] = "Nedávne tresty pro {name}";
        $array["title.staff-history"] = "Nedávne tresty od {name}";


        $array["generic.ban"] = "Ban";
        $array["generic.mute"] = "Umlčení";
        $array["generic.warn"] = "Varování";
        $array["generic.kick"] = "Vyhození";

        $array["generic.banned"] = "Udělil(a)";
        $array["generic.muted"] = "Udělil(a)";
        $array["generic.warned"] = "Udělil(a)";
        $array["generic.kicked"] = "Udělil(a)";

        $array["generic.banned.by"] = $array["generic.banned"] . " ";
        $array["generic.muted.by"] = $array["generic.muted"] . " ";
        $array["generic.warned.by"] = $array["generic.warned"] . " ";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " ";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Pernamentní";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Typ";
        $array["generic.active"] = "Aktivní";
        $array["generic.inactive"] = "Neaktivní";
        $array["generic.expired"] = "Vypršelo";
        $array["generic.player-name"] = "Hráč(ka)";

        $array["page.expired.ban"] = '(Vypršelo)';
        $array["page.expired.ban-by"] = '(Zrušeno od {name})';
        $array["page.expired.mute"] = '(Vypršelo)';
        $array["page.expired.mute-by"] = '(Zrušeno od {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Udělil(a)";
        $array["table.reason"] = "Důvod";
        $array["table.date"] = "Datum";
        $array["table.expires"] = "Vypršelo";
        $array["table.received-warning"] = "Poslední varování";

        $array["table.server.name"] = "Server";
        $array["table.server.scope"] = "Platí pro Servery";
        $array["table.server.origin"] = "Uděleno na Serveru";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Stránka";

        $array["action.check"] = "Vyhledat";
        $array["action.return"] = "Zpět na {origin}";

        $array["error.missing-args"] = "Chybí argumenty.";
        $array["error.name.unseen"] = "{name} se ještě nepřipojil(a).";
        $array["error.name.invalid"] = "Neplatné jméno.";
        $array["history.error.uuid.no-result"] = "Nebyli nelezeny žádné tresty.";
        $array["info.error.id.no-result"] = "Chyba: {type} nebyl(a) nelezen(a) v databázi.";
    }
}
