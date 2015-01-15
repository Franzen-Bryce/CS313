<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Angular</title>
    </head>
    <body ng-app="">
        <?php
        // put your code here
        ?>
        <script type="text/javascript" src="angular.min.js"></script>
        <input type="number" ng-model="interval" ng-init="1"/>
        <input type="button" value="-" ng-click="click=click-1" ng-int="click=0"/>
        <input type="button" value="+" ng-click="click=click+1" ng-int="click=0"/>
        <p>Your count: {{click}}</p>
        
        
        <?php $test = array("bryce" => 1, "candice"=>2, "mike"=>3);
        $json = json_encode($test);
        echo $json;
        
        $decode = json_decode($json);
        $out = "<ul>";
        foreach ($decode as $value1 => $value){
            $out .= "<li>$value1 = $value</li>";
        }
        $out .= "</ul>";
        echo $out;
?>
        
    </body>
</html>
