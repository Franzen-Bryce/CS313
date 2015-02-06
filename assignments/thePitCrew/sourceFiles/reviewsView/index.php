<?php
if(!$_SESSION){
    session_start();
 }

date_default_timezone_set('America/Los_Angeles');

require $_SERVER['DOCUMENT_ROOT']. '/services/reviews/model.php';

if ($_POST['action']== "review"){
	$name = addslashes(verifyString($_POST['name']));
		if (empty($name)) {
			$errors .= 'Please enter your full name <br>';
		}
	$rating = verifyInt($_POST['star-rating']);
		if (empty($rating)) {
			$errors .= 'Please enter your star rating <br>';
		}
	$review = addslashes(verifyString($_POST['review']));
		if (empty($review)) {
			$errors .= 'Please enter your review description<br>';
		}
	$serviceId = verifyInt($_POST['serviceId']);
	$date = date('Y-m-d');
	$url = $_POST['pageURL'];

	if (isset($errors)) {
		$_SESSION['errors'] = "<b><u>All Fields Required</u></b><br />" . $errors;
		$_SESSION['name'] = $name;
		$_SESSION['star-rating'] = $rating;
		$_SESSION['review'] = $review;
		header ("Location: $url");
		exit;
	}
	else {
		$databaseUpdate = insertReview($name, $rating, $review, $date, $serviceId);

		if ($databaseUpdate){
			$_SESSION['success'] = TRUE;
			header ("Location: $url");
			exit;
		}
		else {
			$_SESSION['name'] = $name;
			$_SESSION['star-rating'] = $rating;
			$_SESSION['review'] = $review;
			$_SESSION['serviceId'] = $serviceId;
			$_SESSION['errors'] = 'There was a problem with the database.  Please reload your page and try again.';
			header ("Location: $url");
			exit;
		}
	}
}

$serviceReviews = getServiceReviews($serviceId);
$serviceName = getServiceName($serviceId);

// serviceReviews = reviewName, reviewDate, ReviewText

//STYLE OUTPUT FOR WEB PAGE
$output .= "<div class='col-md-8' style='padding-top: 5px; background-color: #F2F2F2; border-radius: 5px 5px 5px 5px;'>"
		."<h3 style='color: #000; text-align: left;'><span style='color: #BE1D2D'>Customer Reviews:</span> $serviceName[0]</h3>"
		. "<div style='background: #fff; padding: 10px; margin-bottom: 25px; border-radius: 2px;'>";

		if ($serviceReviews == FALSE){
			$output .= "No reviews.  Please leave your review.";
		}

	foreach ($serviceReviews as $key => $value) {
		
		//Code to create list of reviews
		for ($i=0; $i < 5; $i++) { 
			if ($i < $value[3]) {
				$stars .= "<i class='fa fa-star fa-lg' style='color: gold;'></i>";
			}
			else{
			$stars .= "<i class='fa fa-star-o fa-lg' style='color: gold;'></i>";
			}
		}

		$date = date('M d, Y', strtotime($value[1]));

		$output .= "<div clas='row'>"
					. "<div class='col-sm-6' style='padding-left: 0px; font-size: 12pt;'><b>$value[0]</b><span style='font-size: 9pt; color: #B2B2B2;'> - $date</span></div>"
					. "<div class='col-sm-6' style='padding-right: 5px; padding-left: 0px; text-align: right;'>$stars</div>"
				. "</div>"
				. "<div class='row'>"
					. "<div class='col-sm-12' style='text-align: left; margin-top: 5px;'>\"$value[2]\"</div>"
				. "</div><hr style='background-color: #d1d1d1; height: 1px;'>";
		$stars = "";
	}

//closes final div col-md-8
$output .= "</div>"
		."<div class='col-md-12' style='padding: 0px 0px 20px 0px;'>";
	if ($_SESSION['success']) {
		$output .= "<h4 style='margin: 0px 0px 30px 0px; text-align: left;'>Thank You. Your review has successfully been submitted for review by management.</h4>";
	}
	else {
		$output .= "<div id='message' style='clear: both;'>" . $_SESSION['errors'] . "</div><h4 style='margin: 30px 0px;'>Write a Review:</h4>"
 			."<form action='/services/reviews/index.php' method='post' name='sentMessage' id='contactForm' novalidate>
                <div class='row'>
                    <div class='col-md-8' style='padding: 0px 50px 0px 0px;'>
	                    <div class='control-group form-group'>
	                        <div class='controls'>
	                            <label>Full Name:</label>
	                            <input type='text' class='form-control' name='name' id='name' value='". $_SESSION['name'] . "' required data-validation-required-message='Please enter your name.'>
	                            <p class='help-block'></p>
	                        </div>
	                    </div>
                    </div><!--column-->
                    <div class='col-md-4' style='padding: 0px;'>
                    	<div class='control-group form-group'>
	                        <div class='controls'>
	                            <label>Rating:</label><br>
	                            	<input type='number' data-max='5' name='star-rating' id='star-rating' value='". $_SESSION['star-rating'] . "' class='rating' data-clearable='' data-icon-lib='fa' data-active-icon='fa-star fa-2x' data-inactive-icon='fa-star-o fa-2x' data-clearable-icon='fa-trash-o fa-2x'/>
	                            <p class='help-block'></p>
	                        </div>
	                    </div>
                    </div><!--column-->
                </div><!--row-->
                <div class='control-group form-group'>
                    <div class='controls'>
                        <label>Review:</label>
                        <textarea rows='4' cols='100' class='form-control' id='review' name='review' value='". $_SESSION['review'] . "' required data-validation-required-message='Please enter your message' maxlength='999' style='resize:none'></textarea>
                    </div>
                </div>
                <div class='control-group form-group'>
	            	<div class='controls'>
		                <input type='hidden' name='serviceId' value='$serviceId'/>
		                <input type='hidden' name='pageURL' value='$pageURL'/>
		                <!-- For success/fail messages -->
		                <button type='submit' class='btn btn-danger' name='action' value='review' style='float: right; margin-top: 10px; margin-bottom: 20px; padding: 10px 50px;'>Submit Review</button>
	            	</div>
                </div>
            </form>";
        }
$output .= "</div> <!-- col-md-12 -->"
 		."</div> <!--Close Main Review Form-->";

unset($_SESSION['errors']);
unset($_SESSION['success']);
unset($_SESSION['name']);
unset($_SESSION['star-rating']);
unset($_SESSION['review']);

// FINAL OUTPUT TO WEBPAGE
echo $output;
