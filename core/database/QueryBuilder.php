<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class) {
        $query = $this->pdo->prepare("select * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $class); //, 'Grocery'
    }

    public function insert($table, $parameters) {
        $query = sprintf(
            'insert into %s (%s) values (%s);',
            $table, 
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die ("Whoops, looks liek something whent wrong.");
        }
    }

}