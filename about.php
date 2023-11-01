<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BingoBarkey - Register Page</title>

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
              <li class="nav-item active">
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4 style="font-family: verdana;"><b>Welcome to</b></h4>
              <h2 style="font-family: verdana;"><b>BingoBarkey</b></h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-family: verdana;">Welcome</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4 style="font-family: verdana;">Registrater Form</h4>
              <?php
session_start();
if(isset($_POST['sub']))
{
    $email = $_POST['t2'];
    $password = $_POST['t3'];
    if(file_exists("user"."/".$email))
    {
        echo "<font color='red'>Register already!</font>";
    }
    else
    {
        ?>
        <?php 
        error_reporting(1);
        include("connection.php");
        $name=$_POST['t1'];
        $email=$_POST['t2'];
        $password=$_POST['t3'];
        $phone=$_POST['t4'];
        $city=$_POST['t5'];
        $country=$_POST['t6'];
        $a = "insert into registrater(name,email,password,phone,city,country) values('$name','$email','$password','$phone','$city','$country')";
        $result = mysql_query($a) or die(mysql_error());
        if($result)
        {
            mkdir("user"."/".$email);
            $arr = fopen("user"."/".$email."/".$password,"w");
            $data = "ur email is".$email."   "."ur password is".$password;
            fwrite($arr,$data);
            header("location:reg_success.php?name=$name & email=$email");
        }else 
        {
             echo  "<font color='red'>user already exists</font>";
        }
    }
}
?>

<form  method="post">
                <label style="font-family: verdana;">Name </label>
                <input type="text" name="t1" id="t1" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px; " />

                <label style="font-family: verdana;">Email</label>
                <input type="email" name="t2" id="t2" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />

				        <label style="font-family: verdana;">Password</label>
                <input type="password" name="t3" id="t3" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />

				        <label style="font-family: verdana;">Phone </label>
                <input type="text" name="t4" id="t4" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />

				        <label style="font-family: verdana;">City </label>
                <input type="text" name="t5" id="t5" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />

				        <label style="font-family: verdana;">Country </label>
                <input type="text" name="t6" id="t6" style="display: block; padding:5px; margin-bottom:6px; background-color:#f33f3f; color:white; border-radius: 0px 10px;" />

                <input type="submit" name="sub" id="sub" value="Register" style="padding:5px 10px; border:1px solid black;"/>

				        <input type="reset" name="Cancel" value="Cancel" style="padding:5px 10px; border:1px solid black;" />
                 
				        
            </form>
            
        
        </div>  

    
    



    

    
    <footer>
      <div class="container">
        <div class="row">
          <div>
            <div class = "aa">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            
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
