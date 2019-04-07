<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?php echo $dir; ?>/"><?php echo $site_title; ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<?php if(isset($auth_check) && $auth_check): ?>
					<li class="nav-item <?php if($page == "dashboard"){ echo "active";} ?>">
						<a class="nav-link" href="<?php echo $dir; ?>/dashboard.php">Dashboard <?php if($page == "dashboard"){ echo '<span class="sr-only">(current)</span>'; } ?></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							@admin
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo $dir; ?>/settings.php">Settings</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo $dir; ?>/logout.php">Logout</a>
						</div>
					</li>
				<?php else: ?>
					<li class="nav-item <?php if($page == "home"){ echo "active";} ?>">
						<a class="nav-link" href="<?php echo $dir; ?>/index.php">Home <?php if($page == "home"){ echo '<span class="sr-only">(current)</span>'; } ?></a>
					</li>
					<li class="nav-item <?php if($page == "login"){ echo "active";} ?>">
						<a class="nav-link" href="<?php echo $dir; ?>/login.php">Login <?php if($page == "login"){ echo '<span class="sr-only">(current)</span>'; } ?></a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>