<?php 

function databaseConnectionUser(){
        $server = 'localhost';
        $username = 'franzeni_iUser';
        $passwd = 'generalUserAdmit';
        $database = 'moviestest';
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
