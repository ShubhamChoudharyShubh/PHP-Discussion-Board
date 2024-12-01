<!-- Login Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12 p-4 border rounded shadow-lg bg-light">
            <h1 class="heading text-center mb-4">Login</h1>

            <form action="./server/requests.php" method="post">

                <div class="mb-3">
                    <label for="email" class="form-label">User Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter user email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">User Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
                </div>

                <div class="d-grid">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
