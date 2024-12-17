<?php
include "src/db/config.php";
session_start(); 


if(isset($_POST['loginbutton'])){
  $email_user = $_POST['email'];
  $pass = $_POST['password'];
  $sql = "SELECT Email_User,Password_User,Role_User from User where Email_User='$email_user'";
  $result = mysqli_query($conn,$sql);
  
  if($result && mysqli_num_rows($result)>0){
    $i = mysqli_fetch_assoc($result);
    if(password_verify($pass,$i['Password_User'])){
      $_SESSION["user"] = $i['Email_User'];
      $_SESSION["role"] = $i['Role_User'];
      if($i['Role_User']=="Admin"){
        header("Location: src/views/dashboardAdmin.php");
        
      }else{
        header("Location: src/views/dashboardUser.php");
      }
    }else {
      echo "<script>alert('Mot de passe incorrect');</script>";
  }
} else {
  echo "<script>alert('Email non trouvé');</script>";
}
  }
  
?>