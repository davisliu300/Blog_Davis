<?php //add

	$con = mysqli_connect("localhost", "root", "", "blogger");
	$subject = $_POST['subject'];
	$currentDate = date('Y-m-d h:i:sa');
	$detail_contents = $_POST['detail_contents'];	
	$query = 'INSERT INTO blogger (`subject`, `detail_contents`, `timestamp`) VALUES (';
	// `timestamp`) VALUES (';
	
	$query .= '"'.$subject.'",';
	$query .= '"'.$detail_contents.'",';
	$query .= '"'.$currentDate.'")';    
	
	$result = mysqli_query($con, $query);
	
?>

<?php
//    get.php
//    $con = mysqli_connect('localhost', 'root','','if_db');
    $sql = 'SELECT * FROM blogger';
    $results = mysqli_query($con, $sql);
    
    $output=[];
//    var_dump($results);
    $html='<div class="row row-header">
            <div class="col-md-4">Title</div>
            <div class="col-md-4">Date</div>
            <div class="col-md-4">Details</div>
        </div>';
		
	
    while($todo_row = mysqli_fetch_assoc($results)){
        
        $id = $todo_row['id'];
        $subject = $todo_row['subject'];
        $timestamp = $todo_row['timestamp'];
        $details = $todo_row['detail_contents'];
        
        $todo_item_html = 
                "<div class='row todo-record' data-id='$id'>
                    <div class='col-md-3 todo-title'>$subject</div>
                    <div class='col-md-4 todo-date'>$currentDate</div>
                    <div class='col-md-4 todo-details'>".nl2br($details)."</div>
					<div class='col-md-1 todo-remove'>"."<button class = 'btn btn-danger'>X</button>"."</div>
                </div>";
            $html.=$todo_item_html;
    }
   	if(mysqli_num_rows($results) > 0){
        $output=['success'=>true, 'html'=>$html];
//		echo ('You see me in ifstatement');
    }else{
        $output=['success'=>false, 'message'=>'No todo records!'];
    }
	
//	print_r($output['html']);
    echo json_encode($output);
//	print_r(json_encode($output));
//	echo ('you should see me at the end of the file?!!!!');
?>