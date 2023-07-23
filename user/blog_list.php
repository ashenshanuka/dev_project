<!--
Author: W3layouts
Author URL: http://w3layouts.com
<?php 
session_start();
include 'common/connect.php';

$id = $_SESSION['user_id'];
$result = $obj->query("select * from appoinment where u_id = '$id'");
//$row = $result->fetch_object();

?>


-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MindBoost - Blog</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <?php include 'common/header.php'; ?>
  <!--/header-->
  <!-- breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
  <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
                    <h2 class="title AboutPageBanner">
                  Our Blog   </h2>
                              <p class="inner-page-para mt-2">
                              Journey to Serenity
                              A Mind Relaxation Blog             </p>
          </div>
          <div class="w3breadcrumb-right">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Blog</li>
                </ul>
          </div>
    </div>
      </div>
      <div class="hero-overlay"></div>
  </div>
</section>
<!--//breadcrumb-->
 

<style>
  /* Custom CSS to display landscape images */
  .card-img-top {
    height: 200px; /* Set the desired height for the images */
    object-fit: cover; /* Maintain aspect ratio and cover the container */
  }
</style>

<section class="w3l-team-main team py-5" id="team">
  <div class="container py-lg-5">
    <h5 class="title-subw3hny mb-1 text-center">Pamper Your Thoughts, Relax Your Soul.</h5>
    <h3 class="title-w3l text-center">Mind Spa</h3>
    <div class="row team-row mt-md-5 mt-4">
      <!-- Blog Preview 1 -->
      <div class="col-lg-4 col-md-6 col-sm-12 team-wrap mb-4">
        <div class="card team-member text-center">
          <img src="assets/images/team1.jpg" alt="" class="card-img-top radius-image">
          <div class="card-body">
            <a href="#url" class="team-title">Luke Jacobs</a>
            <p class="card-text">Doctor</p>
            <p class="card-text">
              Blog preview description goes here. This is the first line.
              This is the second line of the description.
              Here's the third line of the description.
              And here's the fourth line of the description.
              You can add more lines as needed.
            </p>
     
          </div>
        </div>
      </div>
      <!-- end Blog Preview 1 -->

      <!-- Blog Preview 2 -->
      <div class="col-lg-4 col-md-6 col-sm-12 team-wrap mb-4">
        <div class="card team-member text-center">
          <img src="assets/images/team3.jpg" alt="" class="card-img-top radius-image">
          <div class="card-body">
            <a href="#url" class="team-title">Claire Olson</a>
            <p class="card-text">Doctor</p>
            <p class="card-text">
              Blog preview description goes here. This is the first line.
              This is the second line of the description.
              Here's the third line of the description.
              And here's the fourth line of the description.
              You can add more lines as needed.
            </p>
           
          </div>
        </div>
      </div>
      <!-- end Blog Preview 2 -->

      <!-- Blog Preview 3 -->
      <div class="col-lg-4 col-md-6 col-sm-12 team-wrap mb-4">
        <div class="card team-member text-center">
          <img src="assets/images/team2.jpg" alt="" class="card-img-top radius-image">
          <div class="card-body">
            <a href="#url" class="team-title">Phillip Hunt</a>
            <p class="card-text">Doctor</p>
            <p class="card-text">
              Blog preview description goes here. This is the first line.
              This is the second line of the description.
              Here's the third line of the description.
              And here's the fourth line of the description.
              You can add more lines as needed.
            </p>
  
          </div>
        </div>
      </div>
      <!-- end Blog Preview 3 -->
      
      <!-- Add similar code for the 4th blog preview and beyond -->
      
    </div>
  </div>
</section>
<!--//team-sec -->



   
  <!--/footer-->
 <?php include 'common/footer.php'; ?>
  <!-- //footer -->
  <!-- copyright -->
  
  <!-- //copyright -->
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>