<?php
date_default_timezone_set("America/Los_Angeles");

if(!$_SESSION){
    session_start();
 }
 if (!$_SESSION['#############'] == "##########"){
         // not logged in move to login page
         header('Location: /coupons/adminLogin.php');
         exit;
     }

require $_SERVER['DOCUMENT_ROOT'].'/admin/model.php';

//REVIEWS _____________________________________________________________________________
if($_GET['action']=='editReviews'){
    if ((!isset($_SESSION['reviewsSortService'])) || ($_SESSION['reviewsSortService'] == "none")){
        $service_id = "9999 OR 1 = 1";
    }
        else {
            $service_id = $_SESSION['reviewsSortService'];
        }
    if ((!isset($_SESSION['reviewsSortRating'])) || ($_SESSION['reviewsSortRating'] == "none")){
        $reviewRating = "6 OR 1 = 1";
    }
        else {
            switch ($_SESSION['reviewsSortRating']) {
                    case '1star': $reviewRating = "1";
                        break;
                    case '2stars': $reviewRating = "2";
                        break;
                    case '3stars': $reviewRating = "3";
                        break;
                    case '4stars': $reviewRating = "4";
                        break;
                    case '5stars': $reviewRating = "5";
                        break;
                }
        }
    if ((!isset($_SESSION['reviewsSortDate'])) || ($_SESSION['reviewsSortDate'] == "DESC")){
        $direction = "DESC";
    }
        else {
            $direction = "ASC";
        }

    $reviews = reviewSort($service_id, $reviewRating, $direction);

    $activeServices = getActiveReviewServices();
    $reviewServices = "";
        foreach ($activeServices as $value) {
            if ($_SESSION['reviewsSortService'] == $value[0]){
                $reviewServices .= "<option value='$value[0]' selected>$value[1]</option>";
            }
            else {
                $reviewServices .= "<option value='$value[0]'>$value[1]</option>";
            }
        }
    $page = "activeReviews";
    if($reviews){
        $output = "";
        foreach ($reviews as $value) {
            //Code to create star view output
            for ($i=0; $i < 5; $i++) { 
                if ($i < $value[4]) {
                    $stars .= "<i class='fa fa-star fa-lg' style='color: gold;'></i>";
                }
                else{
                $stars .= "<i class='fa fa-star-o fa-lg' style='color: gold;'></i>";
                }
            }
            $output .= "<div class='row' style='margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #d2d2d2'>"
                            ."<div class='col-md-2'>"
                                ."<b>$value[1]</b>"
                            ."</div>"
                            ."<div class='col-md-1'>"
                                . date('m/d/Y', strtotime($value[2]))
                            ."</div>" 
                            ."<div class='col-md-1' style='padding: 0px 0px 0px 15px; min-width: 100px;'>"
                                . $stars
                            ."</div>"
                            ."<div class='col-md-4' style='text-align: left; padding-bottom: 10px;'>"
                                ."$value[3]"
                            ."</div>"
                            ."<div class='col-md-2' style='text-align: left; padding-bottom: 10px; font-weight: bold'>"
                                ."$value[5]"
                            ."</div>"
                            ."<div class='col-md-1'>"
                                ."<a href='?action=deleteReview&id=$value[0]&page=$page' onClick=\"return confirm('Are you sure you want to delete this review?')\"><button class='btn btn-danger' style='margin-bottom: 5px;'>Permanently Delete</button></a>"
                            ."</div>"
                        ."</div>";
            $stars = "";
        }
    }
    else {
        $_SESSION['message'] = "No Reviews Found";
    }

    include "reviews/editReviews.php";
    exit;
}

