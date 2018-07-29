<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>litebans-php - Missing Extensions</title>
    <link href="../inc/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2>Missing Extensions</h2><br>
        <div class="text-warning">
            The following PHP extensions are required by litebans-php but were not found:
            <br>
            <?php if (!extension_loaded("pdo_mysql")) {
                echo "- <a class=\"text-danger\">pdo_mysql</a>";
            } ?>



            <?php

            ob_start();
            phpinfo();
            $phpinfo = array('phpinfo' => array());
            if (preg_match_all('#(?:<h2>(?:<a name=".*?">)?(.*?)(?:</a>)?</h2>)|(?:<tr(?: class=".*?")?><t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>(?:<t[hd](?: class=".*?")?>(.*?)\s*</t[hd]>)?)?</tr>)#s', ob_get_clean(), $matches, PREG_SET_ORDER))
                foreach ($matches as $match)
                    if (strlen($match[1]))
                        $phpinfo[$match[1]] = array();
                    elseif (isset($match[3]))
                        $phpinfo[end(array_keys($phpinfo))][$match[2]] = isset($match[4]) ? array($match[3], $match[4]) : $match[3];
                    else
                        $phpinfo[end(array_keys($phpinfo))][] = $match[2];

            echo "These extensions can be enabled in php.ini.<br>";
            echo "php.ini location: <a class=\"text-info\">" . $phpinfo['phpinfo']["Loaded Configuration File"] . "</a>";
            ?>
        </div>
        <br>
        <a href="../" class="btn btn-default">Try Again</a>
    </div>
</div>
</body>
</html>
