<div class="container mt-5">
    <div class="shadow p-4 rounded" style="max-width: 600px; margin: 0 auto;">
        <h1 class="heading mb-4 text-center">Ask A Question</h1>

        <form action="./server/requests.php" method="post">
            <!-- Title Input -->
            <div class="mb-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter your question title" required>
            </div>

            <!-- Description Textarea -->
            <div class="mb-4">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Describe your question" rows="4" required></textarea>
            </div>

            <!-- Category Dropdown -->
            <div class="mb-4">
                <label for="category" class="form-label">Category</label>
                <?php include("category.php"); ?>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" name="ask" class="btn btn-primary w-100">Ask Question</button>
            </div>
        </form>
    </div>
</div>