if($_GET['action']=='pendingReviews'){
    $reviews = getPendingReviews();
    if($reviews){
        $output = "";
        foreach ($reviews as $value) {
            //Code to create star view output
            for ($i=0; $i < 5; $i++) { 
                if ($i < $value[4]) {
                    $stars .= "<i class='fa fa-star fa-lg' style='color: gold;'></i>";
                }
                else{
                $stars .= "<i class='fa fa-star-o fa-lg' style='color: gold;'></i>";
                }
            }
            $output .= "<div class='row' style='margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #d2d2d2'>"
                            ."<div class='col-md-2'>"
                                ."<b>$value[1]</b>"
                            ."</div>"
                            ."<div class='col-md-1'>"
                                . date('m/d/Y', strtotime($value[2]))
                            ."</div>" 
                            ."<div class='col-md-1' style='padding: 0px 0px 0px 15px; min-width: 100px;'>"
                                . $stars
                            ."</div>"
                            ."<div class='col-md-4' style='text-align: left; padding-bottom: 10px;'>"
                                ."$value[3]"
                            ."</div>"
                            ."<div class='col-md-2' style='text-align: left; padding-bottom: 10px; font-weight: bold'>"
                                ."$value[5]"
                            ."</div>"
                            ."<div class='col-md-1' style='padding-bottom: 10px;'>"
                                ."<a href='?action=approveReview&id=$value[0]'><button class='btn btn-success' style='margin-bottom: 10px;'>Approve</button></a><br>"
                                ."<a href='?action=deleteReview&id=$value[0]' onClick=\"return confirm('Are you sure you want to delete this review?')\"><button class='btn btn-danger'>Delete</button></a>"
                            ."</div>"
                        ."</div>";
            $stars = "";
        }
    }
    else {
        $output = "<div class='row'><div class='col-md-12'><h3>No Pending Reviews</h3></div></div>";
    }

    include "reviews/pendingReviews.php";
    exit;
}

if ($_GET['action']=="approveReview") {
    $approved = approveReview(verifyInt($_GET['id']));

    if($approved){
        $_SESSION['message'] = "Review Approved Successfully";
    }
    else{
        if ($_SESSION['username'] == "limitedAdmin"){
            $_SESSION['message']= "Error. Insufficient Privileges.";
        }
        else{
            $_SESSION['message'] = "Error Approving Review";
        }
    }   
    header ('Location: /admin/.?action=pendingReviews');
    exit;
}

if ($_GET['action']=="deleteReview") {
    $page = $_GET['page'];
    $deleted = deleteReview(verifyInt($_GET['id']));


    if($deleted){
        $_SESSION['message'] = "Review deleted successfully";
    }
    else{
        if ($_SESSION['username'] == "limitedAdmin"){
            $_SESSION['message']= "Error. Insufficient Privileges.";
        }
        else{
            $_SESSION['message'] = "Error deleting review";
        }
    }   

    if ($page == "activeReviews"){
        header ('Location: /admin/.?action=editReviews');
        exit;
    }
    else {
        header ('Location: /admin/.?action=pendingReviews');
        exit;
    }   
}

if ($_POST['reviewsSortService']){
    $_SESSION['reviewsSortService'] = verifyString($_POST['reviewsSortService']);

    header ('Location: /admin/.?action=editReviews');
    exit;
}

if ($_POST['reviewsSortDate']){
        $_SESSION['reviewsSortDate'] = verifyString($_POST['reviewsSortDate']);

    header ('Location: /admin/.?action=editReviews');
    exit;
}

if ($_POST['reviewsSortRating']){
        $_SESSION['reviewsSortRating'] = verifyString($_POST['reviewsSortRating']);

    header ('Location: /admin/.?action=editReviews');
    exit;
}

if ($_GET['action'] == "removeSortVariables"){
    unset($_SESSION['reviewsSortRating']);
    unset($_SESSION['reviewsSortDate']);
    unset($_SESSION['reviewsSortService']);

    header ('Location: /admin/.?action=editReviews');
    exit;
}


//IF NOTHING ELSE -- GO HERE...
else {
    header('Location: /admin/.?action=pendingReviews');
    exit;
}