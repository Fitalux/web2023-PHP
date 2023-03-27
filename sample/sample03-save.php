<?php
   include "../connect/connect.php";
   
   $youEmail = $_POST['youEmail'];
   $youName = $_POST['youName'];
   $youPass = $_POST['youPass'];
   $youBirth = $_POST['youBirth'];
   $youAge = $_POST['youAge'];
   $regTime = time();

   echo $youemail, $youName, $youPass, $youBirth, $youAge;

    $sql = "UPDATE members SET youEamil = '$youEmail', youName = '$youName', youPass = '$youPass', youAge = '$youAge', youBirth = '$youBirth'WHERE memberID = '$memberID'";
    $connect ->query($sql);

    Header("Location: sample01.php");

?>