<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>

    <!--link to bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--link style css-->
    <link rel="stylesheet" href="style.css">



</head>
<body class="contactPage">
    <!--navbar starts-->
    <nav class="navbar navbar-expand dark-bg fixed-top">
        <a href="index.php" class="navbar-brand">FitMe<span>.</span></a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="products.php" class="nav-link">Classes</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item" class="btn"><a href="login1.php" class="nav-link">Register</a></li>
            <li class="nav-item" class="btn"><a href="finalLogin.php" class="nav-link active">Log In</a></li>
        </ul>
    </nav>
    <!--navbar ends-->

    <!--home section start-->
    <section>
        <div class="Home">
            <div class="loginImg">
                <div>
                    <img src="./images/about.jpg"
                        class="loginimg" alt="">
                </div>
                <div class="VidOverlay"></div>
            </div>
            <div class="vidContent">
                <h6>LOGIN HERE <br><span> START YOUR JOURNEY WITH US</span></h6>
            </div>
        </div>
    </section>
    <!--home section ends-->





      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM login_info WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['ID'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='finalLogin.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: dashboard.php");
                }
              }else{

            
            ?>
            
            <div class="contact container">

            <div class="col-sm-8">
            <h1>LOGIN HERE </h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <br>
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <br>
                <div class="links">
                    Don't have account? <a class="btn" href="login1.php">Sign Up Now</a>
                </div>
            </form>
        </div>
            </div>
        </div>
        <?php } ?>
      </div>

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