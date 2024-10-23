<?php
    namespace tbd\Controller;
    /**
     *
     * 404ページ用
     */

    class _404 implements Interfaces\Strategy {
        // 初期化処理
        public static function init(): void {

        }
        //メイン処理
        public static function main(): void {

            $view_file = DOCUMENT_ROOT . "tbd/View/404.php";

            $title = '404ページ';
            $css = '/css/index.css';
            $js = '/js/index.js';

            require_once DOCUMENT_ROOT . 'tbd/View/Template/template.php';

            return;
        }
    }