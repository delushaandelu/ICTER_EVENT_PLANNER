<?php
    session_start();
    if(isset($_POST['submit'])){
        require ('../basefiles/dbconfig.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = sha1($password);
        //session creating
        $_SESSION['user'] = $username;
        
        $res1 =  mysqli_fetch_assoc(mysqli_query($db,"select fullname from teamlead where username = '$username' "));
        $_SESSION['fname']= $res1['fullname'];                     
 

        $result = mysqli_query($db, 'select * from teamlead where username="'.$username.'" and password="'.$password.'"  ');
        if (mysqli_num_rows($result)==1){
            //$cst_id = $_SESSION['csid'];
            
            //$cst_name = $_SESSION['fname'];
            
            //$log = "INSERT INTO log(id, name, logtime) VALUES('$cst_id','$cst_name', 'sda')";
            //if (mysqli_query($con,$log) === TRUE) {
                header('location: ../home.php');
                //}else{
                //echo "<script>";
                //echo "alert('ERROR| Log Time ERROR! Login Again!')";
                //echo "</script>";
                //}
        }else
           header('location: ../index.php');
           
    }
?>