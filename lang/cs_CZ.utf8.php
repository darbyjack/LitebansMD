<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Vítejte na {server} Ban Listu.";
        $array["index.welcome.sub"] = "Naleznete zde vypsány všechny své tresty.";

        $array["title.index"] = 'Domů';
        $array["title.bans"] = 'Bany';
        $array["title.mutes"] = 'Umlčení';
        $array["title.warnings"] = 'Varování';
        $array["title.kicks"] = 'Vyhození';
        $array["title.player-history"] = "Nedávné tresty pro {name}";
        $array["title.staff-history"] = "Nedávné tresty od {name}";


        $array["generic.ban"] = "Ban";
        $array["generic.mute"] = "Umlčení";
        $array["generic.warn"] = "Varování";
        $array["generic.kick"] = "Vyhození";

        $array["generic.banned"] = "Zabanován";
        $array["generic.muted"] = "Umlčen";
        $array["generic.warned"] = "Varován";
        $array["generic.kicked"] = "Vyhození";

        $array["generic.banned.by"] = $array["generic.banned"] . " od";
        $array["generic.muted.by"] = $array["generic.muted"] . " od";
        $array["generic.warned.by"] = $array["generic.warned"] . " od";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " od";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];
        $array["generic.type"] = "Typ";
        $array["generic.active"] = "Aktivní";
        $array["generic.inactive"] = "Neaktivní";
        $array["generic.expired"] = "Platnost trestu vypršela";
        $array["generic.permanent"] = "Pernamentní trest";
        $array["generic.player-name"] = "Hráč(ka)";

        $array["page.expired.ban"] = '(Odbanován(a))';
        $array["page.expired.ban-by"] = 'Odbanován(a) od {name})';
        $array["page.expired.mute"] = '(Odmlčen(a))';
        $array["page.expired.mute-by"] = '(Odmlčen(a) od {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Moderátor";
        $array["table.reason"] = "Důvod";
        $array["table.date"] = "Datum";
        $array["table.expires"] = "Vypršelo";
        $array["table.received-warning"] = "Poslední varování";

        $array["table.server.name"] = "Server";
        $array["table.server.scope"] = "Platné pro servery";
        $array["table.server.origin"] = "Původní server";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Stránka";

        $array["action.check"] = "Vyhledat";
        $array["action.return"] = "Zpět na {origin}";

        $array["error.missing-args"] = "Nedostatečné argumenty.";
        $array["error.name.unseen"] = "{name} se ještě nikdy nepřipojil(a).";
        $array["error.name.invalid"] = "Chybné jméno.";
        $array["history.error.uuid.no-result"] = "Žádné tresty nebyly nalezeny.";
        $array["info.error.id.no-result"] = "Chyba: {type} nebyl nalezen v databázi.";
    }
}
