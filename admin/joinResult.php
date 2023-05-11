<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 완료</title>

    <?php include "../include/head.php" ?>

</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner container">
            <h2>회원가입 완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="join__complete"> 
                <div class="complete">
                    <div class="stars star-1"></div>
                    <div class="stars star-2"></div>
                    <div class="stars star-3"></div>
                    <div class="stars star-4"></div>
                    <div class="stars star-5"></div>
                    <div class="orbit orbit-1"></div>
                    <div class="orbit orbit-2"></div>
                    <div class="orbit orbit-3"></div>
                    <div class="planet"></div>
                    <div class="waves">  
                      <svg class="wave wave-1" viewbox="7.5 0 60 10">
                        <defs>
                          <linearGradient id="gradient">
                            <stop offset="0%" stop-color="#174A69" />
                            <stop offset="65%" stop-color="#3D9C94" />
                          </linearGradient>
                        </defs>
                        <path fill="url(#gradient)" d="M0 10 V5 Q2.5 2.5 5 5 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 V10" />
                      </svg>
                      <svg class="wave wave-2" viewbox="7.5 0 60 10">
                        <path fill="url(#gradient)" d="M0 10 V5 Q2.5 2.5 5 5 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 V10" />
                      </svg>
                      <svg class="wave wave-3" viewbox="7.5 0 60 10">
                        <path fill="url(#gradient)" d="M0 10 V5 Q2.5 2.5 5 5 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 V10" />
                      </svg>
                      <svg class="wave wave-4" viewbox="7.5 0 60 10">
                        <path fill="url(#gradient)" d="M0 10 V5 Q2.5 2.5 5 5 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 V10" />
                      </svg>
                      <svg class="wave wave-5" viewbox="7.5 0 60 10">
                        <path fill="url(#gradient)" d="M0 10 V5 Q2.5 2.5 5 5 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 t5 0 V10" />
                      </svg>
                    </div>
                    <div class="sub-planet"></div>
                  </div>
                <div class="desc">
                    회원가입이 완료되었습니다. 환영합니다.<br>
                    다양한 컨텐츠를 확인하실 수 있습니다<div class=""></div>
                </div>         
            </div>
            <div class="admin__btn">
                <a href="#" class="btnStyle agreeBtn">로그인</a>
            </div>
        </div>
    </main>
    <!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>