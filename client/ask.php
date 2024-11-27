<div class="container">
    <h1 class="heading">Ask A Questions</h1>

    <form action="./server/requests.php" method="post">

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="email" class="form-control" id="title" placeholder="Enter Questions">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Questions"></textarea>
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="category" class="form-label">Category</label>
    <?php 
     include("category.php");
    ?>
  </div>
  
  <div class="col-6 offset-sm-3">
     <button type="submit" name="login" class="btn btn-primary">Login</button>
  </div>

</form>

</div>