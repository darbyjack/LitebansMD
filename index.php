<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<br>
<div class="container">
    <div class="jumbotron">
        <div class="litebans-index litebans-index-main">
            <h2><?php echo str_replace("{server}", $page->settings->name, $page->t("index.welcome.main")); ?></h2>
        </div>

        <div class="litebans-index litebans-index-sub"><p><?php echo $page->t("index.welcome.sub"); ?></p></div>
    </div>
</div>
<?php $page->print_footer(false); ?>
