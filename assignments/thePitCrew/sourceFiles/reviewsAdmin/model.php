<?php
date_default_timezone_set("America/Los_Angeles");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include $_SERVER['DOCUMENT_ROOT'].'/library/functions.php';

//____________________  REVIEWS _________________________________________

function getPendingReviews(){
    $conn = databaseConnection();
   
    try{
        $sql = "SELECT r.#########, r.#########, r.########, r.#########, r.#########, s.########, r.######## FROM ####### r JOIN ######## s ON r.############ = s.############# WHERE r.######## = # ORDER BY r.#########";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();    
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] = "There was an error with getPendingReviews()";
        header ('Location: /?action=pendingReviews');
        exit;
    }
    
    if(is_array($data)){
        return $data;
    }
    else {
        return FALSE;
    }
}

function getActiveReviews(){
    $conn = databaseConnection();
   
    try{
        $sql = "SELECT r.#####, r.#######, r.########, r.###########, r.#########, s.#########, r.######## FROM ######### r JOIN ########## s ON r.####### = s.####### WHERE r.########## = 1 AND s.########### != ## ORDER BY r.######## DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();    
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] = "There was an error with getActiveReviews()";
        header ('Location: /?action=editReviews');
        exit;
    }
    
    if(is_array($data)){
        return $data;
    }
    else {
        return FALSE;
    }
}

function approveReview($id){
    $conn = databaseConnection();
    
    try{
      $sql = 'UPDATE ####### SET ############ = # WHERE #########= :id LIMIT 1';
        
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      $rowcount = $stmt->rowCount(); //How many rows were affected
      $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $message='error with database';
    }
    
        if ($rowcount) {
          return TRUE; // A successful Update
        } 
        else {
          return FALSE; // A failed Update
        }

}

function deleteReview($id){
    $conn = databaseConnection();
    try{
        $sql='DELETE FROM ###### WHERE ########= :id';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $updateResult = $stmt->rowCount();
        $stmt->closeCursor();
            
        } catch (PDOException $ex) {
            echo 'database error';
        }
        
        if($updateResult){
            return TRUE;
        }
        else{
            return FALSE;
        }
}