<?php

function databaseConnection(){
        $server = 'localhost';
        $username = 'franzeni_iClient';
        $passwd = '11773218d21e7bf4c5e40f7ba1';
        $database = 'scriptures';
        $dsn = "mysql:host=$server; dbname=$database";
        try{
            $dataConn = new PDO($dsn, $username, $passwd); //creates a PDO Object
        } catch (PDOException $exc) {
                echo "<p>An error occurred while connecting to the database</p>";
        }
        
        if(is_object($dataConn)){
            return $dataConn;
        }
        else{
            return FALSE;
        }
}

function getScriptures(){
$conn = databaseConnection();
    
    try{
        $sql = 'SELECT * FROM scriptures';
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
            
    } catch (PDOException $ex) {
        echo 'getScriptures error';
    }
        if(is_array($data)){
            return $data;
        }
        else{
            return FALSE;
        }
}

function getSpecificScriptures($searchVariable){
$conn = databaseConnection();
    
    try{
        $sql = 'SELECT * FROM scriptures WHERE book = :book';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':book', $searchVariable, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
            
    } catch (PDOException $ex) {
        echo 'getScriptures error';
    }
        if(is_array($data)){
            return $data;
        }
        else{
            return FALSE;
        }
}
