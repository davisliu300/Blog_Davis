
<?php
//  get.php
	$con = mysqli_connect('localhost', 'root','','blogger');
    $sql = 'SELECT * FROM blogger ORDER BY `timestamp` DESC';
    $results = mysqli_query($con, $sql);
    
    $output=[];
//    var_dump($results);
    $html='<div class="row row-header">
            <div class="col-md-2 btn btn-default" disabled = "disabled">Subject</div>
            <div class="col-md-2 btn btn-default" disabled = "disabled">Time</div>
            <div class="col-md-7 btn btn-default" disabled = "disabled">Details</div>
			<div class="col-md-1"><button class = "btn btn-info" disabled = "disabled">Info</button></div> <hr> 
        </div>';
		
	
    while($todo_row = mysqli_fetch_assoc($results)){
        
        $id = $todo_row['id'];
        $subject = $todo_row['subject'];
		$modifiedDate = $todo_row['timestamp'];
        $timestamp = $todo_row['timestamp'];
        $details = $todo_row['detail_contents'];
        
        $todo_item_html = 
                "<div class='row todo-record' data-id='$id'>
                    <div class='col-md-2 todo-title'>$subject</div>
                    <div class='col-md-2 todo-date'>$modifiedDate</div>
                    <div class='col-md-7 todo-details'>".nl2br($details)."</div>
					<div class='col-md-1 todo-modify center-block'>"."<button class = 'btn btn-danger btn-sm del_blog'>X</button> <button type='button' class='btn btn-success btn-sm view_blog'>V</button>"."</div>
                </div> <hr>  ";
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