<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        hello world
        <br><br>
        <?php
        for ($i = 1; $i < 12; $i++){
            echo "<div style=\"color: rgb(0,100,$i)\">This is Div " . "$i". "</div>";
        }
        ?>
        <br>
        <?php
        $loop = "";
        $divs = ["Bryce" => "brycefranzen@gmail.com", 
            "David" => "david.r.lambertson@gmail.com", 
            "Bryce Work" => "brycefranzen@smart4yourcar.com", 
            "Ritchie" => "hen11013@byui.edu"];
        foreach ($divs as $value1 => $value) {
            $out .= "<div>$value1 Email: <a href='mailto:$value'>$value</a></div>";
        }
        echo $out;
        ?>
        <br>
        Back to just text
    </body>
</html>
