<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!$_SESSION){
   session_start();
}

require 'model.php';

if($_POST['Login']=='Login'){
    if ($_POST['logPassword'] == 'sumdex'){
        $_SESSION['allow'] = 1177321;
        header('Location: /wedding/send/letin.php');
        exit;
    }
    else {
    include 'login.php';
    exit;
}
}

if ($_POST['action']=='Send all email recipients an announcement'){
    $file_name = $_FILES['announce']['name'];
        $temp_name = $_FILES['announce']['tmp_name'];
            if(!empty($file_name)){
                //store variables
                $file_type = $_FILES['announce']['type'];

                //get extension of the file name
                $base = basename($file_name);
                $extension = substr($base, strlen($base)-4, strlen($base));

                //types of extensions allowed
                $allowed_extensions = array(".pdf",".PDF");

                //check if uploaded file is allowed
                if(!(in_array($extension, $allowed_extensions))){
                    echo 'file type not allowed';
                    include '/letin.php';
                }
            }
            else{
                echo "Please upload a photo of yourself";
                include '/letin.php';
            }
            
//////Get emails to send to///////
            $emails = getemails();
            
//            $output = '<ul>';
//            foreach ($emails as $value){
//                $output .= "<li>$value[0] $value[1] $value[2]</li>";
//            }
//            $output .= '</ul>';
//            echo $output;
//            exit;
            
//needed for file attachement
            $file = $temp_name;
            $content = chunk_split(base64_encode(file_get_contents($file)));
            $uid = md5(uniqid(time()));

    $countSent = 0;  
    $sentEmails = '';
    $countErrors = 0;
    $errorEmails = '';
    foreach ($emails as $value){            
            $message = "<html>
                            <head>
                                <meta charset='UTF-8'>
                                <title></title>
                                <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
                                <style>

                                    h3 {
                                        color: #f7505a;
                                        font-family: 'Amatic SC', cursive;
                                        font-size: 27pt;
                                        text-transform: uppercase;
                                        margin-bottom: 5px;
                                        }
                                        
                                    h6 {
                                        color: #C0C0C0;
                                        font-size: 7pt;
                                        padding-top: 50px;
                                        clear: left;
                                        float: right;
                                        }

                                    dt {
                                        background-color: #f7505a;
                                        border-radius: 5px;
                                        color: #ffffff;
                                        width: 200px;
                                        padding: 5px 10px;
                                        margin-top: 5px;
                                        font-family: sans-serif;
                                        clear: left;
                                        float: left;
                                    }

                                    dd {
                                        position: relative;
                                        float: left;
                                        width: 500px;
                                        color: #000000;
                                        font-family: sans-serif;
                                        margin-left: 10px;
                                        margin-top: 5px;
                                        padding: 5px 5px;
                                    }
                                </style>
                            </head>
                            <body>
                                <p>$value[0] $value[1],</p>
                                    <p>Just like we promised, here is your announcement...(It's attached).</p>
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
            $mailSent= mail("$value[2]",$subject,$message,$headers);
    
            if($mailSent){
                $countSent++;
                $sentEmails .= "$value[2] <br>";
            }
            else{
                $countErrors++;
                 $errorEmails .= "$value[2] <br>";
            }   
    }
    echo "Number of emails sent: $countSent <br>";
    echo "$sentEmails <br>";
    echo "Failed emails: $countErrors";
    echo "$errorEmails <br>";
    exit;
}

else {
    include 'login.php';
    exit;
}

