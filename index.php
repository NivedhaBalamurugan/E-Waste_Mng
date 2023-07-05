<?php  
          include 'config.php';
          $db="dbms";
          $conn=mysqli_connect($server,$user,$pass,$db);
	$_SESSION['tot']=0;
  ?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
    <title>Update Quantity Shopping Cart Example</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/demo.css">
  </head>
  <body>

    
 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
<header id="site-header">
		<div class="container">
			<h1>Shopping cart <span>[</span> <em>Techno Trash</em> <span class="last-span is-open">]</span></h1>
		</div>
	</header>

	<div class="container">

		<section id="cart"> 
			<article class="product" id="product1">
				<header>
					<a class="remove remove">	
							<?php
							 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 0";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
				$id=$row['p_id'];
							$query = " select * from image where p_id='$id'";
							$result = mysqli_query($conn, $query);
							while ($data = mysqli_fetch_assoc($result)) {
							?>
								<img src="./image/<?php echo $data['filename']; ?>">
							<?php
							}
							?>

					<h3>Remove product</h3>
					</a>
				</header>
				<div class="content">
					<h1><?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 0";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['p_name'];?>
	</h1>
<?php
 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 0";
          $res4 = mysqli_query($conn, $sql1);
$row=mysqli_fetch_assoc($res4);
echo $row['p_type'];
echo "<br>".$row['p_brand']." of ".$row['p_years'];
?>				
</div>

				<footer class="content">
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>
				
					<h2 class="full-price">
					<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];?>
							
					</h2>

					<h2 class="price">
					<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];
				$_SESSION['tot']=$_SESSION['tot']+$row['price'];		?>
				
					</h2>
				</footer>
			</article>

			<article class="product" id="product2">
				<header>
					<a class="remove" >
					<?php
							 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
				$id=$row['p_id'];
							$query = " select * from image where p_id='$id'";
							$result = mysqli_query($conn, $query);
					
							while ($data = mysqli_fetch_assoc($result)) {
							?>
								<img src="./image/<?php echo $data['filename']; ?>">
					
							<?php
							}
							?>

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1><?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['p_name'];
				?></h1>
<?php
 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
          $res4 = mysqli_query($conn, $sql1);
$row=mysqli_fetch_assoc($res4);
echo $row['p_type'];
echo "<br>".$row['p_brand']." of ".$row['p_years'];
?>					
					
				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>
					
					<h2 class="full-price">
						<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];?>
				
					</h2>

					<h2 class="price">
						<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 1";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];
				$_SESSION['tot']=$_SESSION['tot']+$row['price'];?>
				
					</h2>
				</footer>
			</article>



			<article class="product" id="product3">
				<header>
					<a class="remove">
					<?php
							 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
				$id=$row['p_id'];
							$query = " select * from image where p_id='$id'";
							$result = mysqli_query($conn, $query);
					
							while ($data = mysqli_fetch_assoc($result)) {
							?>
								<img src="./image/<?php echo $data['filename']; ?>">
					
							<?php
							}
							?>

						<h3>Remove product</h3>
					</a>
				</header>

				<div class="content">

					<h1><?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['p_name'];?></h1>
					<?php
 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
          $res4 = mysqli_query($conn, $sql1);

	$row=mysqli_fetch_assoc($res4);
	echo $row['p_type'];
	echo "<br>".$row['p_brand']." of ".$row['p_years'];
?>

				</div>

				<footer class="content">
					
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>
					
					<h2 class="full-price" >
					<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];?>
								
						</h2>

					<h2 class="price">
					<?php
						 $sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			    echo $row['price'];
				$_SESSION['tot']=$_SESSION['tot']+$row['price'];?>
				
				</h2>
				</footer>
			</article>

		</section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span><?php echo $_SESSION['tot']; ?></span>€</h2>
				<h3 class="tax">Taxes (5%): <span><?php echo $_SESSION['tot']*0.05; ?></span>€</h3>
				<h3 class="shipping">Shipping: <span>5.00</span>€</h3>
			</div>

			<div class="right">
			
				
			<h1 class="total" >Total: <span><?php echo $_SESSION['tot']+$_SESSION['tot']*0.05 + 5; ?></span>€</h1>
			<form action="form.php" method="post"> 
			<input type="number" class="totc" name="amt" style="display:none;">	
				<button class="btn" type="submit">Checkout</button></form>
			</div>

		</div>
	</footer>
   
 </main>
 
   
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt * 100) / 100;
  
  el.parent().children(".full-price").html( eq + "€" );
  
  
  changeTotal();      
}

function fnn()
{
<?php	$sql1 = "SELECT * FROM cart  LIMIT 1 OFFSET 2";
						 $res4 = mysqli_query($conn, $sql1);
			   $row=mysqli_fetch_assoc($res4);
			   $id=$row['p_id'];
			   $sql1="delete from cart where p_id='$id' ";
			   $res=mysqli_query($conn,$sql1);
			   ?>
}

function changeTotal() {
  
  var price = 0;
  
  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html());
  });
  
  price = Math.round(price * 100) / 100;
  var tax = Math.round(price * 0.05 * 100) / 100
  var shipping = parseFloat($(".shipping span").html());
  var fullPrice = Math.round((price + tax + shipping) *100) / 100;
  
  if(price == 0) {
    fullPrice = 0;
  }
  
  $(".subtotal span").html(price);
  $(".tax span").html(tax);
  $(".total span").html(fullPrice);
  $('.totc').val(Math.round(fullPrice));

}

$(document).ready(function(){
  
	$(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
 el.parent().children(".p").val( "0"  );	
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal(); 



        });
      }, 200);
	});
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
   
	$(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
	 
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  
});

</script> 
      
  </body>
</html>