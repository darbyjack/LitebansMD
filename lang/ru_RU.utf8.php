<?php
// Translated by serflash (Alternative version), The creator of the project SimpleCraft.
// Перевел serflash (Альтернативая версия), Основатель проекта SimpleCraft.

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "{server} | Бан-лист";
        $array["index.welcome.sub"] = "Здесь попадают всех нарушители в бан лист";

        $array["title.index"] = 'Домой';
        $array["title.bans"] = 'Баны';
        $array["title.mutes"] = 'Муты';
        $array["title.warnings"] = 'Варны';
        $array["title.kicks"] = 'Кикнутые';
        $array["title.player-history"] = "Недавние наказания для {name}";
        $array["title.staff-history"] = "Недавние наказыванных {name}";


        $array["generic.ban"] = "Бан";
        $array["generic.mute"] = "Мут";
        $array["generic.warn"] = "Варн";
        $array["generic.kick"] = "Кик";

        $array["generic.banned"] = "Забанен";
        $array["generic.muted"] = "Закнут";
        $array["generic.warned"] = "Предупрежден";
        $array["generic.kicked"] = "Кикнут";

        $array["generic.banned.by"] = $array["generic.banned"] . " ";
        $array["generic.muted.by"] = $array["generic.muted"] . " ";
        $array["generic.warned.by"] = $array["generic.warned"] . " ";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " ";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Постоянный";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Тип";
        $array["generic.active"] = "Активный";
        $array["generic.inactive"] = "Неактивный";
        $array["generic.expired"] = "Недействителен";
        $array["generic.player-name"] = "Игрок";

        $array["page.expired.ban"] = '(Разбанен)';
        $array["page.expired.ban-by"] = '(Разбанил {name})';
        $array["page.expired.mute"] = '(Снял затычку)';
        $array["page.expired.mute-by"] = '(Снял затычку {name})';
        $array["page.expired.warning"] = '!' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Привелегий";
        $array["table.reason"] = "Причина";
        $array["table.date"] = "Дата";
        $array["table.expires"] = "Истекается";
        $array["table.received-warning"] = "Получено варн";

        $array["table.server.name"] = "Сервер";
        $array["table.server.scope"] = "Область сервера";
        $array["table.server.origin"] = "Исходной место";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Стр.";

        $array["action.check"] = "Проверить";
        $array["action.return"] = "Вернутся в {origin}";

        $array["error.missing-args"] = "отсутствует аркументы.";
        $array["error.name.unseen"] = "{name} небыло еще раньше в игре.";
        $array["error.name.invalid"] = "Неверный игрок.";
        $array["history.error.uuid.no-result"] = "Небыло нарушители.";
        $array["info.error.id.no-result"] = "Ошибка: {type} Не найдено в базе данных.";
    }
}