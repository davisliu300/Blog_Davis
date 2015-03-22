
<?php
//  get.php
	$con = mysqli_connect('localhost', 'root','','blogger');
    $sql = 'SELECT * FROM blogger';
    $results = mysqli_query($con, $sql);
    
    $output=[];
//    var_dump($results);
    $html='<div class="row row-header">
            <div class="col-md-2">Subject</div>
            <div class="col-md-2">Time</div>
            <div class="col-md-7">Details</div>
			<div class="col-md-1">X</div>
        </div>';
		
	
    while($todo_row = mysqli_fetch_assoc($results)){
        
        $id = $todo_row['id'];
        $subject = $todo_row['subject'];
        $timestamp = $todo_row['timestamp'];
        $details = $todo_row['detail_contents'];
        
        $todo_item_html = 
                "<div class='row todo-record' data-id='$id'>
                    <div class='col-md-2 todo-title'>$subject</div>
                    <div class='col-md-2 todo-date'>".date('Y-m-d h:i:sa')."</div>
                    <div class='col-md-7 todo-details'>".nl2br($details)."</div>
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