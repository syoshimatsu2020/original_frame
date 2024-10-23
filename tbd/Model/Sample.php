<?php
    namespace tbd\Model;
    /**
     * sampleモデル
     * 
     */

    class Sample {
        public static function getInfo() {
            $db = \tbd\Model\DataBase\DataBase::pdo();

            $sql = 'SELECT site_name, discription FROM info';

            $stmt = $db->prepare($sql);
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
    }