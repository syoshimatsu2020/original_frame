<?php
    // urlとパラメータを分割
    $path = explode('?', $_SERVER['REQUEST_URI']);

    // サブディレクトリに展開している場合は、サブディレクトリ名を削除
    $path[0] = str_replace(SUB_DIRECTPRY, '/', $path[0]);

    // index.phpとindex.htmlを削除
    $path[0] = str_replace('index.php', '', $path[0]);
    $path[0] = str_replace('index.html', '', $path[0]);

    // クラス名にハイフンが使えないので置換
    $path[0] = str_replace('-', '_', $path[0]);

    // クラス名に数字始まりが使えないので置換
    foreach (range(0, 9) as $int) {
        $path[0] = str_replace('/' . $int, '/_' . $int, $path[0]);
    }

    // パスが存在しない場合indexを設定
    if (empty($path[0]) || $path[0] === '/') {
        $path[0] = '/index';
    }
