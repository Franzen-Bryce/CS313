<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require $_SERVER['DOCUMENT_ROOT'].'/wedding/library/functions.php';
require $_SERVER['DOCUMENT_ROOT'].'/wedding/model.php';

if ($_POST['action']=='Request An Announcement'){
    $firstName = verifyString(ucfirst(strtolower($_POST['firstname'])));
        if(empty($firstName)){
            $firsterror = 'border: 3px solid #CC0000;';
            $errors = "Please enter your first name<br>";
        }
    $lastName = verifyString(ucfirst(strtolower($_POST['lastname'])));
        if(empty($lastName)){
            $lasterror = 'border: 3px solid #CC0000;';
            $errors .= "Please enter your last name<br>";
        }
    $email = '';
    $emailCheck = verifyEmail($_POST['email']);
        
    $address1 = verifyString(ucwords(strtolower($_POST['address1'])));
        
    $address2 = verifyString(ucwords(strtolower($_POST['address2'])));
        
        
    $zip = verifyString(preg_replace("/[^0-9]/", '' , $_POST['zip']));
        
    $city = verifyString(ucwords(strtolower($_POST['city'])));
        
    $state = $_POST['state'];
    
    $coupleMessage = verifyString($_POST['coupleMessage']);
        if(empty($coupleMessage)){
            $coupleMessage = '';
        }
        
    $type = $_POST['type'];
        if($type == 'NONE'){
            $typeerror = 'border: 3px solid #CC0000;';
            $errors .= "Please choose your desired announcement type<br>";
        }
        if (($type == 'Email')){
            if($emailCheck){
                $email = strtolower($_POST['email']);
            }
            else{
                $emailerror = 'border: 3px solid #CC0000;';
                $errors .= "Please enter a valid email address<br>";
            }
              
            if(isset($errors)){
                include 'contact1.php';
                exit;
            }
    
            $saveResults = saveData1($firstName, $lastName, $email, $type, $coupleMessage);
        }
        if (($type == 'Print')){
            if(empty($address1)){
                $address1error = 'border: 3px solid #CC0000;';
                $errors .= "Please enter your street address<br>";
            }
            if(strlen($zip) != 5){
                if($state == 'ZA'){
                    if(strlen($zip) != 4){
                        $zip = '';
                        $ziperror = 'border: 3px solid #CC0000;';
                        $errors .= "Please enter your zip code<br>";
                    }
                }
                else{
                    $zip = '';
                    $ziperror = 'border: 3px solid #CC0000;';
                    $errors .= "Please enter your zip code<br>";
                }
            }
            if(empty($city)){
                $cityerror = 'border: 3px solid #CC0000;';
                $errors .= "Please enter your city<br>";
            }
            if($state == 'NA'){
                $stateerror = 'border: 3px solid #CC0000;';
                $errors .= "Please select your state<br>";
            }
            if(isset($errors)){
                include 'contact1.php';
                exit;
            }
    
            $saveResults = saveData2($firstName, $lastName, $address1, $address2, $city, $state, $zip, $type, $coupleMessage);
        }
        if (($type == "Both")){
            if($emailCheck){
            $email = strtolower($_POST['email']);
            }
                else{
                    $emailerror = 'border: 3px solid #CC0000;';
                    $errors .= "Please enter a valid email address<br>";
                }
            if(empty($address1)){
                $address1error = 'border: 3px solid #CC0000;';
                $errors .= "Please enter your street address<br>";
            }
            if(strlen($zip) != 5){
                if($state == 'ZA'){
                    if(strlen($zip) != 4){
                        $zip = '';
                        $ziperror = 'border: 3px solid #CC0000;';
                        $errors .= "Please enter your zip code<br>";
                    }
                }
                else{
                    $zip = '';
                    $ziperror = 'border: 3px solid #CC0000;';
                    $errors .= "Please enter your zip code<br>";
                }
            }
            if(empty($city)){
                $cityerror = 'border: 3px solid #CC0000;';
                $errors .= "Please enter your city<br>";
            }
            if($state == 'NA'){
                $stateerror = 'border: 3px solid #CC0000;';
                $errors .= "Please select your state<br>";
            }
            if(isset($errors)){
                include 'contact1.php';
                exit;
            }
    
            $saveResults = saveData3($firstName, $lastName, $email, $address1, $address2, $city, $state, $zip, $type, $coupleMessage);
        }
    
    
    if ($saveResults){
        
        if(($type == 'Email')||($type == 'Both')){
        
            
        //////Send Email To Person
            $file_name = "Bryce and Candice Wedding Announcement";
            $file_type = "application/pdf";
            $file = $_SERVER['DOCUMENT_ROOT'].'/wedding/images/Announcement.pdf';
            $content = chunk_split(base64_encode(file_get_contents($file)));
            $uid = md5(uniqid(time()));
            
            $message = "<html>
    <head>
        <meta charset='UTF-8'>
        <title></title>
        <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
        <style>
            body{
                margin: 20px;
            }
            main{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 700px;
            }
            
            p{
                color: #2b2b2b;
                font-family: sans-serif;
                font-style: italic;
            }
            h1 {
                color: #2b2b2b;
                font-weight: 200;
                font-family: 'Alex Brush';
                font-size: 24pt;
                margin-bottom: 5px;
                text-align: center;
                }
                
            hr{
                width: 500px;
                background-color: #333333;
                height: 5px;
                border: none;
                border-radius: 5px 5px 5px 5px;
                text-align: left;
            }
            #paragraph {
                margin-left: 30px;
                margin-right: 30px;
                text-align: left;
            }
            ul{
                list-style: none;
                font-size: 11pt;
                color: #666666;
                font-family: sans-serif;
                font-style: italic;
            }
            li {
                margin-bottom: 5px;
            }
            
        </style>
    </head>
    <body>
        <main>
            <h1>Bryce Franzen and Candice Kerr's Wedding Announcement!</h1>
            <hr style='width: 600px;'>
            <div id='paragraph'>
            <p>$firstName $lastName,</p>
                <p id='p2'>Thank you for showing an interest in our wedding.  Just like we promised, the anouncement is attached. :)</p>
                <p>For your convenience, the reception information from the announcement is as follows,</p>
                <ul>
                    <li>Date: July 25th, 2014</li>
                    <li>Time: 6:30-9:00PM</li>
                    <li>Address: The Church of Jesus Christ of Latter-Day Saints<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10300 Southeast 132nd Avenue<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Portland, OR 97086<br><br></li>
                    <li>The couple is registered at Target: <a href='http://www.target.com/GiftRegistrySearchViewCmd?registryType=WD&jsRequest=true&catalogId=10051&status=completePage&cumulativeTime=-1&listId=K6nf5FtsKk04NG9bc9XhAA&noOfPings=&registryFirstName=bryce&langId=-1&segmentGrpName=-1&storeId=10151&registryLastName=franzen' target='_blank'>Target wedding registry</a></li>
                    
                </ul>
                <p>We look forward to seeing you there $firstName!  Have a great day!<br>If you have any questions, feel free to respond to this email, and we will get back to you. :)</p>
            </div>
                <br><hr>
            <h1>~ Bryce Franzen and Candice Kerr ~</h1>
        </main>
    </body>
