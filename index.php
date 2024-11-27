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
  } else {
    //
  }

  ?>

</body>

</html>