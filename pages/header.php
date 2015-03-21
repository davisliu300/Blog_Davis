

<div class = "container">
	<div class = "col-sm-2">
		<img id = "headerImg"src = "./images/sj_sharks.jpg" > 
	</div> 
	
 
	
		
		<ul class="col-sm-6 nav navbar-nav nav navbar-nav  collapse navbar-collapse">
			<li>
				<a href="#">Home</a>
			</li>

			
			
<?php 
			if(isset($_SESSION['userinfo'])){
?>		
				<li><a href = "./pages/logout.php">Logout</a></li>
<?php  	
			}else {
?>
				<li><a href = "./pages/login.php">Login</a></li>
<?php   
			}
	?>
			
			
			
			
			
			
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
		

	<div class="col-sm-5">
		<form  class = "form-inline" action = "login.php" method = "POST">
			<div class= "form-group">
				<input name = "username" type = "text" placeholder = "user name">
				<input name = "password" type = "password" placeholder= "password">
				<button name = "auth_btn" class = "btn btn-default">Sign in </button> 
			</div>
		</form> 
	
	</div> 
</div> 
