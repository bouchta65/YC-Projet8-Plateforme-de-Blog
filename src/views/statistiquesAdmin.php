<?php


$sql = "SELECT Id_User,Full_Name_User FROM User WHERE Email_User = '".$_SESSION["user"]."'";
$result = mysqli_query($conn,$sql);
$Admindata = mysqli_fetch_row($result);
$idAdmin = $Admindata[0];
$AdminName = $Admindata[1];


$sql2 = "SELECT Count(*) FROM Article WHERE Id_User = '$idAdmin'";
$result2 = mysqli_query($conn,$sql2);
$CountArticles = mysqli_fetch_row($result2);


$sql3 = "SELECT Count(*)  FROM User WHERE Role_User NOT LIKE 'Admin' ";
$result3 = mysqli_query($conn,$sql3);
$CountUsers = mysqli_fetch_row($result3);

$sql4 = "SELECT Full_Name_User FROM User WHERE Id_User = '$idAdmin'";
$result4 = mysqli_query($conn,$sql4);
?>