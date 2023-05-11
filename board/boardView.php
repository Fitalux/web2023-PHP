<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <?php include "../include/head.php" ?>
    <!-- head -->
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->
    <?php include "../include/header.php" ?>
    <!-- header -->
    <main id="main" class="container">
        <div class="intro__inner center">
            <picture class="intro__images small">
                <source srcset="../assets/img/board01.png, ../assets/img/board01@2x.png 2x, ../assets/img/board01@3x.png 3x" />
                <img src="../assets/img/board01.png" alt="회원가입 이미지">
            </picture>
            <h2>게시글 보기</h2>
            <p class="intro__text">
                웹디자이너, 웹퍼블리셔, 프론트엔드 개발자를 위한 게시판입니다.<br>
                관련된 문의사항은 여기서 확인하세요.
            </p>
        </div>
        <!-- intro__inner -->
        <div class="board__inner">
            <div class="board__view">
                <table>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 80%;">
                    </colgroup>
                    <tbody>
                        <!-- <tr>
                            <th>제목</th>
                            <td>게시판 제목</td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td>등록자</td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td>2023-04-24</td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>프론트 엔드 개발자로 취업하려면 다음과 같은 팁이 도움이 될 수 있습니다.
                                기본기를 탄탄히 쌓아라: HTML, CSS, JavaScript 등 웹 개발의 기초 기술을 잘 이해하고 익히는 것이 중요합니다. 이를 위해서는 각 언어와 기술에 대한 이론적인 이해와 함께, 실제로 코딩을 해보며 경험을 쌓는 것이 필요합니다.
                                프로젝트를 진행하며 경험을 쌓아라: 포트폴리오를 만들기 위해 직접 프로젝트를 진행해보는 것이 좋습니다. 이를 통해 구체적인 문제에 대한 해결 능력과 협업 능력을 쌓을 수 있습니다. 예를 들어, JavaScript를 사용하여 반응형 웹 사이트를 만들어 보는 것도 좋은 프로젝트 아이디어입니다.
                                업계 동향을 파악하라: 최신 트렌드와 기술에 대해 항상 관심을 가지며, 적극적으로 배우려는 자세를 가져야 합니다. 또한, 프론트 엔드 개발 분야에서 인기있는 프레임워크와 라이브러리를 익히는 것도 중요합니다.
                                영어 실력을 키워라: 대부분의 기술 문서와 자료가 영어로 작성되어 있기 때문에, 영어 실력을 키우는 것이 필수입니다.
                                네트워킹을 하라: SNS나 개발자 커뮤니티를 활용하여 다른 개발자들과 교류하고 정보를 공유하는 것도 좋은 방법입니다. 또한, 개발자 모임이나 컨퍼런스에 참여하여 다양한 사람들과 만나는 것도 좋습니다.
                                면접 준비를 철저히 하라: 자신이 경험한 프로젝트나 기술적인 이슈 등을 자세히 설명할 수 있도록 준비해야 합니다. 또한, 회사와 해당 직무에 대해 충분한 조사를 하고, 질문에 대한 대답을 준비하는 것이 좋습니다.
                                이러한 팁들을 참고하여 적극적으로 공부하고 경험을 쌓으면, 프론트 엔드 개발자로 취업할 수 있는 기회가 높아질 것입니다.</td>
                        </tr> -->
<!-- <?php
    $boardID = $_GET['boardID'];
    // echo $boardID;
    $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
    } else {
        echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
    }
?> -->
<?php
    // boardID 키가 정의되어 있는지 확인
    if(isset($_GET['boardID'])) {
        $boardID = $_GET['boardID'];
        // echo $boardID;
        $sql = "SELECT b.boardContents, b.boardTitle, m.youName, b.regTime, b.boardView FROM board b JOIN members m ON(m.memberID = b.memberID) WHERE b.boardID = {$boardID}";
        $result = $connect -> query($sql);
        if($result){
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
            echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
            echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
            echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
            echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
        } else {
            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>게시글 ID가 지정되지 않았습니다.</td></tr>";
    }
?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="board__btn mb100">
                <a href="boardModify.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3">수정하기</a>
                <a href="boardRemove.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3" onclick="confirm('삭제하겠습니까?', '')">삭제하기</a>
                <a href="board.php" class="btnStyle3">목록보기</a>              
            </div> -->
            <div class="board__btn mb100">
                <a href="boardModify.php?boardID=<?=$_GET['boardID'] ?>" class="btnStyle3">수정하기</a>
                <a href="#" class="btnStyle3" onclick="deleteBoard()">삭제하기</a>
                <a href="board.php" class="btnStyle3">목록보기</a>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- footer -->
    <script>
        function deleteBoard() {
            if(confirm('삭제하겠습니까?')) {
                location.href = "boardRemove.php?boardID=<?=$_GET['boardID'] ?>";
            }
        }
    </script>
</body>
</html>