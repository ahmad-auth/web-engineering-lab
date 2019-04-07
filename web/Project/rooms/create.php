<?php
    $page_title = "Create Room";
    $page = "room.create";

    require __DIR__ . "/../includes/config.php"; 
    require __DIR__ . "/../layouts/header.php";
?>
    <div class="container mt-5">
        <div class="row">
            <form action="" method="POST" class="col-md-6 offset-md-3">
                <h3>Create Room</h3>
                <hr>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text icon">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text icon">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberCheck1">
                    <label class="form-check-label grey" for="rememberCheck1">Remember me</label>
                    <a href="#" class="text-dark" style="float: right;">Forget Password</a>
                </div>

                <div class="clearfix"></div>

                <button class="btn btn-dark" style="width: 100%;" type="submit">Login</button>

            </form>
        </div>
    </div>

<?php require __DIR__ . "/../layouts/footer.php"; ?>
