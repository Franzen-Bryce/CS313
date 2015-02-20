<?php

function getHashedPassword($password) {
	return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $passwordHash){
	if (password_verify($password, $passwordHash)) {
	    return TRUE;
	} else {
	    return FALSE;
	}
}

//check user name
if ($_GET['action'] == "login"){

$username = asdflkjasdflkj;
$pswd = lsdalfkjsalkf;

$databasePswd = getPswd($username);

if (verifyPassword($pswd, $databasePswd)){
	sldkfj;
}
else {
	sdlfkj;
}

}

if ($_GET['action'] == "create"){

$username = asdflkjasdflkj;
$pswd = getHashedPassword(lsdalfkjsalkf);



}


//login page
else {
	include 'login.php';
}