<?php
session_start(); 

include "../db/config.php";


if(isset($_POST['loginbutton'])){
  $email_user = $_POST['email'];
  $pass = $_POST['password'];
  
  $sql = "SELECT Email_User,Password_User,Role_User,Id_User from User where Email_User='$email_user'";
  $result = mysqli_query($conn,$sql);
  
  if($result && mysqli_num_rows($result)>0){
    $i = mysqli_fetch_assoc($result);
    $sql1 = "SELECT * FROM Black_Liste WHERE Id_User = '{$i['Id_User']}'";
    $result2 = mysqli_query($conn,$sql1);
    $i2 = mysqli_num_rows($result2);
    if($i2>0){
        echo "<script>
        alert('🚫 Access Denied!\\n\\nYou have been blocked from accessing this blog. If you believe this is a mistake, please contact the administrator.');
        window.location.href = '../../index.php';
    </script>";
    }else{
        if(password_verify($pass,$i['Password_User'])){
            $_SESSION["user"] = $i['Email_User'];
            $_SESSION["role"] = $i['Role_User'];
            if($i['Role_User']=="Admin"){
              header("Location: userBlog.php");
              
            }else{
              header("Location: userBlog.php");
            }
          }else {
            echo "<script>alert('Mot de passe incorrect');</script>";
        }
    }

    
} else {
  echo "<script>alert('Email non trouvé');</script>";
}
  }
  
?>

