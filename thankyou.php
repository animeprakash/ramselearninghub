<!DOCTYPE html>
<html lang="en">
  <?php
  ini_set('display_errors', 0); 
  include("database.php");
  if(isset($_POST["submit"])) {

      $studentname=$_POST['studentname'];
      $contactno=$_POST["contactno"];
      $emailid=$_POST["emailid"];
      $state=$_POST["state"];

      $query="create table if not exists studentdetails (studentid int not null auto_increment primary key,studentname varchar(100),contactno long,emailid varchar(100),state varchar(100),studenton datetime not null default now())";
      mysqli_query($con,$query);

      $selquery="insert into studentdetails(studentname,contactno,emailid,state)values('".$studentname."','".$contactno."','".$emailid."','".$state."') ";
      $res=mysqli_query($con,$selquery);
      
      if($res==TRUE)
      {
          // $url="https://wa.me/".$contactno."/?text=Thanks%20for%20booking";
          header("Location:thankyou.php");
      }
      else{
          echo "There is an Error";
      }
  }

?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rams E Learning Hub</title>
  <meta content="Rams E Learning Hub" name="description">
  <meta content="Rams E Learning Hub" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:vamshiganji111@gmail.com" class="text-decoration-none" style="font-size:80%;">vamshiganji111@gmail.com</a></i>
        <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:" class="text-decoration-none"><span></span></a></i> -->
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> -->
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">Ram<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets\img\ramlogo.jpg" alt="logo"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#mentors">Mentors</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="index.php" class="logo"><img src="assets\img\i2global_logo.jpg" alt="logo"></a>
    </div>
  </header><!-- End Header -->
  
  <main id="main" data-aos="fade-up">


    <section class="inner-page">
      <div class="container">
         <div class="col-12 col-md-6 offset-md-3 ">
              <img src="assets\img\thanks.jpg" alt="img" width="100%" height="auto">
         </div>
      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">   

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3> <a href="index.php" class="logo"><img src="assets\img\ramlogo.jpg" alt="logo"></a></h3>
        <p>              
          <strong>Email:</strong><br><a href="mailto:vamshiganji111@gmail.com" class="text-decoration-none text-white">vamshiganji111@gmail.com</a><br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
       
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 footer-contact">
        <h3> <a href="index.php" class="logo"><img src="assets\img\i2global_logo.jpg" alt="logo"></a></h3>
        <p>              
          <!-- <strong>Email:</strong><br><a href="mailto:vamshiganji111@gmail.com" class="text-decoration-none text-white">vamshiganji111@gmail.com</a><br> -->
        </p>
      </div>
    </div>
  </div>
</div>
</footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top bg-warning d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>