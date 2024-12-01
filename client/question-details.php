<div class="container mt-5">
    <div class="row">
        <!-- Main Column for Question Details -->
        <div class="col-md-8 col-12 p-4 border rounded shadow-lg bg-light">
            <h1 class="heading mb-4">Question</h1>

            <?php
                include("./common/db.php");
                $query="select * from questions where id =$qid";
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                $cid=$row['category_id'];
                echo "<h4 class='margin-bottom-15 question-title'>Question: ".$row['title']."</h4>
                      <p class='margin-bottom-15'>".$row['description']."</p>";
                include("answers.php");
            ?>

            <form action="./server/requests.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <textarea name="answer" class="form-control margin-bottom-15" placeholder="Your answer..."></textarea>
                <button class="btn btn-primary">Write your answer</button>
            </form>
        </div>

        <!-- Sidebar for Related Questions -->
        <div class="col-md-4 col-12 p-4 bg-light border rounded shadow-lg">
            <?php
                $categoryquery="select name from category where id=$cid";
                $categoryresult=$conn->query($categoryquery);
                $categoryRow=$categoryresult->fetch_assoc();
                echo "<h1>".ucfirst($categoryRow['name'])."</h1>";

                $query="select * from questions where category_id=$cid and id!=$qid";
                $result=$conn->query($query);
                foreach($result as $row){
                    $id=$row['id'];
                    $title=$row['title'];
                    echo "<div class='question-list'><h4><a href='?q-id=$id'>$title</a></h4></div>";
                }
            ?>
        </div>
    </div>
</div>
