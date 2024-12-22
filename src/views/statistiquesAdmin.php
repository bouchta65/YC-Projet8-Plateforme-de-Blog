<?php


$sql = "SELECT Id_User,Full_Name_User,Role_User FROM User WHERE Email_User = '".$_SESSION["user"]."'";
$result = mysqli_query($conn,$sql);
$Userdata = mysqli_fetch_row($result);
$idUser = $Userdata[0];
$UserName = $Userdata[1];
$RolesUser = $Userdata[2];






$sql2 = "SELECT Count(*) FROM Article ";
$result2 = mysqli_query($conn,$sql2);
$CountArticles = mysqli_fetch_row($result2);


$sql3 = "SELECT Count(*)  FROM User WHERE Role_User NOT LIKE 'Admin' ";
$result3 = mysqli_query($conn,$sql3);
$CountUsers = mysqli_fetch_row($result3);

$sql4 = "SELECT Full_Name_User FROM User WHERE Id_User = '$idUser'";
$result4 = mysqli_query($conn,$sql4);

$sql5 = "SELECT Count(*) FROM Black_Liste";
$result5 = mysqli_query($conn,$sql5);
$CountBlocker = mysqli_fetch_row($result5);

$sql6 = "SELECT Count(*) FROM Tags";
$resul6 = mysqli_query($conn,$sql6);
$CountTags = mysqli_fetch_row($resul6);

?>