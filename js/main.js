
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
	$.ajax({
		url: 'controller.php', // Url to which the request is send
		type: "POST",     // Type of request to be send, called as method
		data: formdata, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		success: function(data)   // A function to be called if request succeeds
				{	
					$renderenData = JSON.parse(data);
					renderHTML($renderenData);
					alert('responded');
				}
		});
	});
});

function renderHTML(data){
	var htmlString = "";

	$.each(data, function(i, v){
						htmlString += '<div class="col-md-10 col-md-offset-1 resetFeatures">' + '<div id="divPost" class="col-md-9 well">' + '<div class="row">'	+ '<div class="col-md-9">'	+ '<p id="text">'+v.title+'</p>' + '</div>'	+ '<div id="divDate" class="col-md-3">' + '<p>' +v.date+ '</p>' + '</div>' + '</div>'	+ '<div class="col-md-6">'	+ '<img src="upload/' +v.image+ '" id="img300" class="img-responsive" alt="Responsive image">'+ '</div>'	+ '<div class="col-md-6">' + '<p>'+v.content+'</p>'	+ '</div>'	+ '<div class="col-md-6">'	+ '<p>Author:' +v.email+ '</p>' + '</div>' + '</div>' + '<div class="col-md-3 well">' + '<div class="col-md-10 col-md-offset-2">' + '<h5>Most Used Words</h5>' + '</div>' + '<div class="col-md-2">'	+ '<p>1)</p>' + '</div>' + '<div class="col-md-9">'	+ '<p>alice(46)</p>' + '</div>'	+ '</div>'	+ '</div>' + '</div>';				
					});
	
					$('#rowPost').html(htmlString);

}

