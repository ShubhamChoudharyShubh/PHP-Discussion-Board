<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/logo.png" alt="Logo" class="logo-img">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="?latest=true">Latest Questions</a>
        </li>

        <?php if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
          
          <li class="nav-item">
            <a class="nav-link text-white" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?u-id=<?php echo $_SESSION['user']['user_id']?>">My Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./server/requests.php?logout=true">Logout</a>
          </li>
         
        <?php } ?>

        <?php if (!isset($_SESSION['user']) || !isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>

      </ul>
      <form class="d-flex" action="">
       <input class="form-control me-2" name="search" type="search" placeholder="Search Questions">
       <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
