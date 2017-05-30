<?php
if(isset($_POST["signup"])){
    include('base/dbConfig.php');
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //query
    $sql="INSERT INTO member (fullname,email,username,password,status) 
    VALUES ('$fullname','$email','$username','$password','NotActivated')";
    $result = $db->query($sql);
    if($result){
        echo'<script>';
        echo"alert('SUCCESS | User Information Added')";
        echo'</script>';
        header("location:index.php");
    }
    else{
        echo'<script>';
        echo"alert('FAILED | User Information Not Added')";
        echo'</script>';
    }
}
?> 