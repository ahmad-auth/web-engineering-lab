<?php
    $page_title = "Authentication";

    require "./includes/config.php"; 
    require "./layouts/header.php";
?>
    <div class="container mt-5">
        <form action="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text icon b2">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text icon b2">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password">
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberCheck1">
                <label class="form-check-label grey" for="rememberCheck1">Remember me</label>
                <a href="#" class="grey" style="float: right;">Forget Password</a>
            </div>

            <div class="clearfix"></div>

            <button type="submit" class="b2">Submit</button>
            <div class="line"></div>
            <div class="text-center">
                <label for="" class=" grey " st>Or you can login with one of following</label>
            </div>
            <div class="social-link" >
                <div class="facebook"><a href="https://wwww.facebook.com" target="_blank"><img src="<?php  echo $dir; ?>/img/facebook.png" width="30" alt=""></a></div>
                <div class="twitter"><a href="https://wwww.twitter.com" target="_blank"> <img src="<?php  echo $dir; ?>/img/tw.png" width="30" alt=""></a></div>
                <div class="google"><a href="https://wwww.google.com" target="_blank"><img src="<?php  echo $dir; ?>/img/google.png" width="30" alt=""></a></div>
            </div>
            <div class="text-center">
                <label for="" class="grey" >Don't Have account? <a href="#" class="grey">Signup Now</a></label>
            </div>

        </form>
    </div>

<?php require "./layouts/footer.php"; ?>
