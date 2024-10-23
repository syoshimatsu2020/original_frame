<?php
    // ドキュメントルート
    define('DOCUMENT_ROOT', '/Applications/MAMP/htdocs/original_frame/');

    // サブディレクトリ名
    define('SUB_DIRECTPRY', '/original_frame/');

    // サイトURL
    define('SITE_URL', 'https://example.com');

    // データベース接続情報
    define('DATABASE'
        , [
            'HOST' => 'localhost'
            , 'NAME' => 'original_frame'
            , 'USER' => 'root'
            , 'PASS' => 'root'
        ]
    );

    date_default_timezone_set('Asia/Tokyo');
    session_start();

