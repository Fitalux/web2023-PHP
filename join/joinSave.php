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
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/joinEnd01.png"/>
                <img src="../assets/img/joinEnd01.png" alt="joinEndimg">
            </picture>
            <?php
                include "../connect/connect.php";
                $youEmail = $_POST['youEmail'];
                $youName = $_POST['youName'];
                $youPass = $_POST['youPass'];
                $youPassC = $_POST['youPassC'];
                $youPhone = $_POST['youPhone'];
                $regTime = time();
                // echo $youEmail, $youName, $youPass, $youPhone;

                

                //오류 메시지 출력 
                function msg($alert) {
                    echo "<p class='intro__text'>$alert</p>";
                }
                //유효성 검사

                //이메일
                $check_mail = preg_match("/^[a-z0-9_+.-]+@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/", $youEmail);

                if($check_mail == false) {
                    msg ("이메일을 다시 한 번 확인하세요.");
                }

                //이름
                $check_name = preg_match("/^[가-힣a-zA-Z]+$/", $youName);

                if($check_name == false) {
                    msg("이름 작성란을 다시 확인해주세요.");
                    exit;
                }

                //비밀번호 (password)
                if($youPass !== $youPassC) {
                    msg("비밀번호가 일치하지 않습니다. 올바른 비밀번호인지 확인하세요.");
                    exit;
                }
                // $youPass = sha1($youPass);

                //연락처
                $check_number = preg_match("/^(010|011|016|017|018|019)-[0-9]{3,4}-[0-9]{4}$/", $youPhone);

                if($check_number == false) {
                    msg("입력하신 연락처가 정확하지 않습니다. 다시 확인하세요.");
                    exit;
                }
                
                //중복검사(이메일)
                $isEmailCheck = false;
                
                $sql = "SELECT youEmail FROM members WHERE youEmail = '$youEmail'";
                $result = $connect -> query($sql);

                if($result) {
                    $count = $result -> num_rows;
                    
                    if($count == 0){
                        $isEmailCheck = true;
                    } else {
                        msg("입력하신 이메일과 일치하는 회원정보가 있습니다. 아이디 찾기를 실행해주세요.");
                        exit;
                    }
                } else {
                    msg ("error 1: 관리자에게 문의하여 주시길 바랍니다. 불편을 드려 죄송합니다.");
                    exit;
                }

                //중복 검사(연락처)
                $isPhoneCheck = false;
                
                $sql = "SELECT youPhone FROM members WHERE youPhone = '$youPhone'";
                $result = $connect -> query($sql);

                if($result) {
                    $count = $result -> num_rows;
                    
                    if($count == 0) {
                        $isPhoneCheck = true;
                    } else {
                        msg("입력하신 연락처와 일치하는 회원정보가 있습니다. 아이디 찾기를 실행해주세요.");
                        exit;
                    }
                } else {
                    msg ("error 2 : 관리자에게 문의하여 주시길 바랍니다. 불편을 드려 죄송합니다.");
                    exit;
                }

                //전부 이상 X -> 회원가입
                if($isEmailCheck == true && $isPhoneCheck = true) {
                    //데이터 입력
                    $sql = "INSERT INTO members(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youPhone', '$regTime')";
                    $result = $connect -> query($sql);

                    if($result) {
                        msg("회원가입이 완료 되었습니다. 로그인 하세요.<br><div class='intro__btn'><a href='../login/login.php'>로그인</a></div>");
                        exit;
                    } else {
                        msg("error 3 : 관리자에게 문의하여 주시길 바랍니다. 불편을 드려 죄송합니다.");
                        exit;
                    }
                } else {
                    msg("이미 같은 정보로 가입된 회원이 있습니다. 아이디 찾기나 비밀번호 찾기를 진행하세요.");
                    exit;
                }

            ?>
        </div>
        <!-- intro__inner -->
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

</body>
</html>