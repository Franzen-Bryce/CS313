<?php 

require $_SERVER['DOCUMENT_ROOT']. '/library/functions.php';

function getServiceReviews($serviceId){
    $conn = databaseConnectionUser();
   
    try{
        $sql = 'SELECT #########, ##########, #######, ############ FROM ####### WHERE ########### = :id AND ############### = 1 ORDER BY ######## DESC';        
        
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
 		$sql = 'SELECT ############ FROM ######### WHERE ######### = :id';        
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
        $sql = "INSERT INTO ########## (#########, ########, ###########, #############, #########, ################) VALUES (:##########, :########, :#########, :#########, :##########, '#')";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':#########', $###, PDO::PARAM_###);
        $stmt->bindValue(':#######', $####, PDO::PARAM_###);
        $stmt->bindValue(':#########', $#####, PDO::PARAM_###);
        $stmt->bindValue(':##########', $#####, PDO::PARAM_###);
        $stmt->bindValue(':########', $#####, PDO::PARAM_###);
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