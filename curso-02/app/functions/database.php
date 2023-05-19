<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=devclass;charset=utf8",'root','ldz@123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}
function create(string $table, array $fields){
    

    // "inser into users ('name', 'email'...) values ('darlley', gmail...);"
    $sql = "insert into " . $table . " (". implode(',', array_keys($fields))  . ")" . " values (:" . implode(',:', array_keys($fields)).")";

    $pdo = connect();
    $insert = $pdo->prepare($sql);
    
    return $insert->execute($fields);
}
function update(){}
function find(){}
function delete(){}