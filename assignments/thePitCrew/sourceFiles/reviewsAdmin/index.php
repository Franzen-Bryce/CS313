<?php
date_default_timezone_set("America/Los_Angeles");

if(!$_SESSION){
    session_start();
 }
 if (!$_SESSION['##############'] == ##############){
         // not logged in move to login page
         header('Location: /coupons/adminLogin.php');
         exit;
     }

require $_SERVER['DOCUMENT_ROOT'].'/admin/model.php';


if($_GET['action']=='editReviews'){
    $reviews = getActiveReviews();
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
                                ."<a href='?action=deleteReview&id=$value[0]&page=$page'><button class='btn btn-danger' style='margin-bottom: 5px;'>Permanently Delete</button></a>"
                            ."</div>"
                        ."</div>";
            $stars = "";
        }
    }
    else {
        $_SESSION['message'] = "There was an error retrieving reviews";
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
                                ."<a href='?action=deleteReview&id=$value[0]'><button class='btn btn-danger'>Delete</button></a>"
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
        $_SESSION['message'] = "Error Approving Review";
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
        $_SESSION['message'] = "Error deleting review";
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

//IF NOTHING ELSE -- GO HERE...
else {
    header('Location: /admin/.?action=pendingReviews');
    exit;
}
