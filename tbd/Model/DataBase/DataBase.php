<?php
    namespace tbd\Model\DataBase;
    /**
     * 
     * データベースのモデル
     *
     */

     class DataBase {
        /**
         * データベース接続を行う。
         * 一度生成されたインスタンスはそのまま返す
         * @return self::$schema
         */

        private static $schema;

        public static function pdo() {
            if (!isset(self::$schema)) {
                try {
                    self::$schema = new \PDO(
                        sprintf(
                            'mysql:host=%s;dbname=%s'
                            , DATABASE['HOST']
                            , DATABASE['NAME']
                        )
                        , DATABASE['USER']
                        , DATABASE['PASS']
                    );
                } catch (PDOException $e) {
                    die('Error:' . $e->getMessage());
                }
            }

            return self::$schema;
        }
     }