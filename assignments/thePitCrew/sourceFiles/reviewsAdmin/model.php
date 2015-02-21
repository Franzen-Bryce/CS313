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
        $sql = "SELECT r.review_id, r.reviewName, r.reviewDate, r.reviewText, r.reviewRating, s.serviceName, r.reviewApproved FROM reviews r JOIN services s ON r.service_id = s.service_id WHERE r.reviewApproved = 0 ORDER BY r.reviewDate";
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

function approveReview($id){
    $conn = databaseConnection();
    
    try{
      $sql = 'UPDATE reviews SET reviewApproved = 1 WHERE review_id= :id LIMIT 1';
        
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
        $sql='DELETE FROM reviews WHERE review_id= :id';
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

function getActiveReviewServices(){
    $conn = databaseConnection();
   
    try{
        $sql = "SELECT DISTINCT s.service_id, s.serviceName FROM reviews r JOIN services s ON r.service_id = s.service_id WHERE r.reviewApproved = 1 AND s.service_id != 13 ORDER BY s.serviceName ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();    
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] = "There was an error with getActiveReviewServices()";
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

function reviewSort($service_id, $reviewRating, $direction){
    //Did not use BindValue because it does not allow SQL Injection, and I am doing that on purpose here...
    $conn = databaseConnection();
    try{
        $sql = "SELECT r.review_id, r.reviewName, r.reviewDate, r.reviewText, r.reviewRating, s.serviceName, r.reviewApproved FROM reviews r JOIN services s ON r.service_id = s.service_id WHERE (r.reviewRating = $reviewRating) AND r.reviewApproved = 1 AND s.service_id != 13 AND (s.service_id = $service_id) ORDER BY r.reviewDate $direction";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();    
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] = "There was an error with sortReviewsByStars()";
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