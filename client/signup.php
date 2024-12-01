<!-- Signup Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12 p-4 border rounded shadow-lg bg-light">
            <h1 class="heading text-center mb-4">Signup</h1>

            <form method="post" action="./server/requests.php">

                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">User Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter user email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">User Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter user password">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">User Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter user address">
                </div>

                <div class="d-grid">
                    <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                </div>

            </form>
        </div>
    </div>
</div>