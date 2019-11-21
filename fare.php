


<?php

 include 'co.php';
  $q="select * from fare";
 $db=mysqli_query($con,$q);
 $q2="select * from fare";
 $db2=mysqli_query($con,$q2);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

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
            <a href="cuser/login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="cuser/register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

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
                <li >
                  <a href="index.html" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="aboutus.html" class="nav-link text-left">About Us</a>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link text-left">Travel Information</a>
                  <ul class="dropdown">
                    <li><a href="viewstation.php">Stations</a></li>
                    <li><a href="viewtimetable.php">Train Timetable</a></li>
                    <li><a href="fare.php">Fares & Rules</a></li>
                  </ul>
                </li>
                <li>
                  <a href="cuser/login.html" class="nav-link text-left">Smart card</a>
                </li>
                <li>
                  <a href="cuser/login.html"class="nav-link text-left">Job vacancies</a>
                </li>
                <li>
                    <a href="contactt.html" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
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


</head>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Fare Details</h2>
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
                   <form action="" method="POST">
                    <div class="row">
                     
                        <div class="col-md-6">
                            
                        <label for="">Starting Station</label>
                      
                        <select name="ss" id="" class="form-control form-control-lg">
                          <option value="" >...Select...</option>
          <?php
          while($fetch=mysqli_fetch_array($db))
          {
            ?>
            <option value="<?php echo $fetch['sname']?>"><?php echo $fetch['sname']?>  <?php
              }
            ?>
          
                        </select>
                      
                        </div>
                        <div class="col-md-6">
                            
                        <label for="">Destination Station</label>
                      
                        <select name="ds" id="" class="form-control form-control-lg">
                          <option value="" >...Select...</option>
          <?php
          while($fetch=mysqli_fetch_array($db2))
          {
            ?>
            <option value="<?php echo $fetch['dname']?>"><?php echo $fetch['dname']?>  <?php
              }
            ?>
          
                        </select>

                      
                        </div>
                        </div>
                     
                  <br>
                        <div class="col-12">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Check Fare" class="btn btn-primary btn-lg px-5">
                </div>
                 </form>
                        <?php

                        include 'co.php';

                            if(isset($_POST['submit']))
                              {
                                 $a=$_POST['ss'];
                                 $b=$_POST['ds'];

                                 $se="select fare from fare where sname='$a' && dname='$b'";
                                $re=mysqli_query($con,$se);
                                $row=mysqli_fetch_array($re);
                              

                                ?>

                                <div class="col-md-6" style="margin-left: auto; margin-right: auto;">
                            <label for="pword">Fare</label>
                            <input type="text" id="pwd" class="form-control form-control-lg" name="pincode" value="<?php echo $row['fare']; ?>"  >
                        </div>
                        
                        <?php
}



                               
                              

                        ?>


                        
                      
                
            

          
        </div>
    </div><br>
                       

                        <h4 style="color: black; text-decoration: underline;">Rules and Regulations</h4>
                        <p style="color: black;">1.All Fares are in Indian Rupees.</p>
<p style="color: black;">2.The ticket is valid for the exit at the destination station automatic gate up to 90 minutes after entry through the automatic gate at origin station.</p>
<p style="color: black;">3.For more details, please refer http://kochimetro.org or public notice at Kochi Metro Fares.</p>

                </div>

                        
                   
    <br>


    

    
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

