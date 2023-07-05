<!DOCTYPE html>
<?php
include 'config.php';
$db="DBMS";
$conn=mysqli_connect($server,$user,$pass,$db);
$sql1= "SELECT * from cust_order";
$res1=mysqli_query($conn,$sql1);
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.profile{ 
 /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color:red; /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 30px;
}


.nivitab{
  position:absolute;
top:100px;
left:50px;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 500px;
}

.nivitab1{
  position:absolute;
top:100px;
left:50px;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 500px;
}
/* Style the buttons inside the tab */
.nivitab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

.nivitab1 button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}



/* Change background color of buttons on hover */
.nivitab button:hover {
  background-color: #ddd;
}

.nivitab1 button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.nivitab1 button.active {
  background-color: #ccc;
}




/* Style the tab content */
.nivitabcontent {
  position:absolute;
top:100px;
left:450px;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1000px;
  border-left: none;
  height: 500px;
color:black;
background-color:white;
}

.nivitabcontent1 {
  position:absolute;
top:100px;
left:450px;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 1000px;
  border-left: none;
  height: 500px;
color:black;
background-color:white;
}


#input{
position:absolute;
left:600px;
top:100px;

}

#prob{
position:absolute;
left:200px;
top:100px;
}

.btttn
{
color:red;

}
.table
{
width:50%;
border:1px solid black;
border-collapse:collapse;
}
.a
{
position:absolute;
top:0px;
right:0px;
}

.table,td,th
{
border:1px solid black;
border-collapse:collapse;
text-align:center;
}
</style>
</head>
<body>

<div id="prod1" class="profile">
<div class="prodet">

<div class="nivitab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Orders</button>
  </div>

<div id="London" class="nivitabcontent">

<h3>Profile</h3>
<img class="proimage" src="loginimage.png" width="150px" height="150px">
 <br><br>
<a class="a" href="temp2.php" class="closebtn">X</a>
<h4><div id="prob">
<label for="name">Name </label><br><br>
<textarea rows="1" cols="30">
Varsha</textarea><br><br>
<label for="mobile">Mobile Num </label><br><br>
<textarea rows="1" cols="30" class="input"></textarea><br><br>
<label for="dob"> Date of Birth </label><br><br>
<textarea rows="1" cols="30" class="input"></textarea><br><br>
<label for="ctry">Country </label><br><br>
<textarea rows="1" cols="30" disabled>India</textarea><br><br></div>


<div id="input">
<label for="mail">E-Mail </label><br><br>
<textarea rows="1" cols="30">
bkvrbkvr@gmail.com
</textarea><br><br>
<label for="gen">Gender </label><br><br>
<textarea rows="1" cols="30" class="input"></textarea><br><br>
<label for="add">Adddress </label><br><br>
<textarea rows="2" cols="30" class="input"></textarea><br><br></div></h4>


<button onclick="save()" class="btttn">Save</button>

</div>

<div id="Paris" class="nivitabcontent">
 <a class="a" href="temp2.php" class="closebtn">X</a> 
<h3 style="color:red;">Your Orders</h3><br><br>
<center>
<table class="table">
<tr><th>Name</th>
<th>P_quantity</th>
<th>Price</th>
</tr>

<!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
$rows=mysqli_fetch_assoc($res1);


                while($rows=mysqli_fetch_assoc($res1))
                {
            ?>
            <tr>
                
<?php $amt=$rows['order_id']; ?>
                <td><?php echo $rows['p_id'];?></td>
                <td><?php echo $rows['p_qty'];?></td>
                <td><?php echo "500"?></td>
               
            </tr>
            <?php
}                
            ?>

</table>
</center>
<h1 style="color:red;"><?php $amt; ?></h1>


</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("nivitabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function save()
{
let get=document.getElementById(".input");
get.disabled="true";
}

</script>
   
</body>
</html> 
