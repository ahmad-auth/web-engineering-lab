<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header("Location: ./dashboard.php");
   }

    $page_title = "Authentication";
    $page = "login";

    require __DIR__ . "/includes/config.php"; 
    require __DIR__ . "/layouts/header.php";
?>
    <div class="container mt-5">
        <div class="row">
            <form action="" method="POST" class="col-md-6 offset-md-3">
                <h3>Login</h3>
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

                <!-- <div class="social-link" >
                    <div class="facebook"><a href="https://wwww.facebook.com" target="_blank"><img src="<?php  echo $dir; ?>/img/facebook.png" width="30" alt=""></a></div>
                    <div class="twitter"><a href="https://wwww.twitter.com" target="_blank"> <img src="<?php  echo $dir; ?>/img/tw.png" width="30" alt=""></a></div>
                    <div class="google"><a href="https://wwww.google.com" target="_blank"><img src="<?php  echo $dir; ?>/img/google.png" width="30" alt=""></a></div>
                </div> -->

                <div class="text-center mt-4">
                    <label for="" class="grey" >Don't Have account? <a href="#" class="grey">Signup Now</a></label>
                </div>

            </form>
        </div>
    </div>

<?php require __DIR__ . "/layouts/footer.php"; ?>
