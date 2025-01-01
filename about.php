<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about-FitMe</title>
<!--link to bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<!--link style css-->
<link rel="stylesheet" href="style.css">


</head>
<body class="aboutPage">
<!--navbar starts-->
<nav class="navbar navbar-expand fixed-top">
    <a href="index.php" class="navbar-brand">FitMe<span>.</span></a>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="" class="nav-link active">About</a></li>
        <li class="nav-item"><a href="products.php" class="nav-link">Classes</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item" class="btn"><a href="login1.php" class="nav-link">Register</a></li>
        <li class="nav-item" class="btn"><a href="finalLogin.php" class="nav-link">Log In</a></li>
    </ul>
</nav>
<!--navbar ends-->

<!--home section start-->
<section>
    <div class="AboutHome">
        <div class="AboutHomeParent">
            <div>
                <div>
                    <video src="./images/abt.mp4.mp4" autoplay muted loop></video>
                </div> 
            </div> 
            <div class="vidOverlay"></div>  
        </div>
        <div class="vidContent">
            <h6>About <br><span> FitMe</span></h6>
        </div>
    </div>
</section>
<!--home section ends-->
<!-- about Main section start -->
<section>
    <div class="about container">

        <div class="row justify-content-center">

            <div class="col-sm-5">
                <img src="./images/aboutrep.jpg" class="img-fluid" alt="">
                

            </div>

            <div class="content col-sm-5">
                <h3>About Us <span>FitMe</span></h3>
                <p class="box-content">
                    Welcome to <b>FitMe!</b><br>
                     We're passionate about helping people achieve their fitness goals in a supportive and motivating environment.

                Here at FitMe, we believe that fitness is a journey, not a destination. We offer a variety of classes and programs designed to cater to all fitness levels and interests. Whether you're a seasoned athlete or just starting out, we have something for you.</p>

                <span><b>Our Mission:</b></span><br>
                <p class="box-content">
                To empower people to take control of their health and well-being.
                To create a welcoming and inclusive community where everyone feels supported.
                To provide high-quality, evidence-based fitness instruction.
                To make fitness fun and enjoyable!</p>

                </p>
            </div>
        </div>
    </div>
</section>
<!-- about main section ends -->


<!-- footer section starts -->
<footer>
    <a href="#">@FitMe Ltd || 2024</a> 
 </footer>
 <!-- footer section ends -->

 <!---->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="./script.js"></script>
</body>
</html>