<?php

class Database {

    private $pdo;

    public function _construct($host, $db, $user, $password, $charset = 'utf8'){
        $this->connect($host, $db, $user, $password, $charset = 'utf8');
    }
    /**
     * connect to database
     * @param string $host
     * @param string $db
     * @param string password
     * @param string $charset
     * @return boolean
     */
    public function connect($host, $db, $user, $password, $charset = 'utf8') {
        $dsn = "mysql:host=$host; dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPATRES  => false,
        ];
        $this->pdo = new PDO($dsn, $user, $password, $opt);
      
    }
    /**
     * select database
     * @param string $fields
     * @param string @table
     * @return arry
     */
    public function select(array $arrayfields, $table) {
        $fields = implode(',', $arrayfields);
        $sql = "SELECT $fields FROM $table";
        return $this->pdo->query($sql)->fetchALL();

    }
    /**
     * update a record
     */
    public function update() {

    }
    /**
     * delete a record
     */
    public function delete() {

    }

    public function getPdo() {
       
    }
}