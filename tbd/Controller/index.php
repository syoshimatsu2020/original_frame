<?php
    namespace tbd\Controller;
    /**
     *
     * トップページ
     */

    class index implements Interfaces\Strategy {
        // 初期化処理
        public static function init(): void {

        }
        //メイン処理
        public static function main(): void {

            $data = \tbd\Model\Sample::getInfo();

            $view_file = DOCUMENT_ROOT . "tbd/View/index.php";

            $title = $data['site_name'];
            $discription = $data['discription'];
            $css = '/css/index.css';
            $js = '/js/index.js';

            require_once DOCUMENT_ROOT . 'tbd/View/Template/template.php';

            return;
        }
    }