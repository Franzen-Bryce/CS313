<?php

if(!$_SESSION){
    session_start();
 }
 
if ($_GET['action'] == "resetVotes"){
//    Text file Contents*******************************************************************************************************************
    $array = array("Web Design Development" => 0, "Computer Information Technology" => 0, "Computer Science" => 0, "Computer Engineering" => 0, "Other" =>0, "Red" => 0, "Orange" =>0, "Yellow" => 0, "Green" => 0, "Blue" => 0, "Purple" => 0, "Pink" => 0, "Black" => 0, "Dominos" => 0, "Pizza Hut" => 0, "Little Cesars" => 0, "Papa Murphys" => 0, "Papa Johns" => 0, "Pizza Pie Cafe" => 0, "Noble Romans" => 0, "Five Buck" => 0, "Camping" => 0, "Swimming" => 0, "Eating Food" => 0, "Hiking" => 0, "Star Gazing" => 0, "Sleeping" => 0, "Picnics" => 0, "Horse Riding" => 0, "ATV Riding" => 0, "Relaxing" => 0);
    
    file_put_contents("formData.txt", serialize($array));
    
    $_SESSION['voted'] = 'no';
    header('Location: /assignments/assignment1/index.php/.?action=SeeOtherResponses');
    exit;
}

if ($_GET['action'] == "resetSession"){ 
    $_SESSION['voted'] = 'no';
    header('Location: /assignments/assignment1/index.php');
    exit;
}

if (($_POST['action'] == 'Submit Your Responses') || ($_GET['action'] == 'SeeOtherResponses')){
    $dataFile = unserialize(file_get_contents("formData.txt"));

    if ($_POST['action'] == 'Submit Your Responses'){
        $major = $_POST['major'];
        $color = $_POST['color'];
        $pizza = $_POST['pizza'];
        $summer = $_POST['summer'];

        switch ($major) {
            case WDD:
                $dataFile['Web Design Development'] = $dataFile['Web Design Development'] + 1;
                break;
            case CIT:
                $dataFile['Computer Information Technology'] = $dataFile['Computer Information Technology'] + 1;
                break;
            case CS:
                $dataFile['Computer Science'] = $dataFile['Computer Science'] + 1;
                break;
            case CE:
                $dataFile['Computer Engineering'] = $dataFile['Computer Engineering'] + 1;
                break;
            case Other:
                $dataFile['Other'] = $dataFile['Other'] + 1;
                break;
        }
        switch ($color) {
            case red:
                $dataFile['Red'] = $dataFile['Red'] + 1;
                break;
            case orange:
                $dataFile['Orange'] = $dataFile['Orange'] + 1;
                break;
            case yellow:
                $dataFile['Yellow'] = $dataFile['Yellow'] + 1;
                break;
            case green:
                $dataFile['Green'] = $dataFile['Green'] + 1;
                break;
            case blue:
                $dataFile['Blue'] = $dataFile['Blue'] + 1;
                break;
            case purple:
                $dataFile['Purple'] = $dataFile['Purple'] + 1;
                break;
            case pink:
                $dataFile['Pink'] = $dataFile['Pink'] + 1;
                break;
            case black:
                $dataFile['Black'] = $dataFile['Black'] + 1;
                break;
        }
        switch ($pizza) {
            case Dominos:
                $dataFile['Dominos'] = $dataFile['Dominos'] + 1;
                break;
            case PizzaHut:
                $dataFile['Pizza Hut'] = $dataFile['Pizza Hut'] + 1;
                break;
            case LittleCesars:
                $dataFile['Little Cesars'] = $dataFile['Little Cesars'] + 1;
                break;
            case PapaMurphys:
                $dataFile['Papa Murphys'] = $dataFile['Papa Murphys'] + 1;
                break;
            case PapaJohns:
                $dataFile['Papa Johns'] = $dataFile['Papa Johns'] + 1;
                break;
            case PizzaPieCafe:
                $dataFile['Pizza Pie Cafe'] = $dataFile['Pizza Pie Cafe'] + 1;
                break;
            case NobleRomans:
                $dataFile['Noble Romans'] = $dataFile['Noble Romans'] + 1;
                break;
            case FiveBuck:
                $dataFile['Five Buck'] = $dataFile['Five Buck'] + 1;
                break;
        }

        foreach ($_POST['summer'] as $value){
            switch ($value) {
            case Camping:
                $dataFile['Camping'] = $dataFile['Camping'] + 1;
                break;
            case Swimming:
                $dataFile['Swimming'] = $dataFile['Swimming'] + 1;
                break;
            case EatingFood:
                $dataFile['Eating Food'] = $dataFile['Eating Food'] + 1;
                break;
            case Hiking:
                $dataFile['Hiking'] = $dataFile['Hiking'] + 1;
                break;
            case StarGazing:
                $dataFile['Star Gazing'] = $dataFile['Star Gazing'] + 1;
                break;
            case Sleeping:
                $dataFile['Sleeping'] = $dataFile['Sleeping'] + 1;
                break;
            case Picnics:
                $dataFile['Picnics'] = $dataFile['Picnics'] + 1;
                break;
            case HorseRiding:
                $dataFile['Horse Riding'] = $dataFile['Horse Riding'] + 1;
                break;
            case ATVRiding:
                $dataFile['ATV Riding'] = $dataFile['ATV Riding'] + 1;
                break;
            case Relaxing:
                $dataFile['Relaxing'] = $dataFile['Relaxing'] + 1;
                break;
            } 
        }

        $serializedDataFile = serialize($dataFile);
        file_put_contents("formData.txt", $serializedDataFile);
        $_SESSION['voted'] = "yes";
    }

$output = "";
    foreach ($dataFile as $item => $value){
        if($item == "Web Design Development") {
            $output .= "<h3>Chosen Major</h3>";
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if (($item == "Computer Information Technology") || ($item == "Computer Science") || ($item == "Computer Engineering") || ($item == "Other")){
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if($item == "Red"){
            $output .= "<h3>Favorite Color</h3>";
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if (($item == "Orange") || ($item == "Yellow") || ($item == "Green") || ($item == "Blue") || ($item == "Purple") || ($item == "Pink") || ($item == "Black")){
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if ($item == "Dominos"){
            $output .= "<h3>Favorite Pizza</h3>";
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if (($item == "Dominos") || ($item == 'Pizza Hut') || ($item == 'Little Cesars') || ($item == 'Papa Murphys') || ($item == 'Papa Johns') || ($item == 'Pizza Pie Cafe') || ($item == 'Noble Romans') || ($item == 'Five Buck')){
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if ($item == "Camping"){
            $output .= "<h3>Favorite Summer Activity</h3>";
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
        if (($item == "Swimming") || ($item == 'Eating Food') || ($item == 'Hiking') || ($item == 'Star Gazing') || ($item == 'Sleeping') || ($item == 'Picnics') || ($item == 'Horse Riding') || ($item == 'ATV Riding') || ($item == 'Relaxing')) {
            $output .= "<div class='col-md-3' style='clear: left'>
                $item
            </div>
            <div class='col-md-9'>
            <div class='progress'>
              <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='$value' aria-valuemin='0' aria-valuemax='100' style='min-width: 2em; width: $value%;'>
                $value
              </div>
            </div></div>";
        }
    }
    
    include 'results.php';
    exit;
}

if ($_SESSION['voted'] == "yes"){
    header('Location: /assignments/assignment1/index.php/.?action=SeeOtherResponses');
    exit;
}

else {
    header('Location: survey.php');
    exit;
}