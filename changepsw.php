

<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['name'];
$l=$_SESSION['loginid'];
if($login)
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="text/javascript" src="cardvalid.js"></script>

  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> kochi@mymetro.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="logout.php" class="small mr-3"><span class="icon-unlock-alt"></span>Logout</a>
          
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
              <?php echo "welcome  $type : $usr_name "; ?>
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="imge/kochi8.png" alt="Image" class="img-fluid" style="width: 100px ;height: 70px;">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="userindex.php" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="smartcard.php" class="nav-link text-left">Smart card</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-left">Job vacancies</a>
                </li>
                <li>
                    <a href="" class="nav-link text-left">Change password</a>
                  </li>
                

              </ul>                                                                                                                           
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Apply Smart card</h2>
              <p> </p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>
    <form action="" name="cardform" method="POST" onsubmit="return validateform()">

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                      <div class="col-md-12 form-group">
                            <label for="username">Old Password </label>
                            <input type="text" id="cname" class="form-control form-control-lg" name="opass" autocomplete="off">
                        </div>
                      <div class="col-md-12 form-group">
                            <label for="username">Old Password </label>
                            <input type="text" id="cname" class="form-control form-control-lg" name="opass" autocomplete="off">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Old Password </label>
                            <input type="text" id="cname" class="form-control form-control-lg" name="opass" autocomplete="off">
                        </div>
                        
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Apply" name="submit" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
            

          
        </div>
    </div>

    

    
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="imge/kochi8.png" alt="Image" class="img-fluid" style="width: 30% ; height: 50%"></p>
            <p>To make Kochi a more liveable and pleasant city for residents and visitors alike, where public transportation would be used by all – connecting people and places safely, seamlessly, reliably and comfortably.</p>  
            <p><a href="#"></a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Trval information</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">stations</a></li>
                <li><a href="#">Train Timetable</a></li>
                <li><a href="#">Fares & Rules</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our other service</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Newsletters</a></li>
                  <li><a href="#">privacy policy</a></li>
                  <li><a href="#">Event</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">10 20 123 456</a></li>
                  <li><a href="#">kochi@mymetro.com</a></li>
                  
                  <li><a href="#">8th Floor, Revenue Tower, Park Avenue
                                  Kochi, Kerala - 682011</a></li>
                  
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>Kochi Metro Rail Ltd. All rights reserved. <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Anju Jacob</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>

<?php
  include 'co.php';
  $sq="Select * from login where loginid='$l'";
  $res=mysqli_query($con,$sq);
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $email=$row['emailid'];
  $p=$row['password'];
  if(isset($_POST['submit']))
   {
    $pd=$_POST['opsw'];
    $pass=md5($pd);
    $ps=$_POST['npsw'];
    $pswd=md5($ps);
    //echo "<script>alert('$email')</script>";
    if(!(strcmp($p, $pass)))
    {
        if(mysqli_query($con,"Update tlb_login set password='$pswd' where emailid='$email'"))
        {
          echo "<script>swtalert('1');</script>";
        }
        else
        {
          echo "<script>swtalert('0');</script>";
        }
    }
    else
    {
      echo "<script>swtalert('0');</script>";
    }    

   }
 }
 else
 {
    echo "<script>window.location='signin.php';</script>";
 }
   
?>

  <?php
}
else
  header("location:login.html");
?>