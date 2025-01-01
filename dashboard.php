<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: finalLogin.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>

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
        </ul>
    </nav>
    <!--navbar ends-->

    <?php 
            $id = (int)$_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM login_info WHERE ID=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['ID'];
                $res_Goal = $result['goal'];
                $res_goalid = $result['goal_id'];
            }
            
            // echo "<a href='edit.php?ID=$res_id'>Change Profile</a>";
            
            ?>

            <!-- <a href="php/logout.php"> <button class="btn">Log Out</button> </a> -->

    <!--home section start-->
<section>
<div class="Home">
            <div class="HomeParent">
                <div>
                    <video src="./images/bgvideo.mp4.mp4" autoplay muted loop></video>
                </div> 
                <div class="VidOverlay"></div>  
            </div>
            <div class="vidContent">
                <h6>Welcome <span><b><?php echo $res_Uname ?></b></span></h6>
                <h6>Let's get fit with <span>FitMe</span></h6>
            </div>
        </div>
</section>
<!--home section ends-->





     <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
     
    <main>
            
    <section>
    <div class="about container">

        <div class="row justify-content-center">

            <div class="col-sm-5">
                <img src="./images/aboutrep.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-sm-5">
                <img src="./images/d.jpg" class="img-fluid" alt="">
            </div>

            <div class="content col-sm-5">
            <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            <p>Your goal is <b><?php echo $res_Goal ?></b></p>
            <a href="muscle.php" class="btn">See Your Workout</a>
            <div class="bottom">
            <div class="box">
                <p>Let's burn our fat! </p>
            </div>
          </div>
        

          
          <form action="dashboard.php" method="GET" id="workout-form">
            <!-- User ID - Assume this is obtained from session data or a similar source -->
            <input type="hidden" name="ID" value='<?php echo $id ?>'> <!-- Example user ID, should be dynamic -->

            <!-- Buttons for each day -->
            <div class="form-group">
            <input type="submit" name="w_id" class="btn" value="1">Day1 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="2">Day2 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="3">Day3 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="4">Day4 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="5">Day5 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="6">Day6 Completed<br>
            </div>
            <div class="form-group">
            <input type="submit" name="w_id" class="btn"  value="7">Day7 Completed<br>
            </div>
            </form>
            </div>
          </div>
          

    </main>

    
    <?php
// Ensure user is authenticated


if (!isset($_SESSION['id'])) {
    header("Location: finalLogin.php");
    exit;
}

$user_id = $_SESSION['id'];  // Get user ID from session
$query = mysqli_query($con,"SELECT*FROM login_info WHERE ID=$id");


$con->close();  // Close the connection
?>

<?php
// Include database connection
include("php/config.php");

// Define user ID (assuming it's from a session or defined earlier)
$user_id = $id;
$goal_id = $res_goalid;



// Connect to the database
if ($con->connect_error) {
    die("Connection not established! Error: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get user_id and w_id from form submission
    $day = intval($_GET['w_id']);

    switch ($goal_id) {
        case 1:
            $w_id_start = 1;
            $w_id_end = 7;
            $w_id = $day;
            break;
        case 2:
            $w_id_start = 8;
            $w_id_end = 14;
            $w_id = $w_id_start + $day;
            break;
        case 3:
            $w_id_start = 15;
            $w_id_end = 21;
            $w_id = $w_id_start + $day;
            break;
        default:
            echo "Invalid goal_id.";
            exit;
    }
    
    
    // Validate that the IDs are not zero
    if ($user_id > 0) {
        // Insert into wcomp to track completion
        $query_insert = "
            INSERT INTO wcomp (ID, w_id, comp_time)
            VALUES ($user_id, $w_id, NOW())
        ";
        
        // Execute the query and check for errors
        if ($con->query($query_insert) === TRUE) {
            echo "Day $day marked as completed.";
        } else {
            echo "Error inserting into wcomp: " . $con->error;
        }
    } else {
        echo "Invalid user_id or w_id.";
    }
}



// Determine the correct range for w_id based on goal_id




// Query to list completed workouts for the user
$query_completed = "
SELECT distinct 
 wp.calories,
        wp.workout1,
wp.workout2,
wp.workout3,
wc.comp_time
FROM 
wcomp wc
INNER JOIN 
workout wp ON wc.w_id = wp.w_id
inner join login_info li on li.goal_id = wp.goal_id
WHERE 
wp.goal_id = $goal_id and wp.w_id = $w_id;

";
    

// Query to list remaining workouts for the user
$query_remaining = "

     SELECT distinct 
        wp.calories,
         wp.workout1,
     wp.workout2,
     wp.workout3 
     FROM 
         workout wp
     inner join login_info li on li.goal_id = wp.goal_id  
     WHERE 
         wp.w_id NOT IN (
             SELECT w_id 
             FROM wcomp 
             WHERE ID = $user_id
         )and wp.goal_id = $goal_id and wp.w_id between $w_id_start and $w_id_end;
        

";



// Execute the queries
$result_completed = $con->query($query_completed);
$result_remaining = $con->query($query_remaining);

echo "<h2>Completed Workouts</h2>";
if ($result_completed->num_rows > 0) {
    while ($row = $result_completed->fetch_assoc()) {
        echo "<div>";
        
        echo "<strong>Workout 1:</strong> " . $row['workout1'] . "<br>";
        echo "<strong>Workout 2:</strong> " . $row['workout2'] . "<br>";
        echo "<strong>Workout 3:</strong> " . $row['workout3'] . "<br>";
        echo "<strong>Completion Time:</strong> " . $row['comp_time'] . "<br>";
        echo "</div><br>";
    }
} else {
    echo "<p>No completed workouts</p>";
}

// Display remaining workouts
echo "<h2>Remaining Workouts</h2>";
if ($result_remaining->num_rows > 0) {
    while ($row = $result_remaining->fetch_assoc()) {
        echo "<div>";
        
        echo "<strong>Workout 1:</strong> " . $row['workout1'] . "<br>";
        echo "<strong>Workout 2:</strong> " . $row['workout2'] . "<br>";
        echo "<strong>Workout 3:</strong> " . $row['workout3'] . "<br>";
        echo "</div><br>";
    }
} else {
    echo "<p>All workouts are completed</p>";
}

                          
    
                            
                           
                            
        
    


// Close the database connection
$con->close();
?>

<h5>Do you want to delete the account?</h5>
<form action="delete_account.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
<button id="delete"><a href="delete_account.php?deleteid=<?php echo $id ?>">Delete</a></button>
</form>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="./script.js"></script> 

<!-- footer section starts -->
<footer>
    <a href="#">@FitMe Ltd || 2024</a> 
 </footer>
 <!-- footer section ends -->
</body>
</html>