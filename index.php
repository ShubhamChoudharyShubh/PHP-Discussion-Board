<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASK - RGPV</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>

    <?php
    session_start();

    include('./client/header.php');

    if (isset($_GET['signup']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/signup.php');
    } elseif (isset($_GET['login']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/login.php');
    } elseif (isset($_GET['ask'])) {
        include('./client/ask.php');
    } elseif (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php');
    } elseif (isset($_GET['c-id'])) { // Check if 'c-id' is set
        $cid = $_GET['c-id'];         // Assign its value
        include('./client/questions.php');
    } elseif (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        include('./client/questions.php');
    } elseif (isset($_GET['latest'])) {
        include('./client/questions.php');
    } elseif (isset($_GET['search'])) {
        $search = $_GET['search'];
        include('./client/questions.php');
    }
      else {
        include('./client/questions.php');
    }

    ?>

</body>

</html>