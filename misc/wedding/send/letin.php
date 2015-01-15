<?php
if(!$_SESSION){
   session_start();
}

if ((!$_SESSION['allow']) == 1177321){
    header ('Location: /wedding/send');
    exit;
}
else{
?>

<!DOCTYPE html>
<!--
Customer Contact Form - created and Maintained By Bryce Franzen
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send PDF Announcement</title>
    </head>
    <body>
        <main>
            <form method="post" action="." id="announcement" enctype="multipart/form-data">
                <label for="announce">Please upload the announcement file</label>
                <input type="file" name="announce" id="announce">
                <br><br>
                <label for="action">&nbsp;</label>
                <input type="submit" name="action" id="action" value="Send all email recipients an announcement">
            </form>
        </main>
    </body>
</html>
<?php }
