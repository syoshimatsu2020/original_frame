<?php
    // 設定ファイル読み込み
    include 'Core/Config.php';

    // クラスローダー読み込み
    require_once 'Core/ClassLoader.php';
    $loader = new ClassLoader();
    $loader->register();

    // ルーター読み込み
    require_once 'Core/Router.php';

    $Strategy = 'tbd\Controller' . str_replace(array('/'), array('\\'), $path[0]);
    $Strategy::init();
    $Strategy::main();


