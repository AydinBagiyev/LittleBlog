
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
				}
		});
	});
});

function renderHTML(data){
	var postsString = '';
	var mostUsedWordString = '';
	var middleString = '</div>';
						
						postInitialString =   '<div class="col-md-10 col-md-offset-1 resetFeatures">' + '<div id="divPost" class="col-md-9 well">' + '<div class="row">'	+ '<div class="col-md-9">'	+ '<p id="text">'+data[0].title+'</p>' + '</div>'	+ '<div id="divDate" class="col-md-3">' + '<p>' +data[0].date+ '</p>' + '</div>' + '</div>'	+ '<div class="col-md-6">'	+ '<img src="upload/' +data[0].image+ '" id="img300" class="img-responsive" alt="Responsive image">'+ '</div>'	+ '<div class="col-md-6">' + '<p>'+data[0].content+'</p>'	+ '</div>'	+ '<div class="col-md-6">'	+ '<p>Author:' +data[0].email+ '</p>' + '</div>' + '</div>';
						mostUsedWordString =  '<div class="col-md-3 well">' + '<div class="col-md-10 col-md-offset-2">' + '<h5>Most Used Words</h5>' + '</div>' + '<div class="col-md-2">'	+ '<p>1)</p>' + '</div>' + '<div class="col-md-9">'	+ '<p>alice(46)</p>' + '</div>'	+ '</div>'	+ '</div>';
	
	for(i=1; i< data.length; i++){
						postsString +=        '<div class="col-md-10 col-md-offset-1 resetFeatures">' + '<div id="divPost" class="col-md-9 well">' + '<div class="row">'	+ '<div class="col-md-9">'	+ '<p id="text">'+data[i].title+'</p>' + '</div>'	+ '<div id="divDate" class="col-md-3">' + '<p>' +data[i].date+ '</p>' + '</div>' + '</div>'	+ '<div class="col-md-6">'	+ '<img src="upload/' +data[i].image+ '" id="img300" class="img-responsive" alt="Responsive image">'+ '</div>'	+ '<div class="col-md-6">' + '<p>'+data[i].content+'</p>'	+ '</div>'	+ '<div class="col-md-6">'	+ '<p>Author:' +data[i].email+ '</p>' + '</div>' + '</div>' + '</div>';				
					};

					$('#rowPost').html(postInitialString+mostUsedWordString+middleString+postsString);

}

