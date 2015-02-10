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
        // $sql = 'SELECT * FROM scriptures';
        $sql = 'SELECT s.id, s.book, s.verse, s.chapter, s.content, t.name FROM scriptures s LEFT JOIN scripturesTopics st ON s.id = st.scriptureId LEFT JOIN topics t ON st.topicId = t.id';
        
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

function getTopics(){
    $conn = databaseConnection();
    
    try{
        $sql = 'SELECT * FROM topics';
        
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

function insertScripture($book, $chapter, $verse, $content){
    $conn = databaseConnection();
    
    try{
        $sql = 'INSERT INTO scriptures (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':book', $book, PDO::PARAM_STR);
        $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
        $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
        $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        $result = $stmt->execute();
        $insertId = $conn->lastInsertId();
        $stmt->closeCursor();
                
    } catch (PDOException $ex) {
        
    }

    if($result){
        return $insertId;
    }
    else{
        return FALSE;
    }
}

function insertScriptureTopic($resultScripture, $id){
    $conn = databaseConnection();
    
    try{
        $sql = 'INSERT INTO scripturestopics (scriptureId, topicId) VALUES (:scripture, :id)';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':scripture', $resultScripture, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        $stmt->closeCursor();
                
    } catch (PDOException $ex) {
        echo "database error with ST";
        exit;
    }

    if($result){
        return TRUE;
    }
    else{
        return FALSE;
    }

}