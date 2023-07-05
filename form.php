<?php


 include 'config.php';
$db="dbms";
$pp= $_POST['amt'];
$conn=mysqli_connect($server,$user,$pass,$db);
$oid=rand(1000,2000);
$cid=rand(3000,4000);
$sql2="insert into orders values('$oid','$cid','$pp')";
$res2=mysqli_query($conn,$sql2);

$sql="select * from cart";
$res=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($res))
                {
                  if(mysqli_affected_rows($conn)){
                     $id=$rows['p_id'];
                     $sql5="insert into cust_order values('$oid','$id',2)";
                     $res5=mysqli_query($conn,$sql5);}                     
                }


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
  
      <link rel="stylesheet" href="style.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
<style type="text/css">
   
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
.srwrapper{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  position:absolute;
  top:-130px;
  font-family: 'Poppins', sans-serif;
}



::selection{
  color: #fff;
  background: #664AFF;
}

.srwrapper{
  max-width: 450px;
  margin: 150px auto;
}

.srwrapper .srsearch-input{
  background: #fff;
  width: 100%;
  border-radius: 5px;
  position: relative;
  box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
}

.srsearch-input input{
  height: 55px;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 5px;
  padding: 0 60px 0 20px;
  font-size: 18px;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}

.srsearch-input.active input{
  border-radius: 5px 5px 0 0;
}

.srsearch-input .srautocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}

.srsearch-input.active .srautocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}

.srautocom-box li{
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}

.srsearch-input.active .srautocom-box li{
  display: block;
}
.srautocom-box li:hover{
  background: #efefef;
}

.srsearch-input .sricon{
  position: absolute;
  right: 0px;
  top: 0px;
  height: 55px;
  width: 55px;
  text-align: center;
  line-height: 55px;
  font-size: 20px;
  color: #644bff;
  cursor: pointer;
}

   table
{
width:100%;
border-collapse:collapse;
}
th,td
{
padding:10px;
text-align:center;
bodre-bottom:1px solid black;
}
tr:nth-child(even){background-color:#f2f2f2;}
</style>

</head>
   <body>

 
      <div class="container">
         <header>Techno Trash 
             Order Confirmation</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span >1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Service
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Orders
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Confirm
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="temp2.php" action="post">
               <div class="page slide-page">
                  <div class="title">
                     Contact Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Address
                     </div>
                     <input type="text" name="address">
                  </div>
                  <div class="field">
                     <div class="label">
                        Mobile number
                     </div>
                     <input type="text" name="mob">
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Service Center:
                  </div>
                  <div class="field">
                     <div class="label">
                        Search for the nearest Techono Trash Center <br><br>
                     </div>
          		 <br><br>

                 <div class="srwrapper">
      <div class="srsearch-input">
        <a href="" target="_blank" hidden class="al" > </a>
        <input type="text" placeholder="Type to search.." class="in">
        <div class="srautocom-box">
        </div>
        <div class="sricon"><i class="fas fa-search"></i></div>
      </div>
    </div>
                  </div>
                 
                  <div class="field">
                     <div class="label">
                        
                     </div>
                     
                  </div>

                  <div class="field btns">
                     <button class="can">Cancel</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                     <div class="field">
                     <div class="label">
                   <?php
                     $sql2="select * from cust_order";
                $res4=mysqli_query($conn,$sql2);
                $rows=mysqli_fetch_assoc($res4);
                echo "Order-id : ".$rows['order_id'];
                ?>
                     </div>
                     
                     <center><table><h3>
            <tr>
                <th>Device</th>
                <th>Type</th>
                <th>Count</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                $sql2="select * from cust_order";
                $res4=mysqli_query($conn,$sql2);
                while($rows=mysqli_fetch_assoc($res4))
                {
            ?>
            <tr>
                <td><?php
                 $id= $rows['p_id'];
                 $sql="select p_name , p_type from products where p_id='$id'";
                 $res=mysqli_query($conn,$sql);
                 $row=mysqli_fetch_assoc($res);
                 echo $row['p_name'];
                 ?></td>
                 <td><?php echo $row['p_type'];?></td>
                  <td><?php echo "2"; ?></td>
            </tr>
            <?php
                }
            ?>
            
</table></center>
               </h3>

                  </div>
                  <div class="field">
                     <div class="label">
                        
                     </div>
                   
                  </div>
                  
<br>
                  <div class="field btns">
                     <button class="can">Cancel</button>
                     <button class="next-2 next">Confirm</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Shipping Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Date:
                     </div>
                     <input type="date" id="updatedTime" value="2023-06-02" disabled>
                  </div>
                  <div class="field">
                     <div class="label">
                        Time
                     </div>
                     <input type="text" value="9am to 9pm" disabled>
                  </div>
                  <div class="field btns">
                     <button class="can">Cancel</button>
                     <input type="submit" class="Submit" value="Place Order">
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="script.js"></script>
<script>
let suggestions = [
    // ABC Normal Letters
    "Channel",
    "Google",
    "Google Fonts",
    "Google Plus",
    "Google Drive",
    "Github",
    "CSS HTML JS",
    "TEnLOcRAFT",
    "CodePen Website",
    "YouTube",
    "YouTuber",
    "YouTube Channel",
    "Blogger",
    "Bollywood",
    "Vlogger",
    "Vechiles",
    "Facebook",
    "Freelancer",
    "Facebook Page",
    "Israel Hyom?",
    "YNet",
    "MineCraft",
    "Fortnite",
    "GTA",
    "GTA 2",
    "GTA 3",
    "GTA 4",
    "GTA V",
    "GTA 6",
    "Search Bar With AutoComplete || Eitan &mdash; CodePen",
    "Designer",
    "Developer",
    "Web Designer",
    "Web Developer",
    "Login Form in HTML & CSS",
    "How to learn HTML & CSS",
    "How to learn JavaScript",
    "How to became Freelancer",
    "How to became Web Designer",
    "How to start Gaming Channel",
    "How to start YouTube Channel",
    "What does HTML stands for?",
    "What does CSS stands for?",
    "Python",
    "Udemy",
    // Symbols Codes
    "&--SymbolCode--;",
    "&copy;",
    "&reg;",
    "&euro;",
    "&trade;",
    "&larr;",
    "&uarr;",
    "&rarr;",
    "&darr;",
    "&spades;",
    "&clubs;",
    "&hearts;",
    "&diams;",
    "&Alpha;",
    "&Beta;",
    "&Gamma;",
    "&Delta;",
    "&Epsilon;",
    "&Zeta;",
    "&copysr;",
    "&#8513;",
    "&sect;",
    "&alefsym;",
    "&beth;",
    "&gimel;",
    "&daleth;",
];

// getting all required elements
const searchWrapper = document.querySelector(".srsearch-input");
const inputBox = searchWrapper.querySelector(".in");
const suggBox = searchWrapper.querySelector(".srautocom-box");
const icon = searchWrapper.querySelector(".sricon");
let linkTag = searchWrapper.querySelector(".al");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = "https://www.google.com/search?q=" + userData;
            linkTag.setAttribute("href", webLink);
            console.log(webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()); 
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = '<li>'+ data +'</li>';
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element,event){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = "https://www.google.com/search?q=" + selectData;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>'+ userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}
   </script>

   </body>
</html>
<!-- -->