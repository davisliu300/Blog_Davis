<?php 
session_start();
if(isset($_SESSION['userinfo'])){
	$user_info = $_SESSION['userinfo'];
//	echo "you've logged in as " . $_SESSION['userinfo']['adminName'];
}else{
//	echo "not logged in";
}


// require_once( 'includes/functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Davis Blogger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  <style> 
  

  </style>
</head>
<body>

<div class="container">
	<div class="container">
		<?php  include("pages/header.php");?>	
		<?php //include("pages/header2.php");?>	
	</div>
  <div class="row">
    <div class="col-sm-2">
      <h3>Column 1</h3>
	  <?php 
	  
		include_once('pages/archive.php');
		include_once('pages/ads.php');
	  ?>
    </div>
    <div class="col-sm-8">
      <h3>Actions</h3>
	  <div id = "todo-add"> 
		<form>
            <input class="form-control" type="text" name="subject" placeholder="Subject">
            <textarea class="form-control" name="detail_contents" placeholder="Things to blog"></textarea>
            <button type="button" id="save_task" class="btn btn-default glyphicon glyphicon-plus"></button>
		</form>
	  

		</div> 
	  
	  <div class = "display_blog">
	  
	  </div> 
	  
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	  
	  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-2">
      <h3>Advertise ment</h3>        
<?php
		
		include_once('pages/ads2.php');
	 ?> 

    </div>
  </div>
</div>



<link rel="stylesheet" href="Assets/ds_css.css">
  <script src="Assets/ds_js.js"></script>

</body>
</html>