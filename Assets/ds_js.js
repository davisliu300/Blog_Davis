$('document').ready(function () { //when the document is ready
	$("#save_task").click(function () { //add click handler to save_task button

		var todoadd = $("#todo-add");
		var form_data = {
			subject: todoadd.find("input[name=subject]").val(),
			detail_contents : todoadd.find("textarea[name=detail_contents]").val(),
		} //get all the values from the form and add them to our data object for sending
		$.ajax({
			url : 'pages/modifying.php', //send our data to modifying.php
			data : form_data, //give it the form data
			dataType : 'json', //expect json data back
			cache : false, //do not let the response be cached
			method : 'POST', //use POST to send it
			success : function (response) { //and do something when the response comes back
				//success is achieved!
			}
		});

	});

	
	$("#display_refresh").click(function () { //add a click handler to our data display button
		$.ajax({
			url : 'actions/get.php', //get our data from the get.php file
			//dataType: 'json', //expect json data back from get.php
			dataType : 'json', //
			cache : false, //do not cache the result
			method : 'POST', //use the post method
			success : function (data) { //do something when we get data back
//				console.log("data : ", data);
				if (data.success) {
//					console.log("inside data.success ");
					$("#todo-list-container").html(data.html); //take the html object of the data object, and put it into the display container

				}
			}
		});
	});
	
	//var div_data = {unique_id:$('.container_div').attr('data-id') };
	//console.log($(this).parents('.todo-record').attr('data-id')
/*
	var temp = $('#todo-list-container').find('.todo-remove btn');	
	var temp = $('#todo-list-container > .todo-record');	
	console.log(temp);
*/	
	$('#todo-list-container').on('click', '.todo-remove > .btn', function () {
	//    $().click(function(){
	
//		console.log("this is ", $(this));
//		console.log("this is parent", $(this).parents('.todo-record'));
		
		var rowID = $(this).parents('.todo-record').attr('data-id');
		console.log("rowID is ",rowID);	

		var okToDelete = window.confirm("really to delete?");
		if(okToDelete){		
			$.ajax({
				url : 'actions/remove.php',
				cache : false,
				data: {id: rowID},
				method: 'POST',  //use the post method
				//          success: function(data){  //do something when we get data back
				//			console.log("data : ", data);

				success : function () {
					console.log("inside success function");
					console.log("This is been deleted",$(this));
	//				$('.todo-remove').remove(); //take the html object of the data object, and put it into the display container
					$("#display_refresh").click();
				}
			});
		}
	});
});