<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT WEBSITE</title>

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
            <li class="nav-item" class="btn"><a href="login1.php" class="nav-link active">Register</a></li>
            <li class="nav-item" class="btn"><a href="finalLogin.php" class="nav-link">Log In</a></li>
        </ul>
    </nav>
    <!--navbar ends-->
    <!--home section start-->
    <section>
        <div class="Home">
            <div class="loginImg">
                <div>
                    <img src="./images/register.jpg"
                        class="loginimg" alt="">
                </div>
                <div class="VidOverlay"></div>
            </div>
            <div class="vidContent">
                <h6>REGISTER AT <br><span> FitMe</span></h6>
            </div>
        </div>
    </section>
    <!--home section ends-->
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            $goal = $_POST['goal'];

         //verifying the unique email
         $goal = $_POST['goal'];  // or retrieve this from your form/input
$goal_id = null;

switch ($goal) {
    case 'cardio':
        $goal_id = 1;
        break;
    case 'yoga':
        $goal_id = 2;
        break;
    case 'muscle_training':
        $goal_id = 3;
        break;
}

         $verify_query = mysqli_query($con,"SELECT Email FROM login_info WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO login_info(Username,Email,Password,Gender,goal , goal_id) VALUES('$username','$email','$password','$gender','$goal' , '$goal_id')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='finalLogin.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
            <div class="contact container">

            <div class="col-sm-8">
            <h1>REGISTER HERE </h1>
            <form action="" method="post">
            <div class="form-group">
                
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                
            </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
                </div>
                
                <div class="form-group">
                    <label for="goal">Goal</label>
                    <select name="goal" id="goal" required>
                <option value="cardio">Cardio</option>
                <option value="muscle_training">Muscle Training</option>
                <option value="yoga">Yoga</option>
            </select>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <br>
                <div class="links">
                    Already a member? <a class="btn" href="finalLogin.php">Sign In</a>
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