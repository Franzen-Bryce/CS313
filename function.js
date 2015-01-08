/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function appendText(){
    var text = document.getElementById('textField1').value;
    document.getElementById('div1').innerHTML += text;
}

function changeColor(){
    var color = document.getElementById('textField1').value;
    document.getElementById('div1').style.color = color;
}

function show(){
    document.getElementById('div1').style.display = "block";
}

function hide(){
    document.getElementById('div1').style.display = "none";
}