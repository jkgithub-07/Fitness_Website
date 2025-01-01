<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Fitme</title>

    <!--link to bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--link style css-->
    <link rel="stylesheet" href="style.css">
    

</head>
<body class="aboutPage contactPage">
    <!--navbar starts-->
    <nav class="navbar navbar-expand fixed-top">
        <a href="index.php" class="navbar-brand">FitMe<span>.</span></a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="products.php" class="nav-link">Classes</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link active">Contact</a></li> <li class="nav-item" class="btn"><a href="login1.php" class="nav-link">Register</a></li>
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
                <h6>Hello! Contact <br><span> FitMe </span></h6>
            </div>
        </div>
    </section>
    <!--home section ends-->
    
    <!-- contact form start -->
    <section>
        <div class="contact container">

            <div class="row justify-content-center">
                <h6>How Can We Help You ? </h6>
                <div class="col-sm-8">
                    <form action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="enter your name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="enter your emailID" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Phone No.</label>
                            <input type="number" placeholder="enter your phone number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">How can we help you</label>
                            <textarea name=""
                            placeholder="how can we assist you?" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section starts -->
    <footer>
        <a href="#">@FitMe Ltd || 2024</a> 
     </footer>
     <!-- footer section ends -->
     <!--script for bootstrap-->
     
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <script src="./script.js"></script>
</body>
</html>