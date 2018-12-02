<?php

class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "欢迎来到 {server} 封禁列表.";
        $array["index.welcome.sub"] = "这里列出了本服所有的惩罚列表.";

        $array["title.index"] = '主页';
        $array["title.bans"] = '封禁';
        $array["title.mutes"] = '禁言';
        $array["title.warnings"] = '警告';
        $array["title.kicks"] = '踢出';
        $array["title.player-history"] = "{name} 最近的处罚";
        $array["title.staff-history"] = "最近被 {name} 处理的处罚";


        $array["generic.ban"] = "封禁";
        $array["generic.mute"] = "禁言";
        $array["generic.warn"] = "警告";
        $array["generic.kick"] = "踢出";

        $array["generic.banned"] = "已封禁";
        $array["generic.muted"] = "已禁言";
        $array["generic.warned"] = "已警告";
        $array["generic.kicked"] = "已踢出";

        $array["generic.banned.by"] = $array["generic.banned"] . " 处理者";
        $array["generic.muted.by"] = $array["generic.muted"] . " 处理者";
        $array["generic.warned.by"] = $array["generic.warned"] . " 处理者";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " 处理者";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];
        
        $array["generic.permanent"] = "永久";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];
       
        $array["generic.type"] = "类型";
        $array["generic.active"] = "有效";
        $array["generic.inactive"] = "无效";
        $array["generic.expired"] = "已过期";
        $array["generic.player-name"] = "玩家id";

        $array["page.expired.ban"] = '(已解封)';
        $array["page.expired.ban-by"] = '(解封者为 {name})';
        $array["page.expired.mute"] = '(已解封)';
        $array["page.expired.mute-by"] = '(解封者为 {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "处理者";
        $array["table.reason"] = "原因";
        $array["table.date"] = "处理日期";
        $array["table.expires"] = "过期时间";
        $array["table.received-warning"] = "收到警告";

        $array["table.server.name"] = "适用服务器";
        $array["table.server.scope"] = "服务器范围";
        $array["table.server.origin"] = "处理服务器";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "页数";

        $array["action.check"] = "查找";
        $array["action.return"] = "返回 {origin}";

        $array["error.missing-args"] = "缺少参数.";
        $array["error.name.unseen"] = "{name} 从未加入过服务器.";
        $array["error.name.invalid"] = "无效名称.";
        $array["history.error.uuid.no-result"] = "没有处罚找到";
        $array["info.error.id.no-result"] = "错误: {type} 在数据库中未找到.";
    }
}
