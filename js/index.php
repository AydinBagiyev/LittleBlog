<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Index</title>

	<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- CssLocal -->
	<link rel="stylesheet" href="main.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container-fluid">
	     <div class="row">
	     	<div class="col-md-4 col-md-offset-4">
	     		<h1 id="h1">My Lovely Page</h1>
	     	</div>
	     </div>	
	     <div class="row">
	     	<div class="col-md-4 col-md-offset-4">
	     		<h3 id="h3">A totally Right Statement</h3>
	     	</div>
	     </div>	
	     <div class="row">
		     <div class="col-md-8 col-md-offset-1 boxForm well">
		     	<div class="col-md-4">
		     		<h1>My BlogChain</h1>
		     	</div>
				<div class="col-md-11 horizontalLine">
		    	 </div>
				<div class="col-md-8">
					<form class="form">
						  <div class="form-group">
						    <label for="title">Title</label>
						    <input type="text" class="form-control" id="title" placeholder="My post title">
						  </div>
						  <div class="form-group">
						    <label for="content">Content</label>
						    <input type="text" class="form-control" id="content" placeholder="Here all my important post text!">
						  </div>
						  <div class="form-group">
						    <label for="authormail">Author Email</label>
						    <input type="email" class="form-control" id="authormail" placeholder="Email Address">
						  </div>
						  <div class="form-group">
						    <label for="chooseImage">Choose Image</label>
						    <input type="file" id="chooseImage">
						  </div>
					</form>	
				</div>

				<div id="btnSavePost" class="col-md-4">
					<div class="btn-group">
					  <button type="button" id="id" class="btn btn-success">Save Post</button>
					</div>
				</div>  

		     </div>
	     </div>	
	     <button class="btn btn-success" id="but">click</button>
	     <div class="col-md-12" id="test">
	     	
	     </div>

	     <div id="rowPost" class="row">
	     	<div class="col-md-12 col-md-offset-1 main">	
		     	<div id="divPost" class="col-md-6 well">
			     	<div class="row">
			     		<div class="col-md-10">	
			     			<p id="text">Heyat kecerken semalari altindan, o butun quvvesiyle gulmeye calisirdi.</p>
						</div>
			     		<div id="date" class="col-md-2">
			     			<p >01/12/2018</p>
			     		</div>
		     		</div>		
		     		<div class="row">
		     			<div class="col-md-6">
		     				<img src="http://via.placeholder.com/350x350"" class="img-responsive" alt="Responsive image">
		     			</div>
		     			<div class="col-md-6"	 >
		     				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		     			</div>
		     			<div class="col-md-8">
		     				<p>Author: aliquip ex ea commodo consequat.</p>
		     			</div>
		     		</div>
	     		</div>
	     		<div class="col-md-2 well">
	     			<div class="col-md-10 col-md-offset-2">
		     			<h5>Most Used Words</h5>
		     		</div>
		     		<div class="col-md-2">
		     			<p>1)</p>
		     		</div>
		     		<div class="col-md-9">
		     			<p>  alice(46)</p>
		     		</div>
		     	</div>
	     	</div>		

		</div>
     </div>

	<!-- Custom JavaScript -->
	<script src="js/main.js" ></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>