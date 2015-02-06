<?php

function databaseConnection(){
        $server = 'localhost';
        $username = '#########';
        $passwd = '##########################';
        $database = '##################';
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

function databaseConnectionUser(){
        $server = 'localhost';
        $username = '############';
        $passwd = '#################';
        $database = '########################';
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

function hashPassword($password) {
    if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
        $salt = '############' . substr(md5(uniqid(rand(), true)), 0, ####);
        return crypt($password, $salt);
    }
}

function verifyPassword($password, $hashedPassword) {
    return crypt($password, $hashedPassword) == $hashedPassword;
}

function verifyString($string){
    $string = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    return $string;
}

function verifyInt($int){
    $int = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    return $int;
}
