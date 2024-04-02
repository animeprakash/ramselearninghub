<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rams E Learning Hub</title>
  <meta content="Rams E Learning Hub" name="description">
  <meta content="Rams E Learning Hub" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
  label{
    font-size:80%;
  }
</style>
<script>
        
        $(document).ready(function() {
          $("#myForm").submit(function(event) {
            //    
              if (validateForm()) {
                   $("#myForm").submit();
              } else {
                event.preventDefault();
              }
          });
      
          function validateForm() {
              var isValid = true;
              var studentname = $("#studentname").val();
              var contactno = $("#contactno").val();
              var emailid= $("#emailid").val();
              var state= $("#state").val();
              if (studentname === "") {
                  $("#snameError").text("Studentname is required");  
                  $("#studentname").css({"border": "1px solid red"});
                  $("#snameError").css({"color": "red"});
                  isValid = false;
              } else {
                $("#snameError").text("Studentname"); 
                  $("#snameError").css({"color": "green"});
                  $("#studentname").css({"border": "1px solid green"});
              }
              if ( contactno==="") {
                  $("#contactnoError").text("Contact is required");  
                  $("#contactno").css({"border": "1px solid red"});
                  $("#contactnoError").css({"color": "red"});
                  isValid = false;
              } else {
                $("#contactnoError").text("Contact");
                  $("#contactnoError").css({"color": "green"});
                  $("#contactno").css({"border": "1px solid green"});
              }
              if ( emailid==="") {
                  $("#emailError").text("Email is required");  
                  $("#emailid").css({"border": "1px solid red"});
                  $("#emailError").css({"color": "red"});
                  isValid = false;
              } else {
                $("#emailError").text("Email");
                  $("#emailError").css({"color": "green"});
                  $("#emailid").css({"border": "1px solid green"});
              }
              if ( state==="") {
                  $("#stateError").text("State is required");  
                  $("#state").css({"border": "1px solid red"});
                  $("#stateError").css({"color": "red"});
                  isValid = false;
              } else {
                $("#stateError").text("State");  
                  $("#stateError").css({"color": "green"});
                  $("#state").css({"border": "1px solid green"});
              }
              return isValid;
          }
      }); 
      </script>
    
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <br><span>Ram's E Learning Hub</span></h1>
      <h2></h2>
      <div class="container rounded rounded-3" id="forms">
        <form action="thankyou.php" method="post" id="myForm">
            <div class="row my-3 py-3 justify-content-evenly">

                <div class="col-12 col-md-2 col-lg-2 ">                
                    <label for="studentname" id="snameError">Student Name</label>
                    <input type="text" class="form-control" name="studentname" id="studentname" pattern="^[a-zA-Z][.\sa-zA-Z.]{1,50}$">               
                </div>
                <div class="col-12 col-md-2 col-lg-2 ">           
                    <label for="contactno" id="contactnoError">Contact Number</label>
                    <input type="text" class="form-control " name="contactno" id="contactno" pattern="^[0-9]{10}$">          
                </div>
                <div class="col-12 col-md-2 col-lg-2 ">           
                    <label for="emailid" id="emailError">Email</label>
                    <input type="email" class="form-control" name="emailid" id="emailid" >         
                </div>
                <div class="col-12 col-md-2 col-lg-2  ">
                    <label for="state" id="stateError">State</label>
                    <input type="text" class="form-control" name="state" id="state" >   
                </div>
                <div class="col-12 col-md-2 col-lg-2 mt-4">
                    <input type="submit" class="btn bg-primary rounded-pill w-100 p-1 text-white" name="submit" value="SUBMIT" id="submit">
                </div>

            </div>
            </form>
        </div>
      <!-- <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
