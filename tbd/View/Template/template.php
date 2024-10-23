<!DOCTYPE html>
    <html lang="jp">
        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
            <meta charset="utf-8" />
            <title><?php echo $title;?></title>
            <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
            <meta name="description" content="" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="/css/common.css" media="all"/>
            <link rel="stylesheet" href="<?php echo $css;?>" media="all"/>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="shortcut icon" href="">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="/js/common.js" type="text/javascript" charset="utf-8"></script>
            <script src="<?php echo $js;?>" type="text/javascript" charset="utf-8"></script>
        </head>
        <body>
            <?php require_once($view_file) ?>
        </body>
    </html>