<?php

session_start();
include 'common/connect.php';

//session code

if(!isset($_SESSION['user_id']))
{
    header('location:index.php');
}
//finish


$id = $_GET['a_id'];
$time = strtotime('now');
$exe = $obj->query("update appoinment set amount='500',payment_status='completed',is_update='1',is_update_time='$time' where b_id='$id'");




?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
  </head>

<body>

  <!--w3l-header-->

  <?php include 'common/header.php'; ?>
<!--/header-->
<div class="inner-banner">
</div>
  <!-- /donation-form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-lg-6 contact-left pr-lg-4">
          
     
        </div>
        
        <div class="col-lg-12 form-inner-cont">
          <div class="title-content text-left">
           <!--  <h3 class="hny-title mb-lg-5 mb-4">Please money Donate</h3> -->
          </div>
              <h1>Your Payment has successfully done..</h1>
        </div>
        </div>
      </div>
      </div>
     
    </section>
  <!-- //contact-form -->
  <!-- footer-66 -->

  <?php include 'common/footer.php'; ?>
  <!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

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