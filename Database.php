<?php

class Database{
    public function query($sql){
        // Data Source Name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
        // PDO -PHP Data Object
        $pdo = new PDO($dsn);
        // 1. sagatavot vaicājumu (statement)
        $statement = $pdo->prepare($sql);
        // 2.Izpildit statement
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data; //atgriežam data kas tiek atgriezti index.php
    }
}
?>