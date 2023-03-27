<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://webfontworld.github.io/tmon/Tmon.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <main>
        <aside>
            <?php
                include "aside.php";
            ?>
        </aside>
        <section>
            <form action="sample03-save.php" name="same" method="post">
                    <fieldset>
                        <input type="text" name="memberID" placeholder="변경 대상ID">
                        <input type="email" name="youEmail" placeholder="변경 후 이메일">
                        <input type="text" name="youName" placeholder="변경 후 이름">
                        <input type="password" name="youPass" placeholder="변경 후 비밀번호">
                        <input type="text" name="youBirth" placeholder="변경 후 생년월일">
                        <input type="text" name="youAge" placeholder="변경 후 나이">
                        <button type="submit">회원 추가</button>
                    </fieldset>
                </form>
        </section>
    </main>
</body>
</html>