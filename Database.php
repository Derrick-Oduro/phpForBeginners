<?php
class Database {

    public $connection;

    public $statement;

    public function __construct($config,$username = 'root',$password = 'Derek.419') {


        

        $dsn= 'mysql:'.http_build_query($config, '', ';');
        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
  


    }
    public function query($query,$param = []){
        
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($param);
        return $this;

    }

    public function find(){
        return $this->statement->fetch();
    }

    public function fetchAll(){
        return $this->statement->fetchAll();
    }
    public function findOrFail(){
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }

}