<div class="container mt-5">
    <div class="row">
        <!-- Main Column for Questions -->
        <div class="col-md-8 col-12 p-4 border rounded shadow-lg bg-light">
            <h1 class="heading mb-4">Questions</h1>

            <?php
                include("./common/db.php");
                if(isset($_GET["c-id"])){
                    $query="select * from questions where category_id=$cid";
                } else if(isset($_GET["u-id"])){
                    $query="select * from questions where user_id=$uid";
                } else if(isset($_GET["latest"])){
                    $query="select * from questions order by id desc";
                } else if(isset($_GET["search"])){
                    $query = "select * from questions where `title` LIKE '%$search%'";
                } else {
                    $query="select * from questions";
                }
                $result = $conn->query($query);
                foreach ($result as $row) {
                    $title = $row['title'];
                    $id = $row['id'];
                    echo "<div class='row question-list'>
                            <h4 class='my-question'><a href='?q-id=$id'>$title</a>";
                    echo isset($uid) ? "<a href='./server/requests.php?delete=$id'>Delete</a>" : NULL;
                    echo "</h4>
                          </div>";
                }
            ?>
        </div>
        
        <!-- Sidebar for Categories -->
        <div class="col-md-4 col-12 p-4 bg-light border rounded shadow-lg">
            <?php include('categorylist.php'); ?>
        </div>
    </div>
</div>
