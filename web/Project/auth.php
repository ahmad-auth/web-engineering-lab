<?php
    $page_title = "Authentication";

    require "./includes/config.php"; 
    require "./layouts/header.php";
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 form f1">
                <div class="header ">
                    <span class="header_logo">
                        <img src="<?php  echo $dir; ?>/img/lock.png" width="30" alt="">
                    </span>
                    <span class="header_name">Register</span>
                </div>
                <div class="main-form">
                    <form action="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon b1">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon b1">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                        </div>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon b1">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password">
                        </div>
                        
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon b1">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                        </div>

                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                            <label class="form-check-label grey" for="rememberCheck">I agree to the term and conditions</label>
                        </div>

                        <button type="submit" class="b1">Submit</button>
                        <div class="text-center mb-3">
                            <a href="#" class="grey">Already a member login </a>
                        </div>
                    </form>
                </div>
            </div>

        
            <div class="col-md-6 form f1">
                <div class="header b2 head2">
                    <span class="header_logo">
                        <img src="<?php  echo $dir; ?>/img/lock.png" width="30" alt="">
                    </span>
                    <span class="header_name">Login</span>
                </div>
                <div class="main-form">
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
            </div>
        </div>
    </div>

<?php require "./layouts/footer.php"; ?>
