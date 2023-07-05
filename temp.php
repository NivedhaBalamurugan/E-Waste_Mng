<?php
function passtocart($id,$brand,$years)
{

	include 'config.php';
$db="DBMS";
$conn=mysqli_connect($server,$user,$pass,$db);
$sql1= "SELECT * from products where p_id='$id'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
{
	$id=$row1['p_id'];
	$name=$row1['p_name'];
	$type=$row1['p_type'];
	$return=$row1['ret_type'];
}
$sql2="SELECT price from p_info where p_type='$type' and year_of_manf='$years'"; 
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($res2);
{
	$price=$row2['price'];
}
$sql3="INSERT INTO cart VALUES('$id','$name','$type','$price','return','$brand','$years')";
$res3=mysqli_query($conn,$sql3);


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;
$db = mysqli_connect("localhost", "root", "", "dbms");
$sql = "INSERT INTO image (p_id,filename) VALUES ('$id','$filename')";
mysqli_query($db, $sql);
if (move_uploaded_file($tempname, $folder)) {

} else {
	
}

}

if(isset($_POST['pass']))
{
	passtocart($_POST['id'],$_POST['brand'],$_POST['years']);
}

?>


<html>
<head>
<link rel="icon" type="image/png" href="https://www.skvewasterecycling.com/assets/img/fav-icon.png">
    
    
    
                
<style>
@import "bourbon";
@import "https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,400";
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
@import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap");


.button-71 {
  background-color: #0078d0;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
z-index:1;
  position:relative;
left:1350px;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

.button-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .button-71 {
    padding: 16px 48px;
  }
}

.button-82-pushable {
  position: relative;
  border: none;
  background: transparent;
  padding: 0;
  cursor: pointer;
  outline-offset: 4px;
  transition: filter 250ms;
  user-select: none;
width:250px;
padding:right:10px;
padding-bottom:15px;
	  -webkit-user-select: none;
  touch-action: manipulation;
	heigth:10px;
}


.button-82-shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 12px;
  background: hsl(0deg 0% 0% / 0.25);
  will-change: transform;
  transform: translateY(2px);
  transition:
    transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

.button-82-edge {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  border-radius: 12px;
  background: linear-gradient(
    to left,
    hsl(340deg 100% 16%) 0%,
    hsl(340deg 100% 32%) 8%,
    hsl(340deg 100% 32%) 92%,
    hsl(340deg 100% 16%) 100%
  );
}

