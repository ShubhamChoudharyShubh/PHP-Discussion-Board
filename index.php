<!DOCTYPE html>
<html lang="en">

<head>
  <title>Discuss Project</title>
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
  } elseif(isset($_GET['ask'])) {
      include('./client/ask.php');
  }elseif(isset($_GET['q-id'])) {
    $qid=$_GET['q-id'];
    include('./client/question-details.php');
  }else{
    include('./client/questions.php');
  }

  ?>

</body>

</html>