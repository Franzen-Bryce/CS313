/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function appendText(){
   var text = $("#textField1").val();
   $("#div1").append(text);
//    var text = document.getElementById('textField1').value;
//    document.getElementById('div1').innerHTML += text;
}

function changeColor(){
    var color = document.getElementById('textField1').value;
    document.getElementById('div1').style.color = color;
}

function show(){
    $("#div1").fadeIn(2000);
//    document.getElementById('div1').style.display = "block";
}

function hide(){
    $("#div1").fadeOut(2000);
//    document.getElementById('div1').style.display = "none";
}