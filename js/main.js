
// $(document).ready(function needDate(){
// 	var date = new Date();
// 	var d = new Date();
// 	var curr_date = d.getDate();
// 	var curr_month = d.getMonth();
// 	curr_month++;
// 	var curr_year = d.getFullYear();
// 	return curr_month + "/" + curr_date + "/" + curr_year;
// });


$(document).ready(function(){
// Attach a submit handler to the form
	$('#formSubmit').submit(function(event){

	// Stop form from submitting normally
	event.preventDefault();

	 var formdata = new FormData($(this)[0]);
	 // formdata.append('date', fullDate);
	$.ajax({
		url: 'controller.php', // Url to which the request is send
		type: "POST",     // Type of request to be send, called as method
		data: formdata, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		success: function(data)   // A function to be called if request succeeds
				{	
					
					alert(data);

					// $('#data').html(data);
				}
		});
	});
});

