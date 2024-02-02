<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Doborodšli na {server} seznam kazni.";
        $array["index.welcome.sub"] = "Tukaj so javno objavljene vse kazni, ki jih je osebje dodelilo igralcem na strežniku.";

        $array["title.index"] = 'Domov';
        $array["title.bans"] = 'Suspendi';
        $array["title.mutes"] = 'Utišanja';
        $array["title.warnings"] = 'Opozorila';
        $array["title.kicks"] = 'Odstranitve';
        $array["title.player-history"] = "Nedavne kazni za {name}";
        $array["title.staff-history"] = "Nedavne kazni od {name}";

        $array["page.expired.ban"] = '(Opravičeno)';
        $array["page.expired.ban-by"] = '(Kazen odstranil {name})';
        $array["page.expired.mute"] = '(Poteklo)';
        $array["page.expired.mute-by"] = '(Kazen odstranil {name})';
        $array["page.expired.warning"] = '(Poteklo)';

        $array["generic.ban"] = "Suspend";
        $array["generic.mute"] = "Utišanje";
        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];
        $array["generic.warn"] = "Opozorilo";
        $array["generic.kick"] = "Odstranitev";
        $array["generic.type"] = "Vrsta";
        $array["generic.active"] = "Aktivno";
        $array["generic.inactive"] = "Neaktivno";
        $array["generic.permanent"] = "Doživljenska kazen";
        $array["generic.permanent.ban"] = "Doživljenski";
        $array["generic.permanent.mute"] = "Doživljensko";
        $array["generic.player-name"] = "Igralec";

        $array["table.player"] = $array["generic.player-name"];
        $array["table.executor"] = "Član osebja";
        $array["table.reason"] = "Razlog";
        $array["table.date"] = "Datum";
        $array["table.expires"] = "Poteče";

        $array["table.server.name"] = "Strežnik";
        $array["table.server.scope"] = "Obseg strežnikov";
        $array["table.server.origin"] = "Ivzorni strežnik";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Stran";

        $array["action.check"] = "Preveri";
        $array["action.return"] = "Vrni se na {origin}";

        $array["warnings.received"] = "Prejel opozorilo";

        $array["error.missing-args"] = "Manjkajo argumenti.";
        $array["error.name.unseen"] = "{name} ni bil najden.";
        $array["error.name.invalid"] = "Neveljavno ime.";
        $array["history.error.uuid.no-result"] = "Nobena kazen ni bila najdena.";
        $array["info.error.id.no-result"] = "Napaka: {type} ni najden v bazi podatkov.";

        //Custom Added by GlareMasters's Material Design Addon
        $array["contact_button"] = "Kontaktirajte nas";
        $array["ban_appeal"] = "Pritožite se nad svojo kaznijo";
        $array["players_online"] = "Aktivni igralci:";
        $array["credits"] = "Zasluge";
        $array["github"] = "GitHub";
        $array["litebans"] = "LiteBans";
        $array["glare"] = "GlareMasters";
        $array["join"] = "Pridruži se";
        $array["others"] = "ostalim igralcem na";
	    $array["version"] = "Verzija: ";
	    $array["version_latest"] = "Najnovejša";
	    $array["click_for_latest_version"] = "Kliknite tukaj, da dobite najnovejšo verzijo.";
        $array["query_not_enabled"] = "Poizvedovanje ni omogočeno v vašem spigot.yml.";
    }
}
