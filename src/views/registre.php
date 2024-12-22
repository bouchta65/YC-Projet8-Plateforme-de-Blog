
<?php
include "../db/config.php";

if(isset($_POST['registrebutton'])){
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    
  $password = htmlspecialchars($_POST['password']);
  $password_hashed = password_hash($password, PASSWORD_BCRYPT);
  $date = $_POST['date'];
  $currentDate = time();
  $age = ($currentDate - strtotime($date)) / (60 * 60 * 24 * 365.25);
  $sqll = "SELECT Email_User from User where Email_User = '$email'";
  $result = mysqli_query($conn,$sqll);
  if(mysqli_num_rows($result)>0){
    echo "<script>alert('Already have an account');</script>";
  }else{
    $sql = "INSERT INTO User  (Full_Name_User,Age_User,Email_User,Role_User,Password_User) VALUES ('$name','$age','$email','User','$password_hashed')";
    mysqli_query($conn,$sql);
    echo "<script>alert('Registre Sucsessfully');</script>";
  }
  }
  
?>