<?php
    $page_title = "Home";
    $page = "home";

    require "./includes/config.php"; 
    require "./layouts/header.php";
?>
    <div class="jumbotron">
        <div class="container">
            <h1>Hostel Management System</h1>
            <p>A mini project which helps to you to manage hostel rooms.</p>
        </div>
    </div>

    <div class="container">
        <h3 class="mt-5">Group Members</h3>
        <hr>
        <div>
            <ul>
                <li>Muhammad Abdullah (FA16-BSE-057)</li>
                <li>Muhammad Ahmad (FA16-BSE-068)</li>
            </ul>
        </div>
        <h3 class="mt-5">Sitemap</h3>
        <hr>
        <div>
            <ul>
                <li><a href="<?php echo $dir; ?>">Homepage</a></li>
                <li><a href="<?php echo $dir; ?>/login">Login</a></li>
                <li><a href="<?php echo $dir; ?>/dashboard">Dashboard</a></li>
            </ul>
        </div>
        <h3 class="mt-5">Technologies</h3>
        <hr>
        <div class="row">
            <div class="col">
                <h5>FrontEnd</h5>
                <ul>
                    <li>Bootstrap 4</li>
                    <li>JQuery</li>
                    <li>Select 2</li>
                </ul>
            </div>
            <div class="col">
                <h5>BackEnd</h5>
                <ul>
                    <li>Core PHP</li>
                    <li>MySQL</li>
                </ul>
            </div>
        </div>
        <h3 class="mt-5">Source Code</h3>
        <hr>
        <a href="https://github.com/abdullahnaseer/web-engineering-lab/tree/master/web/Project">https://github.com/abdullahnaseer/web-engineering-lab/tree/master/web/Project</a>
    </div>
<?php
    require "./layouts/footer.php";
?>