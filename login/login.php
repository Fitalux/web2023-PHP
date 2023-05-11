<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->
    
    <main id="main" class="container">
    <div class="login__inner">
            <h2>로그인</h2>
            <p>로그인을 하시면 게시글 및 댓글 작성이 가능합니다.<br>회원 가입 절차를 진행하고 나면 로그인이 가능합니다.<br>admin@admin.com/1234</p>
            <div class="login__form btStyle bmStyle">
                <form action="loginSave.php" name="loginSave" method="post">
                    <fieldset>
                        <legend class="blind">로그인 영역</legend>
                        <div>
                            <label for="youEmail" class="blind required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="아이디로 사용하시는 이메일을 작성해주세요." required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="회원가입시 설정하신 비밀번호를 입력하세요." required>
                        </div>
                        <button type="submit" class="btnStyle2 mt20">로 그 인</button>
                    </fieldset>
                </form>
            </div>
            <div class="login__footer">
                <ul class="listStyle">
                    <li>아직 회원이 아니시라면 회원가입을 먼저 진행해주세요 <a href="join.html">회원가입</a></li>
                    <li>아이디가 기억이 나지 않는다면 <a href="#">아이디 찾기</a></li>
                    <li>비밀번호가 기억이 나지 않는다면 <a href="#">비밀번호 찾기</a></li>
                </ul>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>