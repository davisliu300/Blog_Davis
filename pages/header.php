<?php
//session_start();
if(isset($_SESSION['userinfo'])){
        $user_info = $_SESSION['userinfo'];
}else{

}
?>
<div class="jumbotron">
	<div id="headerContainer">
		<div class="col-sm-2"><img id="headerImg" src="./images/sj_sharks.jpg"></div>

		<div class="col-sm-7" id="nav-wrapper" data-spy="affix" data-offset-top="400">
			<div id="nav" class="navbar">
				<div class="navbar-inner">
					<button href="#hideForm%20#hideForm2" class="btn btn-navbar" data-toggle="collapse" data-target=
					".nav-collapse">Show Menu</button>

					<div style="display:inline-block" class="mediaNoShow">
						<div class="nav-collapse collapse in" id="hideForm2">
							<form class="form-inline form_inline_diy" action="pages/login.php" method="post">
								<input name="username" type="text" placeholder="user name"> <input name="password" type=
								"password" placeholder="password"> <button name="auth_btn" class="btn btn-default">Sing
								in</button>
							</form>
						</div>
					</div>

					<div class="nav-collapse collapse">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li>
								<a href="#">Home</a>
							</li><?php
															if(isset($_SESSION['userinfo'])){
										?>

							<li>
								<a href="./pages/logout.php">Logout</a>
							</li><?php   
														}else {
										?>

							<li>
								<a href="./pages/login.php">Login</a>
							</li><?php   
															}
										?>

							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div><!-- navbar-inner -->

				<div id="hideForm" class="nav-collapse collapse">
					<form class="form-inline" action="pages/login.php" method="post">
						<div class="form-group">
							<input name="username" type="text" placeholder="user name"> <input name="password" type="password"
							placeholder="password">
						</div><button name="auth_btn" class="btn btn-default">Sign in</button>
					</form>
				</div>
			</div><!-- navbar -->
		</div>

		<div class="col-sm-3">
			<h3 id="headerH3">Welcome to Blog</h3>

			<div>
				<?php 

				if(isset($_SESSION['userinfo'])){
					$user_info = $_SESSION['userinfo'];
					echo "you've logged in as " . $_SESSION['userinfo']['adminName'];
				}else {
					echo "Sign in to Blog!";
				}

				?>
			</div>
		</div>
	</div>
</div>

