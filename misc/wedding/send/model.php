<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require $_SERVER['DOCUMENT_ROOT'].'/wedding/library/functions.php';

function getemails(){
    $conn = wedConn();
    
    try{
        $sql ="SELECT person_firstName, person_lastName, person_email FROM announcement WHERE person_type='Email'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $ex ="there was an error with the database";
    }
        if(is_array($data)){
            return $data;
        }
        else{
            $ex = 'The Data was not an array';
        }
}
