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
        <div class="intro__inner center bmstyle">
            <picture class="intro__image">
                <source srcset="../assets/img/join01-min.png, ../assets/img/join01@2x-min.png 2x, ../assets/img/join01@3x-min.png 3x"/>
                <img src="../assets/img/join01.png" alt="join img">
            </picture>
            <p class="intro__text">
                회원 가입 시 더 다양한 정보를 자유롭게 시청하실 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner container">
            <h2>회원가입</h2>
            <div class="join__form">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 폼 영역</legend>
                        <div>
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일을 작성해주세요." required>
                        </div>
                        <div>
                            <label for="youName" class="required" >이름</label>
                            <input type="text" id="youName" name="youName"  class="inputStyle" placeholder="이름을 입력하세요." required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="사용하실 비밀번호를 입력하세요." required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC"  class="inputStyle" placeholder="비밀번호를 한 번 더 입력하세요." required>
                        </div>
                        <div>
                            <label for="youPhone" class="required">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락 가능한 연락처를 입력하세요." required>
                        </div><button type="submit" class="btnStyle">회원가입</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>