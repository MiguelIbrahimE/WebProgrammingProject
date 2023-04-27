<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="home.js"></script>
    <title>Home</title>
</head>
<body>
<style>
    
@import url("https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap");
:root {
  --color-black: hsl(0, 0%, 10%);
  --color-darks: hsl(0, 0%, 25%);
  --color-greys: hsl(0, 0%, 60%);
  --color-light: hsl(0, 0%, 95%);
  --color-white: hsl(0, 0%, 100%);
  --color-blue-100: hsl(217, 91%, 60%);
  --color-blue-200: hsl(221, 83%, 53%);
  --color-blue-300: hsl(224, 76%, 48%);
  --shadow-small: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
     0 1px 2px 0 rgba(0, 0, 0, 0.06);
  --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
     0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
     0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  list-style-type: none;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  z-index: 1;
}

html {
  font-size: 100%;
  box-sizing: inherit;
  scroll-behavior: smooth;
  height: -webkit-fill-available;
}

/* Styles for body */


main {
  overflow: hidden;
}


.section {
  margin: 0 auto;
  padding: 6rem 0 1rem;
}

.container {
  max-width: 75rem;
  height: auto;
  margin: 0 auto;
  padding: 0 1.25rem;
}

.brand {
  font-family: inherit;
  font-size: 1.5rem;
  font-weight: 600;
  line-height: 1.5;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: var(--color-white)
}

.header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: auto;
  z-index: 10;
  margin: 0 auto;

  box-shadow: var(--shadow-medium);
 background: #000000;
}

.navbar {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 4rem;
  margin: 0 auto;
  z-index: 3;
}

.menu {
  position: fixed;
  top: 0;
  left: -100%;
  width: 80%;
  height: 100%;
  z-index: 10;
  overflow-y: auto;
  background-color: var(--color-white);
  box-shadow: var(--shadow-medium);
  transition: all 0.5s ease-in-out;
  z-index: 3;
}
.menu.is-active {
  top: 0;
  left: 0;
  z-index: 22;
}
.menu-inner {
  display: flex;
  flex-direction: column;
  row-gap: 1.25rem;
  margin: 1.25rem;
  z-index: 3;
}
.menu-link {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 500;
  line-height: 1.5;
  text-transform: uppercase;
  color: var(--color-pink);
  transition: all 0.3s ease;
}
.menu-link:hover {
  color: var(--color-blue-200);
}
@media only screen and (min-width: 55rem) {
  .menu {
    position: relative;
    top: 0;
    left: 0;
    width: auto;
    height: auto;
    margin-left: auto;
    background: none;
    box-shadow: none;
  }
  .menu-inner {
    display: flex;
    flex-direction: row;
    column-gap: 1.75rem;
    margin: 0 auto;
    margin-right: 5rem;
  }
  .menu-link {
    text-transform: capitalize;
  }
  .menu-block {
    margin-left: 2rem;
  }
}

.burger {
  position: relative;
  display: block;
  cursor: pointer;
  order: -1;
  width: 1.75rem;
  height: auto;
  border: nofne;
  outline: none;
  visibility: visible;
  z-index: 11;
  height:50px
}
.burger-line {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: var(--color-white);
  transition: all 0.3s ease-in-out;
}
.burger-line::before,
.burger-line::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--color-white);
  transition: all 0.3s ease-in-out;
}
.burger-line::before {
  top: -8px;
}
.burger-line::after {
  bottom: -8px;
}
@media only screen and (min-width: 55rem) {
  .burger {
    display: none;
    visibility: hidden;
  }
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, 0.6);
  transition: all 0.3s ease-in-out;
}
.overlay.is-active {
  display: block;
  opacity: 1;
  visibility: visible;
}





span{
  float:right;
  right:0px
}

a{
  color:rgb(221, 197, 197);
  text-decoration: none;
}

@media only screen and (min-width: 1200px) {
  .card {
    width: calc(33.33% - 2rem);
    height: 400px;
    margin: 1rem;
  }
}

#search-results {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  max-height: 200px;
  overflow-y: auto;
}

#search-results a {
  display: block;
  padding: 5px 10px;
  color: #333;
  text-decoration: none;
}





.mainNav{
    display: flex;
    width:100%;
    height:5rem;
    /* border:solid black 2px;
    border-radius: 2rem; */
    background: transparent;
    position:fixed;
    top: 0;
    z-index: 2;
 
}


.mainUl{
    display: flex;
    justify-content: space-evenly;
    width:85%;
    height: 100%;
    margin:0;
    
    
}

.mainLi{
    list-style: none;
    font-size: 1.5rem;
    width:100%;
    text-align: center;
    vertical-align: middle;
    line-height: 5rem;
    border-radius: 1.75rem;
    
    /* margin-top:1rem; */


}

.mainLi:hover{
    background: black;
    color: white;
    
}

.mainH1{
    line-height: 5rem;
    margin:0rem 0rem 0rem 0.5rem;
	
}


