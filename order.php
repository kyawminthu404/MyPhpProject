<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{
        $prodno=$_POST['prodno'];
        $price=$_POST['price'];
        $name=$_POST['nam'];
        $phone=$_POST['pho'];
        $add=$_POST['add'];
        $ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BingoBarkery - Menu Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2 style="font-family: verdana;">Bingo <em style="font-family: verdana;">Bakery</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="font-family: verdana;">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.php" style="font-family: verdana;">Menus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" style="font-family: verdana;">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" style="font-family: verdana;">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 style="font-family: verdana;"><b>new arrivals</b></h4>
              <h2 style="font-family: verdana;"><b>BingoBakery Menus</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
      <h3 style="margin: 35px;">Order form</h3>
        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>
            <form  method="post">
				
                <label>Product No </label>
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>"  style="display: block; margin: 10px; background-color:#f33f3f; color:white; border-radius: 0px 10px;"/>
                <label>price  </label>
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" style="display: block; margin: 10px; background-color:#f33f3f; color:white; border-radius: 0px 10px;"/>
				 <label>Name </label>
                <input type="text" name="nam" id="nam" style="display: block; margin: 10px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />
				 <label>Phone </label>
                <input type="text" name="pho" id="php" style="display: block; margin: 10px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />
				 <label>Address</label>
                <textarea id="add" name="add" rows="0" cols="0" class="required" style="display: block; margin: 10px; background-color:#f33f3f; color:white; border-radius: 0px 10px;"></textarea>
				 
                <input type="submit" name="ord" id="ord" value="Send" style="margin: 20px;" />
				 <input type="submit" name="Cancel" value="Cancel" style="margin: 20px;" />
				
            </form>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
