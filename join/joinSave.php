<?php
    include "../connect/connect.php";
    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();
    // echo $youEmail, $youName, $youPass, $youPhone;

    // $sql = "INSERT INTO members(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youPhone', '$regTime')";
    // $connect -> query($sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

     <main id="main" class="container">
        <div class="intro__inner center bmstyle">
            <picture class="intro__image">
                <source srcset="../assets/img/joinEnd01.png"/>
                <img src="../assets/img/joinEnd01.png" alt="joinEndimg">
            </picture>
            <p class="intro__text">
                회원가입을 축하합니다. 환영합니다. 로그인 해주세요.
            </p>
            <div class="intro__btn">
                <a href="#">메인화면</a>
                <a href="#">로그인</a>
            </div>
        </div>
        <!-- intro__inner -->
    </main>
    <!-- main -->


</body>
</html>