<?php
namespace tbd\Controller\Interfaces;

interface Strategy {
    // 初期化用
    public static function init();

    //メイン処理
    public static function main();
}