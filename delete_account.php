<?php

include './php/config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "delete from login_info where ID=$id";
    $result = mysqli_query($con, $query);
    if($result){
        echo" Deleted successfully";
        echo"<br><br><br>";
        echo'<button><a href="index.php">Go Back</button>';
    }else{
        die(mysqli_error($con));
    }
}

?>