<!-- ======= Counts Section ======= -->
    <section id="about" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="1450" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students Taught</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p>Years Exp</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class='bx bx-timer'></i>
              <span data-purecounter-start="0" data-purecounter-end="7100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Taught</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
            <i class="bi bi-emoji-smile"></i>   
              <div class="d-flex offset-4"><span data-purecounter-start="0" data-purecounter-end="96" data-purecounter-duration="1" class="purecounter"></span><span>%</span></div>           
              <p>Success Rate</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    
    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>We are offering</h2>
          <h3><span>Courses</span></h3>
        </div>

        <div class="row justify-content-evenly">
          <div class="col-10 col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-book-open'></i></div>
              <h4>Enhanced Learning Program</h4>
              <p>Grade 3 to 12 (Regular School Tuition + Aptitude + NTSE + Olympiad etc).</p>
            </div>
          </div>

          <div class="col-10 col-lg-4 col-md-6  mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Pre-Foundation Program</h4>
              <p>Grade 6 to 8 (Regular School Tuition + Aptitude + NTSE + Olympiad etc).</p>
            </div>
          </div>

          <div class="col-10 col-lg-4 col-md-6  mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-edit-alt'></i></div>
              <h4>Foundation Program</h4>
              <p>Grade 9 & 10 (Regular School Tuition + JEE + NEET + Aptitude + NTSE + Olympiad etc).</p>
            </div>
          </div>

          <div class="col-10 col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-edit'></i></div>
              <h4>JEE Main/NEET(1 Year Program & Crash Courses)</h4>
              <p>Grade 11 (Maths/Biology, Physics, Chemistry + NEET/JEE)</p>
            </div>
          </div>

          <div class="col-10 col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-plus-medical'></i></div>
              <h4>JEE Main/NEET(1 Year Program & Crash Courses)</h4>
              <p>Grade 12 (Maths/Biology, Physics, Chemistry + NEET/JEE)</p>
            </div>
          </div>

          <div class="col-10 col-lg-4 col-md-6  mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-calendar-event'></i></div>
              <h4>Integrated - JEE/NEET</h4><br>
              <p>(11Grade - 2 Years Program that include school regular curriculum + JEE/NEET)</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


      <div class="container" data-aos="fade-up">
         <div class="row">
              <div class="col-12 col-lg-10 text-center">
                  <div class="fs-5 text-primary fw-bold">Our Team </div>
                  <div class="fs-2 text-success fw-bold">Our Expert Mentors </div>
              </div>
              <div class="offset-8 col-4 col-lg-2 offset-lg-0 mt-3">
                <div class='owl-prev btn bg-warning bx bxs-left-arrow-square '></div> 
                <div class='owl-next btn bg-warning bx bxs-right-arrow-square '></div>
              </div>
         </div>
      </div>
    <section id="mentors" class="mentors">
      <div class="container" data-aos="fade-up">
            <div class="row   ">
            <div class="owl-carousel">
              <center>
                <div class="col-12 col-md-3 col-lg-4  card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\biology.webp" alt="mentor-1" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Ambati Sravani </div>
                        <div class="fs-5 text-uppercase mb-3 text-dark fw-bold">Biology</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col "> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
                </center><center>
                <div class="col-12 col-md-3 col-lg-4  card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\physics.webp" alt="mentor-2" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Nishant Soni </div>
                        <div class="fs-5 text-uppercase mb-3  text-dark fw-bold">Physics</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
                </center><center>
                <div class="col-12 col-md-3 col-lg-4  card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\chemistry.webp" alt="mentor-3" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Manjunath A Y</div>
                        <div class="fs-5 text-uppercase mb-3  text-dark fw-bold">Chemistry</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
                </center><center>
                <div class="col-12 col-md-3 col-lg-4  card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\maths-2.webp" alt="mentor-4" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Swapnil Sanadya</div>
                        <div class="fs-5 text-uppercase mb-3  text-dark fw-bold">Mathematics</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
                </center>
                <center>
                <div class="col-12 col-md-3 col-lg-4  card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\physics.webp" alt="mentor-5" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Thangaraj S</div>
                        <div class="fs-5 text-uppercase mb-3  text-dark fw-bold">Physics</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
                </center>
                <center>
                <div class="col-12 col-md-3 col-lg-4 card">
                  <div class="outline-img">
                      <img src="assets\img\mentors\maths.webp" alt="mentor-6" class="mentors-img">
                  </div>
                   <div class="mentors-details text-center">
                        <div class="fs-5 fw-bold mb-3 text-success">Ragav Adepu</div>
                        <div class="fs-5 text-uppercase mb-3  text-dark fw-bold">Mathematics</div>
                   </div>
                   <div class="container ">
                      <div class="links">
                        <div class="social-links row justify-content-center">
                          <div class="col"></div>
                          <div class="col"> <a href="#" class="twitter"><i class="bi bi-twitter"></i></a></div>
                          <div class="col"> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a></div>
                          <div class="col"> <a href="#" class="instagram"><i class="bi bi-instagram"></i></a></div>
                          <div class="col">  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a></div>
                          <div class="col"></div>
                        </div>
                      </div>                    
                    </div>
                </div>
              </center>
            </div>
            </div>
      </div>
    </section>
    
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper text-center">

            <div class="swiper-slide ">
              <div class="testimonial-item">
                <img src="assets\img\testimonials\lokshitha.webp" class="testimonial-img" alt="testi-1">
                <h3 class="">LOKSHITHA</h3>
                <h4  class="">Grade 12, TAMIL NADU</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            I am happy that Lokshitha's experience at I2Global has been
                                            exceptional. The individualized attention and dedicated teachers have
                                            contributed to their remarkable development. Her Academic progress, critical
                                            thinking skills, and self-confidence have shown significant improvement. We
                                            are proud to witness their growth and look forward to their continued
                                            success.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\testimonials\rhea.webp" class="testimonial-img" alt="testi-2">
                <h3  class="">RHEA FERNANDO</h3>
                <h4  class="">Grade 11, RAJASTHAN</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            I cannot express enough gratitude to the team at I2Global for the
                                            exceptional JEE/NEET and academic support they have provided to my child.I
                                            am impressed by the personalized attention given to each student, which has
                                            greatly boosted their confidence and improved their performance. I highly
                                            recommend I2Global to any parent looking for top-notch coaching and academic
                                            support for their child's JEE/NEET preparation.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\testimonials\saanvi.webp" class="testimonial-img" alt="testi-3">
                <h3  class="">SAANVI GUGGILAM</h3>
                <h4  class="">Grade 10, KARNATAKA</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Our experience with I2Global for JEE/NEET coaching and academic support is fantastic. The dedicated faculty members have gone above and
                                            beyond to ensure that my child receives the best education and guidance. The
                                            comprehensive study resources, regular assessments, and personalized
                                            doubt-solving sessions have tremendously helped my child in their
                                            preparation. Thanks to I2Global, my child is now well-prepared and confident
                                            to face the Board exams &jee/neet.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\testimonials\sunrit.webp" class="testimonial-img" alt="TESTI-4">
                <h3  class="">SUNRIT DEY</h3>
                <h4  class="">Grade 12,KOLKATA</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            I2Global has been a game-changer for my child's JEE/NEET preparation. The
                                            expert guidance and comprehensive study materials have made a significant
                                            difference in their understanding and performance. The faculty members are
                                            always available to clarify doubts and provide additional support when
                                            needed.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
 
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-warning"><i class="bi bi-arrow-up-short"></i></a>

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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      center: true,
      margin:0,
      nav:false,
      autoplay:true,
      autoplayTimeout:2000,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
    });
    $('.owl-prev').click(function() {
      $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Next button click handler
    $('.owl-next').click(function() {
      $('.owl-carousel').trigger('next.owl.carousel');
    });


  });
</script>
</body>

</html>