<div class="container">
    <h1 class="heading">Question</h1>
    <div class="col-8">
    <?php
    include("./common/db.php");
    $query="select * from questions where id =$qid";
    $result=$conn->query($query);
    $row=$result->fetch_assoc();
    echo "<h4 class='margin-bottom-15 question-title'>Question : ".$row['title']."</h4>
    <p class='margin-bottom-15'>".$row['description']."</p>";
    ?>
    <textarea class="form-control margin-bottom-15" placeholder="Your answer..."></textarea>
    <button class="btn btn-primary">Write your answer</button>
</div>
</div>