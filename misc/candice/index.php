<?php

if(isset($_POST['password'])){
    $password = $_POST['password'];
    
    if ($password == 'eternity'){
        include 'view.php';
    }
    
    else{
        echo "Wrong Password, try again... (IS CAPS LOCK ON?) <br>Hint: This is going to take a long time...<br>";
        include 'password.php';
    }
}
else{
    include 'password.php';
}