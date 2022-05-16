<?php
    include $_SERVER['DOCUMENT_ROOT'].'/session.php';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <link rel="stylesheet" href="layoutCSS.php" />
</head>
<body>
    <!-- <div id='wrap'>
        <div id='header'></div>
        <section id='leftArea'></section>
        <aside id='rightArea'></aside>
        <div id='footer'></div>
    </div> -->
    <?php if(!isset($_SESSION['memberID'])) : ?>
        <a href="signUp/signUpForm.php">회원가입</a>
        <br>
        <a href="signUp/signInForm.php">로그인</a>
    <?php else : ?>
        <a href="board/list.php">게시판</a>
        <br>
        <a href="survey/surveyForm.php">설문조사 프로그램</a>
        <a href="gChart/surveyResultBarChart.php">투표결과 바차트로 보기</a>
        <br>
        <a href="gChart/surveyResultPieChart.php">투표결과 파이차트로 보기</a>
        <br>
        <a href="webEditor/editorForm.php">간단한 코딩 에디터</a>
        <br>
        <a href="parsing/selectForm.php">실시간 검색어 1위 키워드 보기</a>
        <br>
        <a href="signIn/signOut.php">로그아웃</a>
        <br>
    <?php endif; ?>
</body>
</html>