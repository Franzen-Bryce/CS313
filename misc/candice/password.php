<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Password Page</title>
        <style>
            h1{
                color: darkgreen;
                font-family:sans-serif;
                font-weight: 700;
                
            }
            
            #password {
                padding-left: 50px;
            }
            
            #submit {
                background-color: darkgreen;
                color: #fff;
                border: none;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
    <h1>Please Enter The Password:</h1>
    <div id="password">
       <form action="." method="post">
            Our Secret Password: <input type="password" name="password" value= "" />
            <input type="submit" id = "submit" name="submit" value="View Today's Message" />
       </form>
    </div>
    </body>
</html>
