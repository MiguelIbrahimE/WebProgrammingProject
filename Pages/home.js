
var dormsImages = ["url('dorms.jpg')","url('dorms6.jpg')","url('droms2.jpg')"];
var counter=0;

var radio1 = document.getElementById("radio1");
var radio2 = document.getElementById("radio2");
var radio3 = document.getElementById("radio3");



function start(){

var prevButt = document.getElementById("prevButt");
var nextButt = document.getElementById("nextButt");

prevButt.addEventListener("click",changeImgPrev,false);
nextButt.addEventListener("click",changeImgNext,false);


var inter = setInterval(change,1500);

}


function changeImgPrev(){


    var slider = document.getElementById("slider");

    if(counter==0){
        slider.style.backgroundImage = dormsImages[2];
        counter=2;
        document.getElementById("radio3").checked = true;
    }
    else if(counter==1){
        slider.style.backgroundImage = dormsImages[0];
        document.getElementById("radio1").checked = true;
        counter=0;
    }
    else if(counter==2){
        slider.style.backgroundImage = dormsImages[1];
        document.getElementById("radio2").checked = true;
        counter=1;
    }


}


function changeImgNext(){


    var slider = document.getElementById("slider");

    if(counter==0){
        slider.style.backgroundImage = dormsImages[1];
        counter=1;
        document.getElementById("radio2").checked = true;
    }
    else if(counter==1){
        slider.style.backgroundImage = dormsImages[2];
        document.getElementById("radio3").checked = true;
        counter=2;
    }
    else if(counter==2){
        slider.style.backgroundImage = dormsImages[0];
        document.getElementById("radio1").checked = true;
        counter=0;
    }










}





function change(){

    if(counter<3){

        counter++;
        slider.style.backgroundImage = dormsImages[counter];
        
        if(counter==0){
            document.getElementById("radio1").checked = true;
        }
        else if(counter==1){
            document.getElementById("radio2").checked = true;
        }
        else if(counter==2){
            document.getElementById("radio3").checked = true; 
        }

    }
    else{
        slider.style.backgroundImage = dormsImages[0];

        document.getElementById("radio1").checked = true;

        counter=0;
    }








}






window.addEventListener("load",start,false);