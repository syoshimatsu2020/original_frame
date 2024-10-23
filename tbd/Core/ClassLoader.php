<?php
    class ClassLoader {
        // 未定義のクラスが呼ばれた時の処理
        public function register(): void {
            spl_autoload_register( [$this, 'loadClass'] );
        }
        
        public function loadClass(string $class): void {
            $path = str_replace('\\', '/', $class);
            $file = DOCUMENT_ROOT . $path . '.php';
            
            // 該当ファイルの存在確認
            if (is_readable($file)) {
                require_once $file;
                return;
            }

            // Controllerで定義されていない時だけ404エラー
            if (strpos($path, 'tbd/Controller/') === 0) {
                tbd\Controller\_404::init();
                tbd\Controller\_404::main();
                exit();
            }
        }
    }