.slider{


width:70%;
align-self: center;
border:solid black 2px;
height: 35rem;
margin-top:8rem; 
margin-left:15rem;   
margin-bottom: 0;
z-index: 0;
display: grid;
/* flex-direction: row; */
grid-template-columns: auto auto;
background-image: url(../webTrial/dorms.jpg);
background-size:cover;
background-repeat: no-repeat;
box-shadow: 3px 4px rgba(0, 0, 0, 0.4);


}

.aTag{
text-decoration: none;
}



.textSlider{

	width:100%;
	height: 5rem;

}

.marquee {
	color: black;
	letter-spacing: 2px;
	font-weight: 700;
	font-size: 40px;
	line-height:5rem;
	
}


.nextButt{
    background: black;
    width:2rem;
    height:2rem;
    color: white;
    text-align: center;
    z-index: 1;
    line-height: 2rem;
    margin-top:18rem;
    margin-left:94%;
}


.prevButt{

    background: black;
    width:2rem;
    height:2rem;
    color: white;
    text-align: center;
    z-index: 1;
    line-height: 2rem;
    margin-top:18rem;
	margin-left: 0;


}

.radioContainer{
	display: flex;
	flex-direction: row;
	text-align: center;
	width:100%;
	margin-left: 87%;
	margin-top:13rem;
	
}


.radioButt{

	accent-color: black;

}


.btn {		
	position: relative;	
	padding: 1.4rem 4.2rem;
	padding-right: 3.1rem;
	font-size: 1.2rem;
	color: var(--inv);
	letter-spacing: 0.1rem;
	text-transform: uppercase;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);	
	cursor: pointer;
	user-select: none;
    --def: white; 	
	--inv: black ;
    list-style: none;


}

.btn:before, .btn:after {
	content: '';
	position: absolute;	
	transition: inherit;
	z-index: -1;
}

.btn:hover {
	color: var(--def);
	transition-delay: .5s;
}

.btn:hover:before {
	transition-delay: 0s;
}

.btn:hover:after {
	background: var(--inv);
	transition-delay: .35s;
}

/* From Top */

.from-top:before, 
.from-top:after {
	left: 0;
	height: 0;
	width: 100%;

}

.from-top:before {
	bottom: 0;	
	border: 1px solid var(--inv);
	border-top: 0;
	border-bottom: 0;

}

.from-top:after {
	top: 0;
	height: 0;
}

.from-top:hover:before,
.from-top:hover:after {
	height: 100%;
    
}

/* From Left */

.from-left:before, 
.from-left:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-left:before {
	right: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;	
}

.from-left:after {
	left: 0;
}

.from-left:hover:before,
.from-left:hover:after {
	width: 100%;
}

/* From Right */

.from-right:before, 
.from-right:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-right:before {
	left: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;	
}

.from-right:after {
	right: 0;
}

.from-right:hover:before,
.from-right:hover:after {
	width: 100%;
}

/* From center */

.from-center:before {
	top: 0;
	left: 50%;
	height: 100%;
	width: 0;
	border: 1px solid var(--inv);
	border-left: 0;
	border-right: 0;
}

.from-center:after {
	bottom: 0;
	left: 0;
	height: 0;
	width: 100%;
	background: var(--inv);
}

.from-center:hover:before {
	left: 0;
	width: 100%;
}

.from-center:hover:after {
	top: 0;
	height: 100%;
}

/* From Bottom */

.from-bottom:before, 
.from-bottom:after {
	left: 0;
	height: 0;
	width: 100%;
}

.from-bottom:before {
	top: 0;	
	border: 1px solid var(--inv);
	border-top: 0;
	border-bottom: 0;
}

.from-bottom:after {
	bottom: 0;
	height: 0;
}

.from-bottom:hover:before,
.from-bottom:hover:after {
	height: 100%;
}




div {margin-bottom: 3rem;}
div:last-child {margin-bottom: 0;}


.wrapper{
	margin-left: 20%;
	max-height: 15rem;
	/* border: 3px solid black; */
	display: flex;
	overflow-x: auto;
	width: 58.5rem;
	overflow-y: hidden;
	border: 2px solid black;
	box-shadow: 3px 4px rgba(0, 0, 0, 0.4);

}
  

.wrapper::-webkit-scrollbar{
	width: 0;
}

.wrapper .item{
	min-width: 15rem;
	height: 15rem;
	line-height: 110px;
	text-align: center;
	background-image: url("image1.jpg");
	color: white;
	margin-right: 2px;


}

.overlayText{
	width: 100%;
    height: 100%;
	background:rgba(0, 0, 0, 0.6);
	margin: 0;
	line-height: 15rem;
	text-align: center;
}

</style>
<?php

 require "../navbar/navbar.php";
loadNavBar();
?>





<div class="slider" id="slider">




<button class="prevButt" id="prevButt"><</button>
<button class="nextButt" id="nextButt">></button>

<div class="radioContainer">

<input type="radio" class="radioButt" name="radio" id="radio1">
<input type="radio" class="radioButt" name="radio" id="radio2">
<input type="radio" class="radioButt" name="radio" id="radio3">


</div>


</div>



<div class="textSlider">




</div>



</body>
</html>