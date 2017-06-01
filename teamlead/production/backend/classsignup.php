<?php
if(isset($_POST["submit"])){
    include('../basefiles/dbconfig.php');
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    //query
    $sql="INSERT INTO teamlead (fullname,email,username,password,status) 
    VALUES ('$fullname','$email','$username','$password','Active')";
    $result = $db->query($sql);
    if($result){
        echo'<script>';
        echo"alert('SUCCESS | User Information Added')";
        echo'</script>';
        header("location:../index.php");
    }
    else{
        echo'<script>';
        echo"alert('FAILED | User Information Not Added')";
        echo'</script>';
    }
}
?> 