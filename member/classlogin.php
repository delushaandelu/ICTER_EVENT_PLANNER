<?php
include('base/dbConfig.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];                 

    $result = mysqli_query($db, 'select * from member where username="'.$username.'" and password="'.$password.'"  ');
    if (mysqli_num_rows($result)==1){
        //$cst_id = $_SESSION['csid'];
        //$cst_name = $_SESSION['fname'];
        
        //$log = "INSERT INTO log(id, name, logtime) VALUES('$cst_id','$cst_name', 'sda')";
        //if (mysqli_query($con,$log) === TRUE) {
            header('location: temp.php');
            //}else{
            //echo "<script>";
            //echo "alert('ERROR| Log Time ERROR! Login Again!')";
            //echo "</script>";
            //}
    }else
        echo "<script>";
        echo "alert('ERROR| Your are not an authoriezed user! Check your information again')";
        echo "</script>";
}
?>