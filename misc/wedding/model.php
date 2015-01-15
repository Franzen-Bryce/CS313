<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function saveData1($firstName, $lastName, $email, $type, $message){
    
    $conn = wedConn();
    
    try{
        $sql = 'INSERT INTO announcement (person_firstName, person_lastName, person_email, person_type, person_message) VALUES (:firstName, :lastName, :email, :type, :message)';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        
        $result = $stmt->execute();
        $stmt->closeCursor();
                
    } catch (PDOException $exc) {
        $exc = "There was an error with the database.  Sorry.";
    }
    if($result){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}


function saveData2($firstName, $lastName, $address1, $address2, $city, $state, $zip, $type, $message){
    
    $conn = wedConn();
    
    try{
        $sql = 'INSERT INTO announcement (person_firstName, person_lastName, person_street1, person_street2, person_city, person_state, person_zip, person_type, person_message) VALUES (:firstName, :lastName, :address1, :address2, :city, :state, :zip, :type, :message)';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':address1', $address1, PDO::PARAM_STR);
        $stmt->bindValue(':address2', $address2, PDO::PARAM_STR);
        $stmt->bindValue(':city', $city, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':zip', $zip, PDO::PARAM_STR);
        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        
        $result = $stmt->execute();
        $stmt->closeCursor();
                
    } catch (PDOException $exc) {
        $exc = "There was an error with the database.  Sorry.";
    }
    if($result){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}


function saveData3($firstName, $lastName, $email, $address1, $address2, $city, $state, $zip, $type, $message){
    
    $conn = wedConn();
    
    try{
        $sql = 'INSERT INTO announcement (person_firstName, person_lastName, person_email, person_street1, person_street2, person_city, person_state, person_zip, person_type, person_message) VALUES (:firstName, :lastName, :email, :address1, :address2, :city, :state, :zip, :type, :message)';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':address1', $address1, PDO::PARAM_STR);
        $stmt->bindValue(':address2', $address2, PDO::PARAM_STR);
        $stmt->bindValue(':city', $city, PDO::PARAM_STR);
        $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        $stmt->bindValue(':zip', $zip, PDO::PARAM_STR);
        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
        $stmt->bindValue(':message', $message, PDO::PARAM_STR);
        
        $result = $stmt->execute();
        $stmt->closeCursor();
                
    } catch (PDOException $exc) {
        $exc = "There was an error with the database.  Sorry.";
    }
    if($result){
        return TRUE;
    }
    else{
        return FALSE;
    } 
}