.button-82-front {
  display: block;
  position: relative;
  padding: 12px 27px;
  border-radius: 12px;
  font-size: 1.1rem;
  color: white;

  background: hsl(345deg 100% 47%);
  will-change: transform;
  transform: translateY(-4px);
  transition:
    transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

@media (min-width: 768px) {
  .button-82-front {
    font-size: 1.25rem;
    padding: 12px 42px;
  }
}

.button-82-pushable:hover {
  filter: brightness(110%);
  -webkit-filter: brightness(110%);
}

.button-82-pushable:hover .button-82-front {
  transform: translateY(-6px);
  transition:
    transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.button-82-pushable:active .button-82-front {

  transform: translateY(-2px);
  transition: transform 34ms;
}

.button-82-pushable:hover .button-82-shadow {
  transform: translateY(4px);
  transition:
    transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

.button-82-pushable:active .button-82-shadow {
  transform: translateY(1px);

  transition: transform 34ms;
}

.button-82-pushable:focus:not(:focus-visible) {
  outline: none;
}




html {
  width: 100%;
  height: 100%;
}
body {
  background: white;
  color: #333;
  font-family: "Raleway";
  height: 100%;
}
body h1 {
  text-align: center;
  color: #428bff;
  font-weight: 300;
  padding: 40px 0 20px 0;
  margin: 0;
}
.tabs {
	position:absoute;
top:-20px;
  left: 50%;
  transform: translateX(-50%);
  position: relative;
  //background: white;
  padding: 50px;
  padding-bottom: 80px;
  width: 80%;
  height: 100%;
 // box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  border-radius: 5px;
 // min-width: 300px;
}
.tabs input[name="tab-control"] {
  display: none;
}
.tabs .content section h2,
.tabs ul li label {
  font-family: "Montserrat";
  font-weight: bold;
  font-size: 18px;
  color: #428bff;
}
.tabs ul {
  list-style-type: none;
  padding-left: 0;
  display: flex;
  flex-direction: row;
  margin-bottom: 10px;
  justify-content: space-between;
  align-items: flex-end;
  flex-wrap: wrap;
}
.tabs ul li {
  box-sizing: border-box;
  flex: 1;
  width: 25%;
  padding: 0 10px;
  text-align: center;
}
.tabs ul li label {
  transition: all 0.3s ease-in-out;
  color: #929daf;
  padding: 5px auto;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  -webkit-touch-callout: none;
}
.tabs ul li label br {
  display: none;
}
.tabs ul li label svg {
  fill: #929daf;
  height: 1.2em;
  vertical-align: bottom;
  margin-right: 0.2em;
  transition: all 0.2s ease-in-out;
}
.tabs ul li label:hover,
.tabs ul li label:focus,
.tabs ul li label:active {
  outline: 0;
  color: #bec5cf;
}
.tabs ul li label:hover svg,
.tabs ul li label:focus svg,
.tabs ul li label:active svg {
  fill: #bec5cf;
}
.tabs .slider {
  position: relative;
  width: 25%;
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}
.tabs .slider .indicator {
  position: relative;
  width: 50px;
  max-width: 100%;
  margin: 0 auto;
  height: 10px;
  background: #428bff;
  border-radius: 1px;
}
.tabs .content {
  margin-top: 30px;
}
.tabs .content section {
  display: none;
  animation-name: content;
  animation-direction: normal;
  animation-duration: 0.3s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  line-height: 1.4;
}
.tabs .content section h2 {
  color: #428bff;
  display: none;
}
.tabs .content section h2::after {
  content: "";
  position: relative;
  display: block;
  width: 30px;
  height: 30px;
  background: #428bff;
  margin-top: 5px;
  left: 1px;
}
.tabs
  input[name="tab-control"]:nth-of-type(1):checked
  ~ ul
  > li:nth-child(1)
  > label {
  cursor: default;
  color: #428bff;
}
.tabs
  input[name="tab-control"]:nth-of-type(1):checked
  ~ ul
  > li:nth-child(1)
  > label
  svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs
    input[name="tab-control"]:nth-of-type(1):checked
    ~ ul
    > li:nth-child(1)
    > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(1):checked ~ .slider {
  transform: translateX(0%);
}
.tabs
  input[name="tab-control"]:nth-of-type(1):checked
  ~ .content
  > section:nth-child(1) {
  display: block;
}
.tabs
  input[name="tab-control"]:nth-of-type(2):checked
  ~ ul
  > li:nth-child(2)
  > label {
  cursor: default;
  color: #428bff;
}
.tabs
  input[name="tab-control"]:nth-of-type(2):checked
  ~ ul
  > li:nth-child(2)
  > label
  svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs
    input[name="tab-control"]:nth-of-type(2):checked
    ~ ul
    > li:nth-child(2)
    > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(2):checked ~ .slider {
  transform: translateX(100%);
}
.tabs
  input[name="tab-control"]:nth-of-type(2):checked
  ~ .content
  > section:nth-child(2) {
  display: block;
}
.tabs
  input[name="tab-control"]:nth-of-type(3):checked
  ~ ul
  > li:nth-child(3)
  > label {
  cursor: default;
  color: #428bff;
}
.tabs
  input[name="tab-control"]:nth-of-type(3):checked
  ~ ul
  > li:nth-child(3)
  > label
  svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs
    input[name="tab-control"]:nth-of-type(3):checked
    ~ ul
    > li:nth-child(3)
    > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(3):checked ~ .slider {
  transform: translateX(200%);
}
.tabs
  input[name="tab-control"]:nth-of-type(3):checked
  ~ .content
  > section:nth-child(3) {
  display: block;
}
.tabs
  input[name="tab-control"]:nth-of-type(4):checked
  ~ ul
  > li:nth-child(4)
  > label {
  cursor: default;
  color: #428bff;
}
.tabs
  input[name="tab-control"]:nth-of-type(4):checked
  ~ ul
  > li:nth-child(4)
  > label
  svg {
  fill: #428bff;
}
@media (max-width: 600px) {
  .tabs
    input[name="tab-control"]:nth-of-type(4):checked
    ~ ul
    > li:nth-child(4)
    > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(4):checked ~ .slider {
  transform: translateX(300%);
}
.tabs
  input[name="tab-control"]:nth-of-type(4):checked
  ~ .content
  > section:nth-child(4) {
  display: block;
}
@keyframes content {
  from {
    opacity: 0;
    transform: translateY(5%);
  }
  to {
    opacity: 1;
    transform: translateY(0%);
  }
}
@media (max-width: 1000px) {
  .tabs ul li label {
    white-space: initial;
  }
  .tabs ul li label br {
    display: initial;
  }
  .tabs ul li label svg {
    height: 1.5em;
  }
}
@media (max-width: 600px) {
  .tabs ul li label {
    padding: 5px;
    border-radius: 5px;
  }
  .tabs ul li label span {
    display: none;
  }
  .tabs .slider {
    display: none;
  }
  .tabs .content {
    margin-top: 20px;
  }
  .tabs .content section h2 {
    display: block;
  }
}




::selection{
  color: #fff;
  background: #1cc7d0;
}
.wrapper{
  height: 400px;
  width: 320px;
  position: relative;
  transform-style: preserve-3d;
    perspective: 1000px;
float:left;
width:25%;
display:none;
align:center;
margin-top:40px;
margin-left:40px;
margin-bottom:40ox;
margin-right:40px;


}
.wrapper .card{
  position: absolute;
  height: 100%;
  width: 100%;
  padding: 5px;
  background: #fff;
  border-radius: 10px;
  transform: translateY(0deg);
  backface-visibility: hidden;
  transform-style: preserve-3d;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
  transition: transform 0.7s cubic-bezier(0.4,0.2,0.2,1);
}
.wrapper:hover > .front-face{
  transform: rotateY(-180deg);
}
.wrapper .card img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 10px;
}
.wrapper .back-face{
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  flex-direction: column;
  transform: rotateY(180deg);
}
.wrapper:hover > .back-face{
  transform: rotateY(0deg);
}
.wrapper .back-face img{
  height: 150px;
  width: 150px;
  padding: 5px;
  border-radius: 50%;
  background: linear-gradient(375deg, #1cc7d0, #2ede98);
}
.wrapper .back-face .info{
  text-align: center;
}
.back-face .info .title{
  font-size: 30px;
  font-weight: 500;
}
.back-face ul{
  display: flex;
}
.back-face ul a{
  display: block;
  height: 40px;
  width: 40px;
  color: #fff;
  text-align: center;
  margin: 0 5px;
  line-height: 38px;
  border: 2px solid transparent;
  border-radius: 50%;
  background: linear-gradient(375deg, #1cc7d0, #2ede98);
  transition: all 0.5s ease;
}
.back-face ul a:hover{
  color: #1cc7d0;
  border-color: #1cc7d0;
  background: linear-gradient(375deg, transparent, transparent);
}

.cards
{
  width:1100px;
margin-left:40px;
margin-top:40px;
margin-bottom:40px;
margin-top:40px;



}
.cards:after{
content:"";
clear:both;
display :table;
}

.nivishow{
display:block;
}






.niviprice {
  display: inline-block;
  border-radius: 4px;
  background-color:#f4511e;
  border: none;
  color:#FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.niviprice span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


.niviprice span:after{
  content:'\00bb';
  position:absolute;
  opacity:0;
  top:0px;
  right:-20px;
  transition:0.5s;
}
.niviprice:hover span{
  padding-right:25px;
}
.niviprice:hover span:after{
  opacity:1;
  right:0;
}
.grids
{
left:25%;
position: absolute;
background: linear-gradient(#4ba9e9 0,#4ba9e9 50%,#fff 50%,#fff 100%);
z-index:10;
justify-content:center;
align-items:center;

}
.nivigetcard 
{
display:none;
position:relative;
	width: 300px;
	height: 420px;
	box-shadow: 0 15px 45px rgba(0,0,0,0.1);
	overflow: hidden;
	transition: 0.5s ease-in-out;
}
.nivigetcard:hover 
{
	width: 600px;
}


.nivigetcard .nivigetdetails 
{
	
	position:absolute;	
	left: 0;
	width: 300px;
	height: 100%;
	background: #4ba9e9;
	display: flex;
	justify-content: center;
	padding: 20px;
	flex-direction: column;
	transition: 0.5s ease-in-out;
}
.nivigetcard:hover .nivigetdetails 
{
	left: 300px;
}
.nivigetcard .nivigetdetails::before 
{
	content: '';
	position: fixed;
	left: 0px;
	width: 0; 
  height: 0; 
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 10px solid #fff;
	z-index: 1;
}
.nivigetcard .nivigetdetails h3 
{
	color:#fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 1.5em;
	line-height: 1em;
}
.nivigetcard .nivigetdetails h3 span 
{
	font-size: 0.65em;
	font-weight: 300;
	opacity: 0.85;
	text-transform: none;
}
.nivicard .nivigetdetails h4 
{	
	color:#fff;	
	text-transform: uppercase;
	font-weight: 600;
	font-size: 0.9em;
	line-height: 1em;
	margin-top: 20px;
	margin-bottom: 10px;
}
#text
{
color:#fff;
	font-size: 0.8em;
	opacity: 0.85;
}


.nivigetcard .nivigetdetails h2 
{
	color:#fff;
	text-transform: uppercase;
	font-weight: 600;
	font-size: 2em;
}
.nivigetcard .nivigetdetails h2 sup 
{
	font-weight: 300;
}
.nivigetcard .nivigetdetails h2 small 
{
	font-size: 0.75em;
}
.nivigetcard .nivigetdetails a 
{
	display: inline-block;
	padding: 10px 25px;
	
	font-weight: 500;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 600;
	color: #4ba9e9;
}
#cars, #years
{
	font-size:20px;
	position: relative;
		display: block;
		width: 10em;
		height: 2em;
		line-height: 2;
		background: #fff;
		overflow: hidden;
		border-radius: .25em;
		color:#fff;
		background-color:#4ba9e9;
		border-radius:15px;
}

#field
{
	border-radius:15px;
	font-size:20px;
	width:10em;
	height: 2em;
		line-height: 2;
		color:#fff;
		background-color:#4ba9e9;
}
.closebutton {
	position:absolute;
	top:10px;
	right:50px;
	font-size:18px;
}
#logo
{
	position:absolute;
	z-index:1;
	top:0px;
	left:50px;
	width:180px;
	height:180px;
}
#logo2
{
	position:absolute;
	z-index:1;
	top:30px;
	right:50px;
	width:400px;
	height:100px;
}
#note{
	position:absolute;
	z-index:1;
	top:135px;
	left:30px;
	font-size:20px;
	color:green;
	font-weight:bold;
}
.cl
{
	width:1100px;
	position:absolute;
	left:70px;
	top:650px;
	height:300px;
}

.con
{
 background:#2d3b36 url(http://andstud.io/wp-content/uploads/2014/03/blurrrr2.jpg)no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 0px;
}
#h1 {

   color: green; 
   text-shadow: 1px 1px 0 rgba(0,0,0,0.4);
   padding-top: 30px;
   font-size: 100px; 
   font-weight: 700;
   text-align: center;
   font-family: 'Source Sans Pro', sans-serif;
   margin: 0px;
}

.form {
    margin-left:auto;
    margin-right:auto;
    width: 965px;
    height: 450px;
    padding:30px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    overflow: hidden; 
}

textarea{
    background: rgba(0, 0, 0, 0.4); 
    width: 894px;
    height: 110px;
    border: none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 18px;
    color: #fff;
    padding-left: 45px;
    padding-right: 20px;
    padding-top: 12px;
    margin-bottom: 20px;
    overflow: hidden;
}



.nameinput, .emailinput {
    width: 894px;
    height: 48px;
    border: none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; 
    display: block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 18px;
    color: #fff;
    padding-left: 20px;
    padding-right: 20px;
    margin-bottom: 20px;
}

input[type=submit] {
    cursor: pointer;
}

input.nameinput {
    background: rgba(0, 0, 0, 0.4); 
    padding-left: 45px;
}

input.emailinput {
    background: rgba(0, 0, 0, 0.4);
    padding-left: 45px;
}

input.message {
    background: rgba(0, 0, 0, 0.4);
    padding-left: 45px;
}



::-webkit-input-placeholder {
    color: #fff;
}

:-moz-placeholder{ 
    color: #fff; 
}

::-moz-placeholder {
    color: #fff;
}

:-ms-input-placeholder {  
    color: #fff; 
}

input:focus, textarea:focus { 
    background-color: rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    -webkit-box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    overflow: hidden; 
}

.btn {
  border: none;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 18px;
  width: 200px;
  height: 48px;
  color: #000;
  background: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: 700;
  position: relative;
  outline: none;
  box-shadow: 0 6px #cecece;
  border-radius: 5px;
  float: right;
  margin-right: 6px;
}

.btn:hover {
  background: #fff;
  outline: none;
  box-shadow: 0 4px #cecece;
  top: 2px;
}

.btn:active {
  background: #fff;
  outline: none;
  box-shadow: 0 0 #cecece;
  top: 6px;
}

.flat {
  border: none;
  cursor: pointer;
  display: inline-block;
  outline: none;
  position: relative;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}


.flat:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}


.flat {
   width: 960px !important;
   height: 48px;
   overflow: hidden;
   margin-bottom: 20px;
   background: url(http://www.jordancundiff.com/wp-content/uploads/2014/03/icon-dropdown.png) no-repeat right;
   }

@media only screen and ( min-width: 768px ) and ( max-width: 1035px ) {
  h1 { font-size: 80px; }
  form { width: 736px !important; }
    #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat >  #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 731px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 666px !important; }
}

@media only screen and ( max-width: 804px ) {
    h1 { font-size: 50px; }
  form { width: 450px !important; }
   #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat >  #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 445px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 380px !important; }
}

@media only screen and ( max-width: 517px ) {
     h1 { font-size: 30px; }
  form { width: 295px !important; }
  #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat >  #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Subject.flat { width: 290px !important; }
    .nameinput, .emailinput, #wpcf7-f156-p143-o1\20 formwrap > form > p > span.wpcf7-form-control-wrap.Message > textarea { width: 225px !important; }
  .btn { width: 110px; }
}



#hab {
	font-size:30px;
	font-weight:bolder;
	text-align: center;
	color: white;
}
#para {
	font-size:20px;
	line-height: 1.4;
	color: blue;
	margin-bottom: 1.5rem;
	position:absolute;
	left:70px;
	font-weight:bold;
}

.wrap {
	display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	width: 85vmin;
	height: 25em;
	border: 8px solid;
	border-image: linear-gradient(-50deg, green, #00b300, forestgreen, green, lightgreen, #00e600, green) 1;
	margin: 2rem auto;
	transition: .3s ease-in-out;
	position: relative;
	overflow: hidden;
}
.overlay {
	position: relative;
	display: flex;
	width: 100%;
	height: 100%;
	padding: 1rem .75rem;
	background: linear-gradient(to top, lime, cyan);
	z-index: 1;
}
.overlay-content {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	width: 15vmin;
	height: 100%;
	padding: .5rem 0 0 .5rem;
	border: 3px solid;
	border-image: 
    	linear-gradient(
      	to bottom, 
      	#AEA724 5%,
      	pink 35% 65%,
      	#AEA724 95%
    	) 0 0 0 100%;
	transition: .3s ease-in-out .2s;
	z-index: 1;
}
.image-content1 {
	position: absolute;
	top: 0;
	right: 0;
	width: 60vmin;
	height: 100%;
	background-image: url("gold.png");
	background-size: cover;
	transition: .3s ease-in-out;
	/* border: 1px solid green; */
}
.image-content2 {
	position: absolute;
	top: 0;
	right: 0;
	width: 60vmin;
	height: 100%;
	background-image: url("silver.png");
	background-size: cover;
	transition: .3s ease-in-out;
	/* border: 1px solid green; */
}

.dots {
	position: absolute;
	bottom: 1rem;
	right: 2rem;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	width: 55px;
	height: 4vmin;
	transition: .3s ease-in-out .3s;
}
.dot {
	width: 14px;
	height: 14px;
	background: yellow;
	border: 1px solid indigo;
	border-radius: 50%;
	transition: .3s ease-in-out .3s;
}

.textmem {
	position: absolute;
	top: 10px;
	right: 0;
	width: 60vmin;
	height: 100%;
	padding: 3vmin 4vmin;
	background: linear-gradient(to top, lime, cyan);
	box-shadow: inset 1px 1px 15px 0 rgba(0 0 0 / .4);

	font-weight:bold;
	font-size:20px;
	color:red;
}

.wrap:hover .overlay
 {
	transform: translateX(-60vmin);
}
.wrap:hover .image-content {
	width: 30vmin;
}
.wrap:hover .overlay-content {
	border: none;
	transition-delay: .2s;
	transform: translateX(60vmin);
}
.wrap:hover .dots {
	transform: translateX(1rem);
}
.wrap:hover .dots .dot {
	background: pink;
}


/* Animations and timing delays */
.animate {
  animation-duration: 0.7s;
  animation-timing-function: cubic-bezier(.26, .53, .74, 1.48);
  animation-fill-mode: backwards;
}
/* Pop In */
.pop { animation-name: pop; }
@keyframes pop {
  0% {
    opacity: 0;
    transform: scale(0.5, 0.5);
  }
  100% {
    opacity: 1;
    transform: scale(1, 1);
  }
}

/* Slide In */
.slide { animation-name: slide; }
@keyframes slide {
  0% {
    opacity: 0;
    transform: translate(4em, 0);
  }
  100% {
    opacity: 1;
    transform: translate(0, 0);
  }
}

/* Slide Left */
.slide-left { animation-name: slide-left; }
@keyframes slide-left {
  0% {
    opacity: 0;
    transform: translate(-40px, 0);
  }
  100% {
    opacity: 1;
    transform: translate(0, 0);
  }
}

.slide-up {animation-name: slide-up;}
@keyframes slide-up {
	0% {
		opacity: 0;
		transform: translateY(3em);
	}
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.delay-1 {
  animation-delay: 0.3s;
}
.delay-2 {
  animation-delay: 0.6s;
}
.delay-3 {
  animation-delay: 0.9s;
}
.delay-4 {
  animation-delay: 1.2s;
}
.delay-5 {
  animation-delay: 1.5s;
}
.delay-6 {
  animation-delay: 1.8s;
}
.delay-7 {
  animation-delay: 2.1s;
}
.delay-8 {
  animation-delay: 2.4s;
}
.mbutton-71 {
  background-color:orange;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
z-index:1;
 position:relative;
 top:80px;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.mbutton-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

.mbutton-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .mbutton-71 {
    padding: 16px 48px;
  }
}
#alt{
	
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items:center;
  justify-content: center;
  color:#333C48;
	width:500px;
	height:200px;
	position:absolute;
	z-index:1;
	top:500px;
	left:400px;
	background:rgb(66, 245, 38);
  display:none;
  border-radius:10px;
}
.alertal{
  display: flex;
  align-items:center;
  padding: 0.55rem 0.65rem 0.55rem 0.75rem;
  border-radius:1rem;
  min-width:400px;
  justify-content: space-between;
  margin-bottom: 2rem;
  box-shadow:
  0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
  0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
  0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
  0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
  0px 48px 208.9px rgba(0, 0, 0, 0.05),
  0px 115px 500px rgba(0, 0, 0, 0.07)
}
.contental{
  display: flex;
  align-items:center;
  font-weight:bold;
}
.iconal{
  padding: 0.5rem;
  margin-right: 1rem;
  border-radius:39% 61% 42% 58% / 50% 51% 49% 50%;
  box-shadow:
  0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
  0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
  0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
  0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
  0px 48px 208.9px rgba(0, 0, 0, 0.05),
  0px 115px 500px rgba(0, 0, 0, 0.07)
}
.closeal{
  background-color: transparent;
  border:none;
  outline:none;
  transition:all 0.2s ease-in-out;
  padding: 0.75rem;
  border-radius:0.5rem;
  cursor:pointer;
  display: flex;
  align-items:center;
  justify-content: center;
}
.closeal:hover{
  background-color: #fff;
}

.successal{
  background-color: rgba(62, 189, 97,0.2);
  border:2px solid #3ebd61;
}
.successal .iconal{
  background-color:#3ebd61;
}
.mySlides
{
	width:100%;
	border-radius-10px;
}
.imgdropdown {
  position: relative;
  display: inline-block;
}

.imgdropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.imgdropdown:hover .imgdropdown-content {
  display: block;
}
.name
{
	marign :20px auto;
	padding-left:20px;
	padding-top:20px;
	padding-bottom:20px;
}
.imggg
{
	border-radius:20px;
	border:1px solid green;
}
.imggg {
  transition: transform .2s;
 

}
.nn
{
	width:100%;
	padding-left:20px;
	padding-top:20px;
	padding-bottom:20px;
}
.imggg:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
#what
{
	font-weight:bolder;
	font-color:green;
}

.details {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 100px;
  width:800px;
  height:500px;
  text-align:center;
  justify-content:center;
/* Full height */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 30px;
}

.detcon {
  background-color: #FFCCFF;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 5px solid #FF66FF;
  width: 50%;
border-radius:15px;
height:50%;
text-align:center; /* Could be more or less, depending on screen size */
}

*, *:before, *:after {
  box-sizing: inherit;
}

.cimg {
  max-width: 100%;
  height: auto;
}

.bb {

  box-sizing: border-box;
  font-size: 100%;
  
  -webkit-text-size-adjust: 100%;
  font-variant-ligatures: none;
  text-rendering: optimizeLegibility;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-family: "Fira Sans", sans-serif;
}



.bb {
  display: none; /* Hidden by default */
  /* Stay in place */
  position:fixed;
  left:50%;
  top:50%;
  z-index: 1; /* Sit on top */
  align-items:center;
  min-height:100vh;
  text-align:center;
  justify-content:center;
/* Full height */
  overflow: auto; /* Enable scroll if needed */
  padding-top: 30px;
  margin:auto;
  flex-direction: column;
  transform: translate(-50%, -50%);
  color: #1F1D42;
}

.card-hover {

  
  width: 360px;
  height: 500px;
    position: relative;
    margin: 5% auto 5% auto; 
	overflow: hidden;
  box-shadow: 0 0 32px -10px rgba(0, 0, 0, 0.08);


}
.card-hover:has(.card-hover__link:hover) .card-hover__extra {
  transform: translateY(0);
  transition: transform 0.35s;
}
.card-hover:hover .card-hover__content {
  background-color: #DEE8C2;
  bottom: 100%;
  transform: translateY(100%);
  padding: 50px 60px;
  transition: all 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover:hover .card-hover__link {
  opacity: 1;
  transform: translate(-50%, 0);
  transition: all 0.3s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover:hover .cimg {
  transform: scale(1);
  transition: 0.35s 0.1s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover__content {
  width: 100%;
  text-align: center;
  background-color: #86B971;
  padding: 0 60px 50px;
  position: absolute;
  bottom: 0;
  left: 0;
  transform: translateY(0);
  transition: all 0.35s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
  will-change: bottom, background-color, transform, padding;
  z-index: 1;
}
.card-hover__content::before, .card-hover__content::after {
  content: "";
  width: 100%;
  height: 120px;
  background-color: inherit;
  position: absolute;
  left: 0;
  z-index: -1;
}
.card-hover__content::before {
  top: -80px;
  -webkit-clip-path: ellipse(60% 80px at bottom center);
          clip-path: ellipse(60% 80px at bottom center);
}
.card-hover__content::after {
  bottom: -80px;
  -webkit-clip-path: ellipse(60% 80px at top center);
          clip-path: ellipse(60% 80px at top center);
}
.card-hover__title {
  font-size: 1.5rem;
  margin-bottom: 1em;
}
.card-hover__title span {
  color: #2d7f0b;
}
.card-hover__text {
  font-size: 0.75rem;
}
.card-hover__link {
  position: absolute;
  bottom: 1rem;
  left: 50%;
  transform: translate(-50%, 10%);
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  text-decoration: none;
  color: #2d7f0b;
  opacity: 0;
  padding: 10px;
  transition: all 0.35s;
}
.card-hover__link:hover svg {
  transform: translateX(4px);
}
.card-hover__link svg {
  width: 18px;
  margin-left: 4px;
  transition: transform 0.3s;
}
.card-hover__extra {
  height: 50%;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  font-size: 1.5rem;
  text-align: center;
  background-color: #86b971;
  padding: 80px;
  bottom: 0;
  z-index: 0;
  color: #dee8c2;
  transform: translateY(100%);
  will-change: transform;
  transition: transform 0.35s;
}
.card-hover__extra span {
  color: #2d7f0b;
}
.card-hover .cimg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: center;
     object-position: center;
  z-index: -1;
  transform: scale(1.2);
  transition: 0.35s 0.35s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
}

</style>
</head>
<body>


<img id="logo" src="e.jpg">
<p id="note" style="color:greeen;"><b>Techno Trash E-Waste Pvt Lmt</p></b>
<h1><b>Techno Trash<br>
<img id="logo2" src="tn.png">
The greener life together</h1></b>
<a href="index.php" class="button-71">CART</a>


<div class="tabs">

  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">
  <input type="radio" id="tab4" name="tab-control">
  <ul>
    <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
          <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
        </svg><br><span>About</span></label></li>
    <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
          <path d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
        </svg><br><span>Membership</span></label></li>
    <li title="Shipping"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
          <path d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
        </svg><br><span>Products</span></label></li>
    <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
          <path d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
        </svg><br><span>Contact</span></label></li>
  </ul>

  <div class="slider">
    <div class="indicator"></div>
  </div>
  <div class="content">
    <section>
      
	  
	 
<div class="homeslide">
  <img class="mySlides" src="1a.png" style="width:100%">
  <img class="mySlides" src="1b.png" style="width:100%">
  <img class="mySlides" src="1c.png" style="width:100%">
</div>
<center>
<div class="name">
	<img src="2a.png" width="300" height="550" class="imggg">
	<img src="2b.png" width="300" height="550" class="imggg">
	<img src="2c.png" width="300" height="550" class="imggg">
</div>
</center>	

<h1 id="what">What we do???</h1>
<div class="proc">
	<img src="proc.png" width="100%" height="100%">
</div>

<img src="nn.png" class="nn">
<img src="last.png" class="nn">
</section>
 <section>
      <h2>Shipping</h2>
     
	  <div id="jan">
<div class="wrap animate pop">
		<div class="overlay">
			<div class="overlay-content animate slide-left delay-2">
				<h1 id="hab" class="animate slide-left pop delay-4" style="color: black;">Gold</h1>
					</h1></div>
			<div class="image-content1 image-content animate slide delay-5"></div>
					<div class="dots animate">
						<div class="dot animate slide-up delay-6"></div>
						<div class="dot animate slide-up delay-7"></div>
						<div class="dot animate slide-up delay-8"></div>
					</div>
		</div>
		<span style='font-size:100px;'>&#10004;</span>
			<div class="textmem">
			<p id="para">Gold Users<br>
					&#10004;		20% discount with free shipping
							<br>	&#10004;Prioritized First
			<br>			&#10004;Seasonal Invitation			
				<br>&#10004;		Quaterly members-only giveaways
				<br>	&#10004;	Cost - Rs.2000
						
			<button class="mbutton-71" onclick=" func1()">Avail</button>

</p>
			</div>
</div>
<div class="wrap animate pop">
		<div class="overlay">
			<div class="overlay-content animate slide-left delay-2">
				<h1 id="hab" class="animate slide-left pop delay-4" style= "color:black">Silver</h1>
					</h1></div>
			<div class="image-content2 image-content animate slide delay-5"></div>
					<div class="dots animate">
						<div class="dot animate slide-up delay-6"></div>
						<div class="dot animate slide-up delay-7"></div>
						<div class="dot animate slide-up delay-8"></div>
					</div>
		</div>
			<div class="textmem">
			<p id="para">Silver Users<br>
					&#10004;		10% discount with free shipping
							<br>	&#10004;Prompted First
			<br>			&#10004;Occasional Invitation			
				<br>&#10004;		Yearly members-only giveaways
				<br>	&#10004;	Cost - Rs.1000
						
			<button class="mbutton-71" onclick=" func1()">Avail</button>

</p>
			</div>
</div>

<div id="alt">
  
	<div class="successal alertal">
	  <div class="contental">
		<div class="iconal">
		  <svg width="50" height="50" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle fill="#fff" cx="64" cy="64" r="64"/></g><g><path fill="#3EBD61" d="M54.3,97.2L24.8,67.7c-0.4-0.4-0.4-1,0-1.4l8.5-8.5c0.4-0.4,1-0.4,1.4,0L55,78.1l38.2-38.2   c0.4-0.4,1-0.4,1.4,0l8.5,8.5c0.4,0.4,0.4,1,0,1.4L55.7,97.2C55.3,97.6,54.7,97.6,54.3,97.2z"/></g></svg>
	  </div>
		<p>Coupon Code - AS345C
			<br>
			Pay and avail discount by using this coupon code at the time of collection!!!
		</p>
	  </div>
	  <button class="closeal" onclick="closefunc()">
	 
		
		<svg height="18px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="18px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#69727D" d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg>
	  </button>
	</div>
	
  </div>
</div><div>
	
	
	</section>

    <section>
      <h2>Delivery Contents</h2>


<div id="nivimyBtnContainer">
<br><br><center>
<button class="button-82-pushable" role="button" class="nivibtn active" onclick="filterSelection('all')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Show all</span></button>
<button class="button-82-pushable" role="button" class="nivibtn" onclick="filterSelection('large')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Large Household</span></button>
<button class="button-82-pushable" role="button" class="nivibtn" onclick="filterSelection('small')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Small Household</span></button>
<button class="button-82-pushable" role="button" class="nivibtn" onclick="filterSelection('tele')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Telecommunication</span></button>
<button class="button-82-pushable" role="button" class="nivibtn" onclick="filterSelection('cons')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Consumers</span></button>
<button class="button-82-pushable" role="button" class="nivibtn" onclick="filterSelection('others')"><span class="button-82-shadow"></span><span class="button-82-edge"></span> <span class="button-82-front text">Others</span></button>



</center> </div>


<div class="cards">

    <div class="wrapper tele">
      <div class="card front-face">
        <img src="cp.jpg" alt="Flip Card">
      </div>
      <div class="card back-face">
  <img src="cp.jpg" alt="Flip Card">
           <div class="info">
          <div class="title">Computers</div>
          <p>User interface designer and <br>front-end developer</p>
        </div> 
<button class="niviprice" onclick="getquote0021()" type="submit" name="report"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0021";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>


 <div class="wrapper tele">
      <div class="card front-face">
        <img src="lap.jpg" alt="Flip Card">
      </div>
      <div class="card back-face">
 <img src="lap.jpg" alt="Flip Card"><div class="info">
          <div class="title">Laptops</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0022()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0022";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
	



    <div class="wrapper tele">
      <div class="card front-face">
        <img src="print.jpg" alt="Flip Card">
      </div>
      <div class="card back-face">
  <img src="print.jpg" alt="Flip Card">
        <div class="info">
          <div class="title">Printers</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0023()"><span>Price</span></button>
      </div>
    </div>


<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0023";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
    <div class="wrapper tele">
      <div class="card front-face">
        <img src="mob.jpg" alt="Flip Card">
      </div>
      <div class="card back-face">
 <img src="mob.jpg" alt="Flip Card">
         <div class="info">
          <div class="title">Mobiles</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0025()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0025";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>

    <div class="wrapper large">
      <div class="card front-face">
        <img src="air.jpeg" alt="Flip Card">
      </div>
      <div class="card back-face">
<img src="air.jpeg" alt="Flip Card">
         <div class="info">
          <div class="title">Air conditioners</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0012()"><span>Price</span></button>
      </div>
    </div>
    
<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0012";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	


 <div class="wrapper others">
      <div class="card front-face">
        <img src="lamps.jpg" alt="Flip Card">
      </div>
      <div class="card back-face">
 <img src="lamps.jpg" alt="Flip Card">
           <div class="info">
          <div class="title">Lamps</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0033()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0033";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	


 <div class="wrapper large">
      <div class="card front-face">
<img src="fridge.jpg">
     </div>
      <div class="card back-face">
<img src="fridge.jpg">
         <div class="info">
          <div class="title">Refrigerators</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0002()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0002";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
			

<div class="wrapper large">
      <div class="card front-face">
<img src="wash.jpg">
         </div>
      <div class="card back-face">
<img src="wash.jpg">
         <div class="info">
          <div class="title">Washing machines</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0004()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0004";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	

<div class="wrapper large">
      <div class="card front-face">
<img src="fan.jpg">
         </div>
      <div class="card back-face">
<img src="fan.jpg">
         <div class="info">
          <div class="title">Electric fans</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0011()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0011";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	


<div class="wrapper large">
      <div class="card front-face">
<img src="oven.jpg">
          </div>
      <div class="card back-face">
<img src="oven.jpg">
          <div class="info">
          <div class="title">Microwave ovens</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0009()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0009";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	

<div class="wrapper small">
      <div class="card front-face">
<img src="dryer.jpg">
           </div>
      <div class="card back-face">
<img src="dryer.jpg">
        <div class="info">
          <div class="title">Hair dryer</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0017()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0017";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>


<div class="wrapper small">
      <div class="card front-face">
<img src="grinder.jpg">
          </div>
      <div class="card back-face">
<img src="grinder.jpg">
          <div class="info">
          <div class="title">Grinders and Mixies</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0015()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0015";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>

	

<div class="wrapper cons">
      <div class="card front-face">
<img src="tv.jpg">
          </div>
      <div class="card back-face">
<img src="tv.jpg">
          <div class="info">
          <div class="title">Television</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0027()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0027";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
				
				

<div class="wrapper cons">
      <div class="card front-face">
<img src="speak.jpg">
           </div>
      <div class="card back-face">
<img src="speak.jpg">
            <div class="info">
          <div class="title">Speakers</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0032()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0032";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
				
			

<div class="wrapper cons">
      <div class="card front-face">
<img src="radio.jpg">
            </div>
      <div class="card back-face">
<img src="radio.jpg">
         <div class="info">
          <div class="title">Radio</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0026()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0026";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	


<div class="wrapper others">
      <div class="card front-face">
<img src="tools.jpg">
             </div>
      <div class="card back-face">
<img src="tools.jpg">
        <div class="info">
          <div class="title">Tools</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0039()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0039";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	


<div class="wrapper others">
      <div class="card front-face">
<img src="toys.jpg">
           </div>
      <div class="card back-face">
<img src="toys.jpg">
         <div class="info">
          <div class="title">Electric toys</div>
          <p>User interface designer and <br>front-end developer</p>
1        </div>
        <button class="niviprice" onclick="getquote0041()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0041";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
<div class="wrapper others">
      <div class="card front-face">
<img src="sports.jpg">
         </div>
      <div class="card back-face">
<img src="sports.jpg">
          <div class="info">
          <div class="title">Sports Equipments</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0042()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0042";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	

<div class="wrapper others">
      <div class="card front-face">
<img src="thermo.jpg">
            </div>
      <div class="card back-face">
<img src="thermo.jpg">
        <div class="info">
          <div class="title">Thermostats</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0043()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0043";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
				
				
			

<div class="wrapper others">
      <div class="card front-face">
<img src="sew.jpg">     </div>
      <div class="card back-face">
<img src="sew.jpg"> 
          <div class="info">
          <div class="title">Sewing machine</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0037()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0037";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	

<div class="wrapper cons">
      <div class="card front-face">
<img src="cam.jpg">
         </div>
      <div class="card back-face">
<img src="cam.jpg">
            <div class="info">
          <div class="title">Camera</div>
          <p>User interface designer and <br>front-end developer</p>
        </div>
        <button class="niviprice" onclick="getquote0028()"><span>Price</span></button>
      </div>
    </div>

<?php
		include 'config.php';
		$db="DBMS";
		$conn=mysqli_connect($server,$user,$pass,$db);
		$sql1 = "SELECT * FROM products where p_id=0028";
		$res4 = mysqli_query($conn, $sql1);
		$row=mysqli_fetch_assoc($res4);
		?>
	
			

   
</div>



<br><br><br>

</section>
 <section>
 <div class="con">
<h1><b>Leave us a comment</h1></b>
<div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
    <form class="wpcf7-form" class="form">
        <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="156">
            <input type="hidden" name="_wpcf7_version" value="3.7.2">
            <input type="hidden" name="_wpcf7_locale" value="en_US">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-p143-o1">
            <input type="hidden" name="_wpnonce" value="d1da331d93">
        </div>
        <p>
           <span class="wpcf7-form-control-wrap Name">
             <input type="text" name="Name" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
          </span>
          <span class="wpcf7-form-control-wrap Email">
            <input type="email" name="Email"  size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
          </span>
<span class="wpcf7-form-control-wrap Email">
            <input type="text" name="Email"  size="40" class="emailinput wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Mobile Number">
          </span>
         
          <span class="wpcf7-form-control-wrap Message">
            <textarea name="Message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
          </span>
          <input onclick="fnn()" type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn">
          <img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
      </p>
      <div class="wpcf7-response-output wpcf7-display-none">
      </div>
  </form>
</div>
</div>
<img src="cl.png" class="cl">
	</section>



  </div>


</div>


<div class="bb" id="card0022">
  <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
        Make your <span>choice</span> right now!
      </h3>
      <p class="card-hover__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
      <a href="#" class="card-hover__link">
        <span>Learn How</span>
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>        
      </a>
    </div>
    <div class="card-hover__extra">
      <h4>Learn <span>now</span> and get <span>40%</span> discount!</h4>
    </div>
    <img src="cp.jpg" alt="">
    <p>hii this is nivedha</p>
  </div>
</div>

<div class="bb max-auto" id="card0012">
  <div class="card-hover">
    <div class="card-hover__content">
      <h3 class="card-hover__title">
        Make your <span>choice</span> right now!
      </h3>
      <p class="card-hover__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quisquam doloremque nostrum laboriosam, blanditiis libero corporis nulla a aut?</p>
      <a href="#" class="card-hover__link">
        <span>Learn How</span>
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
        </svg>        
      </a>
    </div>
    <div class="card-hover__extra">
      <h4>Learn <span>now</span> and get <span>40%</span> discount!</h4>
    </div>
    <img src="cp.jpg" alt="">
    <p>hii this is nivedha</p>
  </div>
</div>

<script type="text/javascript">

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

function func1()
{
	var x = document.getElementById("alt");
x.style.display="flex";
}
function closefunc()
{
	var x = document.getElementById("alt");
x.style.display="none";
}

function fnn()
{
	alert("Thanks for leaving a comment!!!");
}
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("wrapper");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "nivishow");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "nivishow");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

function hide()
{
var x=document.getElementById('nivigrid');
  x.style.display="none";}

var btnContainer = document.getElementById("nivimyBtnContainer");
var btns = btnContainer.getElementsByClassName("nivibtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



function getquote0021()
{
var x=document.getElementById('card0021');

  x.style.display="flex";
}
function getquote0022()
{
var x=document.getElementById('card0022');

  x.style.display="flex";
}
function getquote0023()
{
var x=document.getElementById('card0023');

  x.style.display="flex";
}
function getquote0025()
{
var x=document.getElementById('card0025');

  x.style.display="flex";
}
function getquote0002()
{
var x=document.getElementById('card0002');
 x.style.display="flex";
}
function getquote0004()
{
var x=document.getElementById('card0004');
  x.style.display="flex";
}
function getquote0009()
{
var x=document.getElementById('card0009');
 x.style.display="flex";
}
function getquote0011()
{
var x=document.getElementById('card0011');
   x.style.display="flex";
}
function getquote0012()
{
var x=document.getElementById('card0012');
   x.style.display="flex";
}
function getquote0014()
{
var x=document.getElementById('nivigrid0014');
   x.style.display="flex";
}
function getquote0015()
{
var x=document.getElementById('card0015');
  x.style.display="flex";
}
function getquote0027()
{
var x=document.getElementById('nivigrid0027s');
  x.style.display="flex";
}
function getquote0017()
{
var x=document.getElementById('card0017');
  x.style.display="flex";
}
function getquote0026()
{
var x=document.getElementById('card0026');
  x.style.display="flex";
}
function getquote0028()
{
var x=document.getElementById('card0028');
  x.style.display="flex";
}
function getquote0037()
{
var x=document.getElementById('card0037');
x.style.display="flex";
}
function getquote0039()
{
var x=document.getElementById('card0039');
  x.style.display="flex";
}
function getquote0041()
{
var x=document.getElementById('card0041');
  x.style.display="flex";
}
function getquote0042()
{
var x=document.getElementById('card0042');
  x.style.display="flex";
}
function getquote0043()
{
var x=document.getElementById('card0043');
  x.style.display="flex";
}
function getquote0033()
{
var x=document.getElementById('card0033');
  x.style.display="flex";
}
function getquote0044()
{
var x=document.getElementById('card0044');
  x.style.display="flex";
}

</script>
</body>
</html>
