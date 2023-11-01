<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BingoBarkey - Contact Page</title>

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
          <a class="navbar-brand" href="index.html"><h2 style="font-family: verdana;">Bingo <em style="font-family: verdana;">Barkey</em></h2></a>
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
              <li class="nav-item">
                <a class="nav-link" href="products.php" style="font-family: verdana;">Menus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" style="font-family: verdana;">Register</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php" style="font-family: verdana;">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><b>Contact us</b></h4>
              <h2><b>Welcome to Contact Page</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$phone=$_POST['t3'];
$message=$_POST['t4'];
if(mysql_query("insert into contenttable(name,email,phone,message) values('$name','$email','$phone','$message')"))
{$er="<font color='blue' size='+1'> Message sent successfully</font>"; }
}

?>
<center>
<h2 style="font-family: verdana; padding:10px; margin: 10px;">Contact Information</h2>

            <div id="contact_form" class="col_2">
                
                <form method="post" name="contact" action="#">
                    <div class="col_4">
                        <label for="phone" style="font-family: verdana;">Name</label>
                        <input type="text" id="t1" name="t1" class="required"  style="display: block; padding:5px; background-color:#f33f3f; color:white; border-radius: 0px 10px;"/>
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="email" style="font-family: verdana;">Email</label>
                        <input type="email" id="t2" name="t2" class="validate-email required" style="display: block; padding:5px; background-color:#f33f3f; color:white;border-radius: 0px 10px;" />
                    </div>
                    <div class="clear h10"></div>
                     <div class="col_4 no_margin_right">
                        <label for="phone" style="font-family: verdana;">Phone</label>
                        <input type="text" id="t3" name="t3" class="required" style="display: block; padding:5px; background-color:#f33f3f; color:white;border-radius: 0px 10px;"/>
                    </div>
                    <div class="clear"></div>
                    <label for="text" style="font-family: verdana;">Message</label> <textarea id="t4" name="t4" rows="0" cols="0" class="required" style="display: block; paddig:5px; background-color:#f33f3f; color:white;border-radius: 0px 10px; width: 250px;"></textarea>
                     <input type="submit" name="sub"  id="sub" value="Send" style="margin: 30px;" />
                </form>
				<h2><?php echo $er;?></h2>
</center>
            </div> 
    
          

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>DEVELOPED BY  &copy; BINGO BARKEY Co., Ltd.
            
            
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