</html>";

            
            $subject = 'Bryce and Candice Wedding Announcement';
            $emailReply = 'bryce@franzenit.com';
            $headers = "From: bryce@franzenit.com\r\n";
            $headers .= "Reply-To: ". $emailReply . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            
            //declaring multiple kinds of email :)
            $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
            
            //html part
            $headers .= "--".$uid."\r\n";
            $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";
            $headers .= "Content-Tranfer-Encoding: base64\r\n\r\n";
            $headers .= $message."\r\n\r\n";
            
            //Attachment Part
            $headers .= "--".$uid."\r\n";
            $headers .= "Content-type: ".$file_type."; name=\"".$file_name."\"\r\n";
            $headers .= "Content-Transfer-Encoding: base64\r\n";
            $headers .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n\r\n";
            $headers .= $content."\r\n\r\n";
            
            // send mail
            $mailSent= mail("$email",$subject,$message,$headers);
                
            if($mailSent){
                if($type == "Email"){
                    include 'thankYouEmail.php';
                }
                if($type == "Both"){
                    include 'thankYouBoth.php';
                }
            }
        }
    
    elseif($type == 'Print'){
            include 'thankYouPrint.php';
        }
}

    else{
        $errors = 'Sorry, you have already requested an announcement or there was a problem with the database. Please Try Again.';
        include 'contact1.php';
        }

    }
else{
    include 'contact1.php';
}