<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <<main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01-min.png, ../assets/img/join01@2x-min.png 2x, assets/img/join01@3x-min.png 3x"/>
                <img src="../assets/img/join01.png" alt="joinimg">
            </picture>
            <p class="intro__text">
                회원 가입 시 더 다양한 정보를 자유롭게 시청하실 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner container">
            <h2>회원가입</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li class="active">2</li>
                    <li>3</li>
                </ul>
            </div>
            <div class="join__form">
                <form action="joinResult.php" name="joinResult" method="post" onsubmit="return joinChecks()">
                    <fieldset>
                        <legend class="blind">회원가입 폼 영역</legend>
                        <div>
                            <label for="youName" class="required" >이름</label>
                            <input type="text" id="youName" name="youName" class="inputStyle" placeholder="이름을 입력하세요." required>
                            <p class="msg" id="youNameComment"><!--이름에는 특수문자가 포함될 수 없습니다.!--></p>
                            <!-- maxlength="5"  = 최대 다섯 글자까지만 입력 가능!-->
                        </div>
                        <div class="over">
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일을 작성해주세요." required>
                            <a href="#c" class="youCheck" onclick="emailChecking()">이메일 중복검사</a>
                            <p class="msg" id="youEmailComment"><!--이미 사용되고 있는 이메일입니다. !--></p>
                        </div>
                        <div class="over">
                            <label for="youNick" class="required">닉네임</label>
                            <input type="text" id="youNick" name="youNick" class="inputStyle" placeholder="사용하실 닉네임을 입력하세요." required>
                            <a href="#c" class="youCheck" onclick="return nickChecking()(">닉네임 중복검사</a>
                            <p class="msg" id="youNickComment"><!--이미 사용되고 있는 닉네임입니다.!--></p>
                        </div> 
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="사용하실 비밀번호를 입력하세요.(8~12글자, 특수문자 포함)" required>
                            <p class="msg" id="youPassComment"><!-- 특수기호, 숫자가 들어가야 합니다. --></p>
                            <a href="#c">비밀번호 확인</a>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC" class="inputStyle"  placeholder="비밀번호를 한 번 더 입력하세요." required>
                            <p class="msg" id="youPassComment"></p>
                        </div>
                        <div>
                            <label for="youBirth">생년월일</label>
                            <input type="text" id="youBirth" name="youBirth" class="inputStyle"  placeholder="YY-MM-DD" requiredmaxlength="15">
                            <p class="msg" id="youBirthComment"><!-- 올바른 생년월일을 8자리를 입력하세요. !--></p>
                        </div>
                        <div>
                            <label for="youPhone">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" class="inputStyle" placeholder="연락 가능한 연락처를 입력하세요. 하이픈(-) 포함">
                            <p class="msg" id="youPhoneComment"><!-- 알맞는 형식의 연락처를 입력해주세요. --></p>
                        </div>
                        <button type="submit" class="btnStyle">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer --> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let isEmailCheck = false;
        let isNickCheck = false;

        function emailChecking(){
            let youEmail = $("#youEmail").val();
            if(youEmail == null || youEmail == ''){
                $("#youEmailComment").text("* 이메일을 입력해주세요");
            }else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youEmail" : youEmail, "type" : "isEmailCheck"},
                    dataType : "json",
                    success : function(data){
                        if(data.result == "good"){
                            $("#youEmailComment").text("* 사용 가능한 이메일 입니다");
                            isEmailCheck = true;
                        }else {
                            $("#youEmailComment").text("* 중복된 이메일 입니다");
                            isEmailCheck = false;
                        }
                    },
                    
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }

        function nickChecking() {
            let youNick = $("#youNick").val();

            if(youNick == null || youNick == ''){
                $("#youNickComment").text("* 사용하실 닉네임을 입력하세요.")
            } else {
                $.ajax({
                    type: "POST",
                    url : "joinCheck.php",
                    data : {"youNick" : youNick, "type" : "isNickCheck"},
                    dataType : "json",
                    
                    success : function(data){
                        if(data.result == "good"){
                            $("#youNickComment").text("* 사용 가능한 닉네임 입니다");
                            isNickCheck = true;
                        }else {
                            $("#youNickComment").text("* 중복된 닉네임 입니다");
                            isNickCheck = false;
                        }
                    },
                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }

        function joinChecks(){
            //유효성 검사 - 이름
            if($("#youName").val() == ''){
                $("#youNameComment").text("* 이름을 입력하세요.");
                $("#youName").focus();
                return false;
            }

            //입력된 이름 검사
            let getYouName = RegExp(/^[가-힣|a-z|A-Z]+$/);
            if(!getYouName.test($("#youName").val())) {
                $("#youNameComment").text("* 이름에는 특수문자가 들어갈 수 없습니다.");
                $("#youName").val('');
                $("#youName").focus();
                return false;
            }

            //이메일
            if($("#youEmail").val() == ''){
                $("#youEmailComment").text("* 이메일을 입력하세요.");
                $("#youEmail").focus();
                return false;
            }

            let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i);
            if(!getYouName.test($("#youEmail").val())) {
                $("#youEmailComment").text("* 이메일 형식에 맞게 다시 작성하세요.");
                $("#youEmail").val('');
                $("#youEmail").focus();
                return false;
            }

            //닉네임
            if($("#youNick").val() == ''){
                $("#youNickComment").text("* 사용하실 닉네임을 입력하세요.");
                $("#youNick").focus();
                return false;
            }

            let getYouNick = RegExp(/^[가-힣|a-z|A-Z|0-9]+$/);
            if(!getYouName.test($("#youNick").val())) {
                $("#youNickComment").text("* 닉네임에는 특수문자가 포함될 수 없습니다.");
                $("#youNick").val('');
                $("#youNick").focus();
                return false;
            }

            //비밀번호
            if($("#youPass").val() == ''){
                $("#youPassComment").text("* 사용하실 비밀번호를 입력하세요.");
                $("#youPass").focus();
                return false;
            }

            //8~20자 이내, 공백X, 영문 숫자 특수문자 포함
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text("* 8자리 ~ 20자리 이내로 입력하세요.");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("* 비밀번호는 공백 없이 입력하세요.");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("* 비밀번호는 영문과 숫자, 특수문자를 혼합하여 사용하여야 합니다.");
                return false;
            }

            //비밀번호 확인
            if($("#youPassC").val() == ''){
                $("#youPassCComment").text("* 사용하실 비밀번호를 다시 한 번 입력하세요.");
                $("#youPassC").focus();
                return false;
            }

            //비밀번호 = 비밀번호 확인
            if($("#youPass").val() !== $("#youPassC").val()) {
                $("#youPassCComment").text("* 비밀번호가 일치하지 않습니다.");
                return false;
            }

            //생년월일
            let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getYouBirth.test($("#youBirth").val())) {
                $("#youBirthComment").text("* 입력된 생년월일이 정확하지 않습니다 (YYYY-MM-DD) 형식에 맞추어 작성하세요.");
                $("#youBirth").val('');
                $("#youBirth").focus();
                return false;
            }

            //연락처
            let getYouPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getYouPhone.test($("#youPhone").val())) {
                $("#youPhoneComment").text("* 입력된 연락처가 정확하지 않습니다.");
                $("#youPhone").val('');
                $("#youPhone").focus();
                return false;
            }
        }
    </script>
</body>
</html>