<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

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
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="assets/img/intro01.png, assets/img/intro01@2x.png 2x"/>
                <img src="assets/img/intro01.png" alt="introimg">
            </picture>
            <p class="intro__text">
                사람은 배울수록 세상을 넓게 볼 수 있다고 합니다. <br>
                새로운 기술과 도전을 두려워하지 않고 열정적으로 학습하여 더 넓은 시야와 다양한 시각으로 세상을 바라보며,<br>
                어제보다 더 나은 오늘을 결과로 보여드리는 개발자가 되겠습니다.
            </p>
        </div>

        <div class="blog__inner">
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo01.png, assets/img/blog01@2x.png 2x, assets/img/blog01@3x.png 3x"/>
                            <img src="../assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">more</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo02.png, assets/img/blog02@2x.png 2x, assets/img/blog02@3x.png 3x"/>
                            <img src="assets/img/blog02.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">more</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo03.png, assets/img/blog03@2x.png 2x, assets/img/blog03@3x.png 3x"/>
                            <img src="assets/img/blog03.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">more</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo04.png, assets/img/blog04@2x.png 2x, assets/img/blog04@3x.png 3x"/>
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col2 line2">
                    <div class="card">
                        <figure  class="card__img">
                            <source srcset="assets/img/blogo05.png, assets/img/blog05@2x.png 2x, assets/img/blog05@3x.png 3x"/>
                            <img src="assets/img/blog05.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span class="author">작성자</span>
                            <span class="date">작성자</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo06.png, assets/img/blog06@2x.png 2x, assets/img/blog06@3x.png 3x"/>
                            <img src="assets/img/blog06.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span class="author">작성자</span>
                            <span class="date">작성자</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span class="author">작성자</span>
                            <span class="date">작성자</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo08.png, assets/img/blog08@2x.png 2x, assets/img/blog08@3x.png 3x"/>
                            <img src="assets/img/blog08.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span class="author">작성자</span>
                            <span class="date">작성자</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col3 line3">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo04.png, assets/img/blog04@2x.png 2x, assets/img/blog04@3x.png 3x"/>
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo08.png, assets/img/blog08@2x.png 2x, assets/img/blog08@3x.png 3x"/>
                            <img src="assets/img/blog08.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col6">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo01.png, assets/img/blog01@2x.png 2x, assets/img/blog01@3x.png 3x"/>
                            <img src="assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo08.png, assets/img/blog08@2x.png 2x, assets/img/blog08@3x.png 3x"/>
                            <img src="assets/img/blog08.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blogo07.png, assets/img/blog07@2x.png 2x, assets/img/blog07@3x.png 3x"/>
                            <img src="assets/img/blog07.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>title</h3>
                            <p>desc</p>
                        </div>
                        <div class="card__info">
                            <span>more</span>
                            <span>writer</span>
                            <span>view</span>
                            <span>like</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
            <div class="intro__inner"></div> 각 페이지 소개 배너
            <div class="join__inner"></div> 회원가입 페이지
            <div class="login__inner"></div> 로그인 페이지
            <div class="blog__inner"></div> 블로그 메인

            <div class="slider__inner"></div>
            <div class="banners__inner"></div>
            <div class="cards__inner"></div>
            <div class="images__inner"></div>
            <div class="ads__inner"></div>
            <div class="texts__inner"></div>
            <div class="login__inner"></div>


        -->
    </main>
    <!-- main -->
    
</body>
</html>