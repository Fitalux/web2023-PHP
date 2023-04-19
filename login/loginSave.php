<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 완료</title>

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
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    // echo $youEmail, $youPass;

    // 데이터 출력
    function msg($alert){
        echo "<p class='intro__text'>$alert</p>";
    }
    // 데이터 조회
    $sql = "SELECT memberID, youEmail, youName, youPass FROM members WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count == 0){
            msg("이메일 또는 비밀번호를 다시 확인하세요. <br><div class='intro__btn'><a href='../login/login.php'>로그인</a></div>");
        } else {
            // 로그인 성공
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

            // echo "<pre>";
            // var_dump($memberInfo);
            // echo "</pre>";

            //세션
            $_SESSION['memberID'] = $memberInfo['memberID'];
            $_SESSION['youEmail'] = $memberInfo['youEmail'];
            $_SESSION['youName'] = $memberInfo['youName'];

            Header("Location:../main/main.php");
        }
    }
?>
        </div>
        <!-- intro__inner -->
    </main>
    <!-- main -->


</body>
</html>