<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Form</title>
</head>
<body>
<?php require $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PHP Survey</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Assignments</li>
                    <li class="active">PHP Survey</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/sideBarNav.php'; ?>
            
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>PHP Survey</h3>
                    <form action="index.php" method="post">
                      <div class="form-group">
                         <!--Full Name-->
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label for="major">Select Your Major</label>
                                    <select class="form-control" name="major" required data-validation-required-message="Please select your major.">
                                        <option value="WDD">Website Design/Development</option>
                                        <option value="CIT">Computer Information Technology</option>
                                        <option value="CS">Computer Science</option>
                                        <option value="CE">Computer Engineering</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                           <!--Color-->
                           <div class="clearLeft">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label for="color">Favorite Color:</label><br/>
                                        <div class="col-md-3">
                                            <input type="radio" name="color" value="red" required data-validation-required-message="Please choose your favorite color."><span> Red</span><br />     
                                            <input type="radio" name="color" value="orange" required data-validation-required-message="Please choose your favorite color."><span> Orange</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="color" value="yellow" required data-validation-required-message="Please choose your favorite color."><span> Yellow</span><br />
                                            <input type="radio" name="color" value="green" required data-validation-required-message="Please choose your favorite color."><span> Green</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="color" value="blue" required data-validation-required-message="Please choose your favorite color."><span> Blue</span><br />
                                            <input type="radio" name="color" value="purple" required data-validation-required-message="Please choose your favorite color."><span> Purple</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="color" value="pink" required data-validation-required-message="Please choose your favorite color."><span> Pink</span><br />
                                            <input type="radio" name="color" value="black" required data-validation-required-message="Please choose your favorite color."><span> Black</span>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <!--Favorite Pizza Place-->
                            <div class="clearLeft">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label for="pizza">Favorite Pizza Place:</label><br/>
                                        <div class="col-md-3">
                                            <input type="radio" name="pizza" value="Dominos" required data-validation-required-message="Please choose your favorite pizza place."><span> Dominos</span><br />     
                                            <input type="radio" name="pizza" value="Pizza Hut" required data-validation-required-message="Please choose your favorite pizza place."><span> Pizza Hut</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="pizza" value="Little Cesars" required data-validation-required-message="Please choose your favorite pizza place."><span> Little Cesars</span><br />
                                            <input type="radio" name="pizza" value="Papa Murphey's" required data-validation-required-message="Please choose your favorite pizza place."><span> Papa Murphy's</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="pizza" value="Papa John's" required data-validation-required-message="Please choose your favorite pizza place."><span> Papa John's</span><br />
                                            <input type="radio" name="pizza" value="Pizza Pie Cafe" required data-validation-required-message="Please choose your favorite pizza place."><span> Pizza Pie Cafe</span>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="radio" name="pizza" value="Noble Romans" required data-validation-required-message="Please choose your favorite pizza place."><span> Noble Romans</span><br />
                                            <input type="radio" name="pizza" value="5 Buck Pizza" required data-validation-required-message="Please choose your favorite pizza place."><span> 5 Buck Pizza</span>
                                        </div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>

                            <!--Favorite Summer Activities-->
                            <div class="clearLeft">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label for="summer">Favorite Summer Activities (select all that apply):</label><br />
                                        <div class="col-md-3">
                                            <input type="checkbox" value="Camping" name="summer[]"/> Camping <br/>
                                            <input type="checkbox" value="Swimming" name="summer[]"/> Swimming <br/>
                                            <input type="checkbox" value="Eating Food" name="summer[]"/> Eating Food <br/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" value="Hiking" name="summer[]"/> Hiking <br/>
                                            <input type="checkbox" value="Star Gazing" name="summer[]"/> Star Gazing <br/>
                                            <input type="checkbox" value="Sleeping" name="summer[]"/> Sleeping <br/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" value="Picnics" name="summer[]"/> Picnics <br/>
                                            <input type="checkbox" value="Horse Riding" name="summer[]"/> Horse Riding <br/>
                                            <input type="checkbox" value="ATV Riding" name="summer[]"/> ATV Riding <br/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="checkbox" value="Relaxing" name="summer[]"/> Relaxing <br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearLeft" id="success"></div>
                            <!-- For success/fail messages -->
                            <div class="clearLeft">
                                <label for="submit"></label>
                                <button type="submit" name="action" value="Submit Your Responses" class="btn btn-primary">Submit Your Responses</button>
                                <button type="button" name="action" class="btn btn-default">See Other Responses</button>
                            </div>
                        </div>
                    </form>
                    
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
        <!-- /.container -->
    <!-- Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    
    <!--Script Links-->
    <?php require $_SERVER['DOCUMENT_ROOT'].'/modules/script.php'; ?>

</body>
</html>