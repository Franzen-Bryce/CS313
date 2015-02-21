<?php 

require $_SERVER['DOCUMENT_ROOT']. '/library/functions.php';

function getServiceReviews($serviceId){
    $conn = databaseConnectionUser();
   
    try{
        $sql = 'SELECT reviewName, reviewDate, reviewText, reviewRating FROM reviews WHERE service_id = :id AND reviewApproved = 1 ORDER BY reviewDate DESC';        
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $serviceId, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] == "There was an error fetching customer reviews";
    }
    
    if(is_array($data)){
        return $data;
    }
    else {
        return FALSE;
    }
}

function getServiceName($serviceId){
    $conn = databaseConnectionUser();
   
    try{
        $sql = 'SELECT serviceName FROM services WHERE service_id = :id';        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $serviceId, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch();
        $stmt->closeCursor();
    } 
    catch (PDOException $ex) {
        $_SESSION['errors'] == "There was an error fetching serviceName";
    }
    
    if(is_array($data)){
        return $data;
    }
    else {
        return FALSE;
    }
}

function insertReview($name, $rating, $review, $date, $serviceId){
    $conn = databaseConnection();
    try{
        $sql = "INSERT INTO reviews (reviewName, reviewDate, reviewText, reviewRating, service_id, reviewApproved) VALUES (:reviewName, :reviewDate, :reviewText, :reviewRating, :service_id, '0')";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':reviewName', $name, PDO::PARAM_STR);
        $stmt->bindValue(':reviewDate', $date, PDO::PARAM_STR);
        $stmt->bindValue(':reviewText', $review, PDO::PARAM_STR);
        $stmt->bindValue(':reviewRating', $rating, PDO::PARAM_INT);
        $stmt->bindValue(':service_id', $serviceId, PDO::PARAM_INT);
        $result = $stmt->execute();
        $stmt->closeCursor();
                
    } catch (PDOException $ex) {
        
    }

    if($result){
        return TRUE;
    }
    else{
        return FALSE;
    }    
}

function emailReviewUpdate(){

    $to ='bryce.franzen@thepitcrewautomotive.com, mike.franzen@thepitcrewautomotive.com';

    mail($to,"Customer Review Pending Approval","You have one or more customer reviews pending approval","from: Customer Review Submission");

    return TRUE;
}