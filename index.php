<?php
session_start();

include("connection.php");
//include("function.php");

if(isset($_SESSION["stc"]))
    {
        mysqli_select_db($conn, "josefem");
        $state_code = $_SESSION["stc"];
        $query = "select * from users where statecode = '$state_code' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
          
        }
    }
//$user_data = check_login($conn);
$idnum = "SELECT * FROM users";
    $result = mysqli_query($conn, $idnum);
    if($result && mysqli_num_rows($result) > 0)
    {
        $row_data = mysqli_num_rows($result);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>nccfkwara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<!--<input type="hidden" name= "id" value="<?php echo $user_data['id'] ?>"> -->
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo" style= "display: flex;">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <h1 class="text-light"><a href="index.html"><span>NCCFKWARA</span></a></h1>
        <!---->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero" onclick="Home()">Home</a></li>
          <li><a href="#main1" onclick="About()">About</a></li>
          <li><a href="#main4" onclick="Programs()">Programs</a></li>
          <li><a href="#main2" onclick="Gallery()">Gallery</a></li>
          <li><a href="#main0" onclick="Executives()">Executives</a></li>
          <li><a href="#main0" onclick="Profile()">Profile</a></li>
          <li class="dropdown" ><a href="#"><span>Options</span> <i class="bi bi-chevron-down"></i></a>
          <?php 
           if (isset($user_data['id'])) {
            echo
            '<ul>
              <li><a href="update.php">Edit Profile</a></li>
              <li><a href="profilepics.php" >Change profile picture</a></li>
              <li><a href="password.php">Change Password</a></li>
              <li><a href="logout.php">logout</a></li>
              
            </ul>'; 
             }else {
            echo 
            '<ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>  
            </ul>'
            ?>
            <?php
          }
           ?>
          </li>
          <li><a href="#main5" onclick="Contact()">Contact Us</a></li>
        </ul>
        <i id="mobile-nav-toggle" class=" bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section style="top: -50px;" id="hero" class=" justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to Bethel</h2>
          <p class="animate__animated animate__fadeInUp">The Nigerian Christian Corper's Fellowship, Kwara State. Land of harmony, a place where God dwell.</p>
          <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
          
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Our Vision</h2>
          <p class="animate__animated animate__fadeInUp">To ensure that Corp members encounter Jesus Christ and are effectively equipped to preach the gospel and disciple men everywhere in Nigeria.</p>
           <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
          <p class="animate__animated animate__fadeInUp">The core vision of NCCF is Rural Rugged Evangelism.</p>
           <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main0">
    
<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs" style= " background-color : white; text-align: center">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Face Of The Week</h2>
      
    </div>

  </div>
</section><!-- End Our Portfolio Section -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="contaviner">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper-container">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <?php
             
             $id = 1;

             
             if (isset($_GET['Preveous'])) {
               $prev = $_GET['Preveous'];
               $id--;
              $id = $prev;
                if ($prev <= 0) {
                  $id = 1;
                 
                }
             }
             if (isset($_GET['Next'])) {
              $next = $_GET['Next'];
               $id++;
               $id = $next;
               
               if ($next > $row_data ) {
                 $id = $row_data;
                }
              }
              $conn = mysqli_connect("localhost", "root", "");
              mysqli_select_db($conn, "josefem");
             $qry = "SELECT * FROM users WHERE id = $id ";
             $result = mysqli_query($conn, $qry);
              $totalrow = mysqli_num_rows($result);
             
             while ($fotw = mysqli_fetch_assoc($result)){
               ?>
               <?php 
               echo '<img src="data:image;base64,'.$fotw['picture'].' " class="bx bxl-dribbble" style="width: 100%;" id="facimg" >'; 
            ?>

            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Profile</h3>
          <ul>
          <li><strong>Name</strong>: <?php echo $fotw['fullname']; ?></li>
              <li><strong>State Of Origin</strong>: <?php echo $fotw['state']; ?></li>
              <li><strong>Post</strong>:  <?php echo $fotw['post']; ?></li>
              <li><strong>Place Of Primary Assignment</strong>:  <?php echo $fotw['ppa']; ?></li>
              <li><strong>Institution</strong>:  <?php echo $fotw['institution']; ?></li>
              <li><strong>Course Of Study</strong>:  <?php echo $fotw['course']; ?></li>
              <li><strong>Batch</strong>:  <?php echo $fotw['batch']; ?></li>
              <li><strong>year</strong>:  <?php echo $fotw['year']; ?></li>
              <li><strong>Month</strong>:  <?php echo $fotw['month']; ?></li>
              <li><strong>Status</strong>:  <?php echo $fotw['status']; ?></li>
              <li><strong>Discription</strong>:  <?php echo $fotw['discription']; ?></li>
              <li><strong>Discription</strong>:  <?php echo $id; ?></li>
          </ul>
        </div>
        
      </div>

    </div>
    <?php
  }
  ?>
  </div>
  <br>
</section><!-- End Portfolio Details Section -->
<div style="text-align: center; position: relative;">
<form action="index.php" method="get">
  <label id="prevlabel" for="prev">Preveous</label>
<input type="submit" style="display: none;" id="prev" name="Preveous" value="<?php echo $id -1; ?>">
<label id="nextlabel" for="next">Next</label>
<input type="submit" style="display: none;" id="next" name="Next" value="<?php echo $id +1 ?>">
</form>
 
</div>



<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="#main4"> Our Programs </a></h4>
            <p class="description">  <strong>Sunday</strong><br> Glorious Service : 3:00pm - 5:00pm </p>
            <p class="description"><strong>Tuesday</strong><br> Bible Study : 5:00pm - 7:30pm</p>
            <p class="description"><strong>Thusday</strong> <br>Prayer Meeting : 5:00pm - 7:30pm</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="#main4">Other special Programs</a></h4>
            <p class="description"><strong>Wednessday</strong><br> Brothers & Sisters Forum : 6:00pm - 6:30pm</p>
              <p class="description"><strong>Wednessday</strong> <br>Children Bible Club & T.B.C : 5:00pm - 6:00pm</p>
              <p class="description"><strong>Friday</strong> <br>Variety Night : 8:30pm - 9:00pm</p>
                
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Welcome To Bethel</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/blog/prayer.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Thusday Prayer Meeting </h3>
            <p class="fst-italic">
              For the word of God is quick, and powerful, and sharper than any twoedged sword, 
              piercing even to the dividing asunder of soul and spirit, and of the joints and marrow, 
              and is a discerner of the thoughts and intents of the heart. 
              It yet another time to come together to listen and share the WORD of God. <br>
              Join us by 5pm today <br>
              Connect via mixlr <br>
              <a href="Https://Mixlr.Com/nccfkwara">Https://Mixlr.Com/nccfkwara</a> <br>
              Make it a date with God.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/blog/camp.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Camp Project</h3>
            <p>
              Our love for God is what pushes us to do the unthinkable, all to make sure His purpose is 
              always in motion. 
              Until WE ALL attain oneness in the faith and in the comprehension of the [full and accurate] 
              knowledge of the Son of God, that [we might arrive] at really mature manhood (the completeness 
              of personality which is nothing less than the standard height of Christ's own perfection), 
              the measure of the stature of the fullness of the Christ and the completeness found in Him.
              This mandate must continue to be our priority. Put out your love for Him in action by supporting
              the furtherance of his PURPOSE. Support this ongoing project, contribute your quota. 
              You have been saved, support this mission of ALL, so that WE ALL can be partakers of this 
              Heavenly Blessings.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/blog/sunday.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Sunday Service</h3>
            <p>Sunday service was Graced with the presence of many G's<br>
              THE MYSTERY BEHIND FAITH <br>
              Romans 4 : 11, Romans 1 : 17 <br>
              NUGGETS 
            </p>
            <ul>
              <li><i class="bi bi-check"></i> what makes you righteous is not the fulfillment of law but the living by faith</li>
              <li><i class="bi bi-check"></i> you cannot live a righteous life until you are made righteous and we become righteous by faith</li>
              <li><i class="bi bi-check"></i> we must return to the way of taking the word of God the way it is. Take the Word Ford it integrity.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/blog/bible.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Bible Sturdy</h3>
            <p class="fst-italic">
              Topic: Beholding His Glory <br>
              Text:<?php echo $row_data; ?> <br>
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
 
  <main id="main1">

    <!-- ======= About Us Section ======= -->
    <section  class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3> History of Nigeria Christian Corpers’ Fellowship (NCCF).</h3>
            <p class="fst-italic">
              In the early days of 1930’s there lived a British missionary, specifically a Scottish by 
              name PA. S. G ELTON who resided in Ilesa, Osun State (i.e. southwestern part of Nigeria).
               He gave the prophecy that a time will come when the Federal Government of Nigeria will pay 
               her youths to preach the gospel of our Lord Jesus Christ to the nooks and crannies of the
                nation. This prophecy tarried for some time and look like it will not come to pass until
                 between 1967 and 1970, when (Nigeria was hit with civil war) popularly known as Biafra war.
                However in 1973, during the regime of General Yakubu Gowon, in a bid to build one united 
                Nigeria he established a scheme known as the NYSC (National Youth Service Corp), this scheme 
                demands that young Nigerian graduates be posted to states other than their state of origin to 
                serve their fatherland in other to foster unity.
            </p>
            <!--<ul>
              <li><i class="bi bi-check2-circle"></i> NCCF family house is a home away from home.</li>
              <li><i class="bi bi-check2-circle"></i>NCCF provide accommodation to Corpers who want to stay with them.</li>
              <li><i class="bi bi-check2-circle"></i>NCCF provide accommodation to Non-Corpers who need urgent accommodation.</li>
              <li><i class="bi bi-check2-circle"></i> NCCF is present in every State in Nigeria, and each State has a zone and Subzone.</li>
            </ul>-->
            <p>
              During the orientation camp program, Christian graduates met and fellowship with one another. They then went back to their 
              various states and shared their experience of which to their surprise happens to be the same.
              Just like Campfire night in Orientation camp, in NCCF, you will participate in rural rugged
               evangelism. This is the very reason why NCCF exist. The whole of Jesus Corpers in a particular 
               State meets up in a particular village or town to share the Gospel as well as to give out free 
               medical checkup and relieve materials to the community. This exercise lasts for 3 days, and 
               without NCCF, NYSC has little meaning.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2> NCCF: What They Stand For</h2>
          <p>
            NCCF stands for Nigeria Christian Corpers’ Fellowship and it is an organization or an umbrella 
            that houses all Christian corp currently on service to the nation across the federation. 
            It operates as an independent body and is not affiliated to or sponsored by anybody within or 
            outside Nigeria.
            <br>
            NCCF has always remained an inter-denominational, non-denominational and non ethical fellowship.
            
            <br>
            During the orientation camp program, Christian graduates met and fellowshipped with one another. 
            When they went back to their various states,they shared their experience which to their surprise 
            happens to be the same.
            <br>
            In 1983, NCCF came into existence. In NCCF we call ourselves “Jesus Corpers” and the vision of the 
            fellowship is “To ensure that Corps members encounter Jesus Christ and are effectively equipped to 
            preach the gospel and disciple men everywhere in Nigeria”.
            <br>
            NCCF exists in the 36 states of the country including the FCT and has her national headquarters in 
            Jos, plateau state.
          
            </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Evangelism <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Children Evangelism <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Rural Rugged <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">State Conference <i class="val">100%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->
 <!-- ======= Facts Section ======= -->
 <section class="facts section-bg" data-aos="fade-up">
  <div class="container">

    <div class="row counters">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></span>
        <p>Family House</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
        <p>Zones</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
        <p>Sub Zones</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
        <p>Patrons</p>
      </div>

    </div>

  </div>
</section><!-- End Facts Section -->
    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Tetstimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-carousel swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->
  </main >


<div id="main3">

</div>

<main id="main2">
 <!-- ======= Our Gallery Section ======= -->
 <section class="breadcrumbs">
   <div class="container">
     
    <div class="d-flex justify-content-between align-items-center">
      <h2>Gallery</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Gallery</li>
      </ol>
    </div>

  </div>
</section><!-- End Our Portfolio Section -->
<!-- ======= Gallery Section ======= -->
<section class="portfolio">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" >All</li>
          <li data-filter=".filter-app">Executives</li>
          <li data-filter=".filter-card">Officials</li>
          <li data-filter=".filter-web" class="filter-active">Members</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <?php 
             $conn = mysqli_connect("localhost", "root", "");
             mysqli_select_db($conn, "josefem"); 
             $qry = "SELECT * FROM users";
             $result = mysqli_query($conn, $qry);
             
             while ($row = mysqli_fetch_array($result)){
               ?>
      <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
        <div class="portfolio-item">
               <div id="divrow";>
                   <div><?php echo '<img src="data:image;base64,'.$row['picture'].' " class="img-fluid" style="width: 100%;" id="facimg" >'; ?></div>
              </div>
          <div class="portfolio-info">
            <h3><?php echo $row['fullname'] ; ?></h3>
            <!--<div>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>-->
          </div>
        </div>
      </div>
                <?php
             }
             //mysqli_close($conn);
               ?>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
        <div class="portfolio-item">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3>Card 2</h3>
            <div>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
        <div class="portfolio-item">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h3>Web 2</h3>
            <div>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->


<main id="main4">

  <!-- ======= Our Services Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Our Programs</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Our Programs</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="#main4"> Our Programs </a></h4>
          <p class="description">Sunday<br> Glorious Service : <strong>3:00pm - 5:00pm</strong></p>
          <p class="description">Tuesday<br> Bible Study : <strong>5:00pm - 7:30pm</strong></p>
          <p class="description">Thusday <br>Prayer Meeting : <strong>5:00pm - 7:30pm</strong></p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="#main4">Other special Programs</a></h4>
          <p class="description">Wednessday <br> Brothers & Sisters Forum : <strong>6:00pm - 6:30pm</strong></p>
            <p class="description">Wednessday <br>Children Bible Club & T.B.C : <strong>5:00pm - 6:00pm</strong></p>
            <p class="description">Friday <br>Variety Night : <strong>8:30pm - 9:00pm</strong></p>
              
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-6   align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Devotions</a></h4>
            <p class="description">Morning<br>Morning Devotion : <strong>5:30pm - 6:00pm</strong></p>
            <p class="description">Evening<br> Bible Reading : <strong>8:30pm - 9:00pm</strong></p>
            
            
          </div>
        </div>
        
        <div class="col-md-6   align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4 class="title"><a href="">Power Service</a></h4>
            <p class="description">Saturday<br> Praise Night : <strong>8:30pm - 9:00pm</strong></p>
            <p class="description">Every Last Saturday <br>Drama Night : <strong>8:00pm - 9:00pm</strong></p>
            
          </div>
        </div>

        <div class="col-md-6  align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-green">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4 class="title"><a href="">One Family</a></h4>
            <p class="description">Sunday<br> Family Meeting : <strong>8:00pm - 8:00pm</strong></p>
            <p class="description">Sunday<br> Vital Issue Special(VIS) : <strong>8:00pm - 8:00pm</strong></p>
          </div>
        </div>

        <div class="col-md-6  align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-blue">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href=""> Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Service Details Section ======= -->
  <section class="service-details">
    <div class="container">

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/service-details-1.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Our Mission</a></h5>
              <p class="card-text">The core vision of NCCF is Rural Rugged Evangelism.</p>
               <!--<div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>-->
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/service-details-2.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Our Plan</a></h5>
              <p class="card-text">To build a new state secretariat and family house so as to accommodate 
                as many Jesus corp member and to ensure that every zone has its own family house</p>
               <!--<div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>-->
            </div>
          </div>

        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/service-details-3.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Our Vision</a></h5>
              <p class="card-text">To ensure that Corp members encounter Jesus Christ and are effectively
                equipped to preach the gospel and disciple men everywhere in Nigeria.</p>
               <!--<div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>-->
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/service-details-4.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Our Care</a></h5>
              <p class="card-text">To see every Jesus corp member in every local Government, doing fine 
                morally, finacially and spiritually, and also creating a follow up system making sure they 
                maintain a good and healthy Christian life  </p>
              <!--<div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>-->
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Service Details Section -->

  <!-- ======= Pricing Section ======= -->
  <section class="pricing section-bg" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>Pricing</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-4 box">
          <h3>Free</h3>
          <h4>$0<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <a href="#" class="get-started-btn">Get Started</a>
        </div>

        <div class="col-lg-4 box featured">
          <h3>Business</h3>
          <h4>$29<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="get-started-btn">Get Started</a>
        </div>

        <div class="col-lg-4 box">
          <h3>Developer</h3>
          <h4>$49<span>per month</span></h4>
          <ul>
            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
          </ul>
          <a href="#" class="get-started-btn">Get Started</a>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

</main><!-- End #main -->


<main id="main5">

  <!-- ======= Contact Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p style="text-transform: capitalize;">KWARA STATE SECRETARIAT LAGELU 
                  AREA BEHIND MINISTRY OF AGRICULTURE, 
                  ALONG OLD JEBBA ROAD, ILORIN KWARA 
                  STATEJEBBA ROAD, ILORIN, KWARA STATE.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>nccfkwara@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+234-816-845-8927 <br>+234-803-561-7288</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Map Section ======= -->
  <section class="map mt-2">
    <div class="container-fluid p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </section><!-- End Map Section -->
</main><!-- End #main -->
<main id="main6">
 <!-- ======= Our Team Section ======= -->
 <section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Executives</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Nccfkwara Executives</li>
      </ol>
    </div>
<!-- ======= Team Section ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
               <div class="container">
               <div class="row">
        <?php 
             $conn = mysqli_connect("localhost", "root", "");
             mysqli_select_db($conn, "josefem"); 
             $qry = "SELECT * FROM excos";
             $result = mysqli_query($conn, $qry);
             
             while ($excodata = mysqli_fetch_array($result)){
               ?>
               
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <div class="member-img">
          <div><?php echo '<img src="data:image;base64,'.$excodata['picture'].' " class="img-fluid" style="width: 100%;" id="facimg" >'; ?></div>
              
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4><?php echo $excodata['fullname']; ?></h4>
            <span><?php echo $excodata['post']; ?></span>
            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea non est corporis in.</p>
          </div>
        </div>
        </div>
        
        <?php
             }
             //mysqli_close($conn);
             ?>

  </div>
</div>
</div>
</section><!-- End Our Team Section -->

</main><!-- End #main -->

<main id="main7">

  <!-- ======= Blog Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Blog</li>
        </ol>
      </div>

    </div>
  </section><!-- End Blog Section -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<main id="main8">

  <!-- ======= Our Portfolio Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Profile Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="#main3">Profile</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Portfolio Section -->

  <!-- ======= Portfolio Details Section ======= -->
 
  <section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper-container">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
             <?php  
             if (isset($user_data['id'])) {
               
               echo '<img src="data:image;base64,'.$user_data['picture'].' " class="bx bxl-dribbble" style="width: 100%;"  id="facimg">';
             }else {
               echo '<div>you do not have a profile yet, do well to <strong>login</strong> or <strong>register</strong></div>'
               ?>
               <?php
             }
              ?>
            </div>

          </div>
        </div>
      </div>
       <?php  
       if (isset($user_data['id'])) {
        echo 
        '<div class="col-lg-4">
          <div class="portfolio-info">
          <h3>My Profile</h3>
            <ul>
                <li><strong>Name</strong>: '.$user_data['fullname'].' </li>
                <li><strong>State Of Origin</strong>: '.$user_data['state'].' </li>
                <li><strong>Post</strong>: '.$user_data['post'].' </li>
                <li><strong>Place Of Primary Assignment</strong>: '.$user_data['ppa'].'</li>
                <li><strong>Institution</strong>:  '.$user_data['institution'].'</li>
                <li><strong>Course Of Study</strong>:  '.$user_data['course'].'</li>
                <li><strong>Batch</strong>:  '.$user_data['batch'].'</li>
                <li><strong>year</strong>:  '.$user_data['year'].'</li>
                <li><strong>Month</strong>:  '.$user_data['month'].'</li>
                <li><strong>Status</strong>:  '.$user_data['status'].'</li>
                <li><strong>Discription</strong>:  '.$user_data['discription'].'</li>
                </ul>
                </div>
                </div>';
        }else {
         echo '';
         ?>
         <?php
       }
        ?> 
          
    </div>

  </div>
</section>
  </main><!-- End #main -->
   

  <!-- ======= Footer ======= -->
  <footer id="footer" >

    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kwara State Secretariat Lagelu <br>
                  Area Behind Ministry Of Agriculture, <br>
                  Along Old Jebba Road,<br> Ilorin, Kwara
                  State.
             
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> nccfkwara@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Bethel</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/NCCFKwaraStatePage/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Nccfkwara</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="#">Pulicty Unit</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="addjs.js"></script>
</body>
</html>