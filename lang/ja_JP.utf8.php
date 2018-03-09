<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'ようこそ！ {server} の BANリストへ';
        $array["index.welcome.sub"] = 'ここには全ての処罰が公開されています';

        $array["title.index"] = 'ホーム';
        $array["title.bans"] = 'BAN';
        $array["title.mutes"] = 'ミュート';
        $array["title.warnings"] = '警告';
        $array["title.kicks"] = 'キック';

        $array["page.permanent.ban"] = '無期限BAN';
        $array["page.permanent.mute"] = '無期限ミュート';
        $array["page.permanent.warning"] = '無期限';
        $array["page.expired.ban"] = '(解除済み)';
        $array["page.expired.ban-by"] = '({name}によって解除されました)';
        $array["page.expired.mute"] = '(解除済み)';
        $array["page.expired.mute-by"] = '({name}によって解除されました)';
        $array["page.expired.warning"] = '(期限が終わりました)';
        $array["page_title_ban"] = 'BAN';
        $array["page_title_mute"] = 'ミュート';
        $array["page_title_warn"] = '警告';
        $array["page_title_kick"] = 'キック';
        $array["check.username"] = "プレイヤー";
        $array["action.check"] = "検索";
        $array["table.pager.number"] = "ページ";

        $array["error.name.unseen"] = "このプレイヤーはサーバーに参加していません";

        $array["title.staff-history"] = "最近の発行:";
        $array["title.player-history"] = "最近の処罰:";
        $array["history.type"] = "タイプ";
        $array["history_tableplayer"] = "プレイヤー";
        $array["history_tablemoderator"] = "発行";
        $array["history_tablereason"] = "理由";
        $array["history_tabledate"] = "日時";
        $array["history_tableexpires"] = "期限";
        $array["history.error.uuid.no-result"] = "処罰データはありません";
        $array["action.return"] = "戻る";

        $array["info_banned_player"] = "BANされたプレイヤー";
        $array["info_banned_by"] = "BANしたプレイヤー";
        $array["info_banned_reason"] = "BAN理由";
        $array["info_banned_when"] = "BANされた日時";
        $array["info_banned_expiry"] = "期限";
        $array["info_muted_player"] = "ミュートされたプレイヤー";
        $array["info_muted_by"] = "ミュートにしたプレイヤー";
        $array["info_muted_reason"] = "ミュート理由";
        $array["info_muted_when"] = "ミュートされた日時";
        $array["info_muted_expiry"] = "期限";
        $array["info_warn_name"] = "警告";
        $array["info_warn_player"] = "警告されたプレイヤー";
        $array["info_warn_by"] = "警告したプレイヤー";
        $array["info_warn_reason"] = "警告理由";
        $array["info_warn_when"] = "警告された日時";
        $array["info_warn_expiry"] = "期限";
        $array["info_kick_player"] = "キックされたプレイヤー";
        $array["info_kick_by"] = "キックしたプレイヤー";
        $array["info_kick_reason"] = "キック理由";
        $array["info_kick_when"] = "キックされた日時";

        $array["bans_player"] = "プレイヤー名";
        $array["bans_by"] = "発行者";
        $array["bans_reason"] = "理由";
        $array["bans_when"] = "日時";
        $array["bans_expiry"] = "期限";

        $array["kicks_player"] = "プレイヤー名";
        $array["kicks_by"] = "発行者";
        $array["kicks_reason"] = "理由";
        $array["kicks_when"] = "日時";

        $array["mutes_player"] = "プレイヤー名";
        $array["mutes_by"] = "発行者";
        $array["mutes_reason"] = "理由";
        $array["mutes_when"] = "日時";
        $array["mutes_expiry"] = "期限";

        $array["warns_player"] = "プレイヤー名";
        $array["warns_by"] = "発行者";
        $array["warns_reason"] = "理由";
        $array["warns_when"] = "日時";
        $array["warnings.received"] = "受け取った警告";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "プレイヤー名が無効です";
        $array["history.error.uuid.required"] = "引数がありません (uuid).";
        $array["info.error.type-id.required"] = "引数がありません (type, id).";
        $array["info.error.type.invalid"] = "無効なページタイプが要求されました";
        $array["info.error.id.invalid"] = "無効なID";
        $array["info.error.id.no-result"] = "エラー: ";
        $array["info_error_notfound2"] = " はデータベースで見つかりません";
        $array["info_error_notplayer"] = "エラー: プレイヤーが見つかりません";
        $array["history_playernotfound"] = "データベースでプレイヤーは見つかりません";
    }
}
