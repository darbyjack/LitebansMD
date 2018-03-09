<?php
class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'Bienvenido a la Lista de Sanciones de {server}.';
        $array["index.welcome.sub"] = 'Aquí se encuntran todas las Sanciones del Servidor.';

        $array["title.index"] = 'Inicio';
        $array["title.bans"] = 'Baneos';
        $array["title.mutes"] = 'Muteos';
        $array["title.warnings"] = 'Advertencias';
        $array["title.kicks"] = 'Expulsiones';

        $array["page.permanent.ban"] = 'Baneo Permanente';
        $array["page.permanent.mute"] = 'Muteo Permanente';
        $array["page.permanent.warning"] = 'Permanente';
        $array["page.expired.ban"] = '(Desbaneado)';
        $array["page.expired.ban-by"] = '(Desbaneado por {name})';
        $array["page.expired.mute"] = '(Desmuteado)';
        $array["page.expired.mute-by"] = '(Desmuteado por {name})';
        $array["page.expired.warning"] = '(Expirado)';
        $array["page_title_ban"] = 'Baneos';
        $array["page_title_mute"] = 'Muteos';
        $array["page_title_warn"] = 'Advertencias';
        $array["page_title_kick"] = 'Expulsiones';
        $array["check.username"] = "Jugador";
        $array["action.check"] = "Buscar";
        $array["table.pager.number"] = "Página";

        $array["error.name.unseen"] = "no existe.";

        $array["title.staff-history"] = "Sanciones Recientes por ";
        $array["title.player-history"] = "Sanciones Recientes para ";
        $array["history.type"] = "Sanción";
        $array["history_tableplayer"] = "Jugador";
        $array["history_tablemoderator"] = "Moderador";
        $array["history_tablereason"] = "Razón";
        $array["history_tabledate"] = "Fecha";
        $array["history_tableexpires"] = "Expira";
        $array["history.error.uuid.no-result"] = "Castigos No Encontrados.";
        $array["action.return"] = "Volver a";

        $array["info_banned_player"] = "Jugador Baneado";
        $array["info_banned_by"] = "Baneado por";
        $array["info_banned_reason"] = "Razón del Baneo";
        $array["info_banned_when"] = "Baneado el";
        $array["info_banned_expiry"] = "Expira";
        $array["info_muted_player"] = "Jugador Muteado";
        $array["info_muted_by"] = "Muteado por";
        $array["info_muted_reason"] = "Razón del Muteo";
        $array["info_muted_when"] = "Muteado el";
        $array["info_muted_expiry"] = "Expira";
        $array["info_warn_name"] = "Advertencia";
        $array["info_warn_player"] = "Jugador Advertido";
        $array["info_warn_by"] = "Advertido por";
        $array["info_warn_reason"] = "Razón de la Advertencia";
        $array["info_warn_when"] = "Advertido el";
        $array["info_warn_expiry"] = "Expira";
        $array["info_kick_player"] = "Jugador Expulsado";
        $array["info_kick_by"] = "Expulsado por";
        $array["info_kick_reason"] = "Razón de la Expulsión";
        $array["info_kick_when"] = "Fecha de la Expulsión";

        $array["bans_player"] = "Nombre";
        $array["bans_by"] = "Baneado por";
        $array["bans_reason"] = "Razón";
        $array["bans_when"] = "Baneado el";
        $array["bans_expiry"] = "Baneado hasta";

        $array["kicks_player"] = "Nombre";
        $array["kicks_by"] = "Expulsado por";
        $array["kicks_reason"] = "Razón";
        $array["kicks_when"] = "Fecha";

        $array["mutes_player"] = "Nombre";
        $array["mutes_by"] = "Muteado por";
        $array["mutes_reason"] = "Razón";
        $array["mutes_when"] = "Muteado el";
        $array["mutes_expiry"] = "Muteado hasta";

        $array["warns_player"] = "Nombre";
        $array["warns_by"] = "Advertido por";
        $array["warns_reason"] = "Razón";
        $array["warns_when"] = "Advertido el";
        $array["warnings.received"] = "¿Advertencia Recibida?";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Nombre Inválido.";
        $array["history.error.uuid.required"] = "Argumentos Inválidos (uuid).";
        $array["info.error.type-id.required"] = "Argumentos Inválidos (tipo, id).";
        $array["info.error.type.invalid"] = "La página que deseas visitar no existe.";
        $array["info.error.id.invalid"] = "ID Inválida";
        $array["info.error.id.no-result"] = "Error: ";
        $array["info_error_notfound2"] = " no encontrado en la Base de Datos.";
        $array["info_error_notplayer"] = "Error: Jugador no Encontrado.";
        $array["history_playernotfound"] = "Jugador No Encontrado en la Base de Datos.";
    }
}
