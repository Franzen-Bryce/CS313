<?php
date_default_timezone_set("America/Los_Angeles");
if(!$_SESSION){
   session_start();
}

$page = "customerReviews"; 
$subPage = "activeReviews";

if (!$_SESSION['###########'] == "###########" ){
        // not logged in move to login page
        header('Location: /coupons/adminLogin.php');
        exit;
    }?>

<!DOCTYPE HTML>
<html lang="en">
    <head><!--HOME-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/faviconIcon.php'; ?>
    <title>Active Reviews |The Pit Crew Automotive</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <meta charset="UTF-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/script.php'; ?>
    </head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/adminHeader.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/adminModules/reviewsNav.php'; ?>
    <div id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Active Customer Reviews</h2>
                    <?php echo $errors ?>
                </div>
                 <?php if((isset($_SESSION['reviewsSortDate'])) || (isset($_SESSION['reviewsSortRating'])) || (isset($_SESSION['reviewsSortService']))){?>
                    <a href="/admin/?action=removeSortVariables" style="display: block; float: right; padding-right: 15px;"><u>RESET SORT TO DEFAULT</u></a><br>
                <?php } ?>
                <div class="col-md-2">
                    <form action="/admin/index.php" method="POST" name="dateSort">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label for="sortDate"></label>
                                <select class="form-control" name="reviewsSortDate" onchange="this.form.submit();">
                                    <option value="DESC">Newest - Oldest</option>
                                    <option value="ASC"<?php if ($_SESSION['reviewsSortDate'] == "ASC"){echo "selected";} ?>>Oldest - Newest</option>
                                </select>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form action="/admin/index.php" method="POST" name="starSort">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label for="sortRating"></label>
                                <select class="form-control" name="reviewsSortRating" onchange="this.form.submit();">
                                    <option value="none">All Ratings</option>
                                    <option value="1star" <?php if ($_SESSION['reviewsSortRating'] == "1star"){echo "selected";} ?>>1 Star Reviews</option>
                                    <option value="2stars" <?php if ($_SESSION['reviewsSortRating'] == "2stars"){echo "selected";} ?>>2 Star Reviews</option>
                                    <option value="3stars" <?php if ($_SESSION['reviewsSortRating'] == "3stars"){echo "selected";} ?>>3 Star Reviews</option>
                                    <option value="4stars" <?php if ($_SESSION['reviewsSortRating'] == "4stars"){echo "selected";} ?>>4 Star Reviews</option>
                                    <option value="5stars" <?php if ($_SESSION['reviewsSortRating'] == "5stars"){echo "selected";} ?>>5 Star Reviews</option>
                                </select>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="/admin/index.php" method="POST" name="serviceSort">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label for="sort"></label>
                                <select class="form-control" name="reviewsSortService" onchange="this.form.submit();">
                                    <option value="none">All Services</option>
                                    <?php echo $reviewServices; ?>
                                </select>
                                <p class="help-block"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br>
            <?php echo $output?>
        </div>
    </div> <!--main content-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
    
</body>
<?php   
    unset($_SESSION['errors']);
    unset($_SESSION['message']);
?>
</html>