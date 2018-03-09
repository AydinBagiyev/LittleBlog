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
     <div class="container-fluid s">
	     <div class="row">
	     	<div class="col-md-4 col-md-offset-4">
	     		<h1 id="h1Title">My Lovely Page</h1>
	     	</div>
	     </div>	
	     <div class="row">
	     	<div class="col-md-4 col-md-offset-4">
	     		<h3 id="h3Sub_Title">A totally Right Statement</h3>
	     	</div>
	     </div>	

<!--Line1  -->
	     <div id="divLine1" class="row resetFeatures"></div>
	     <div class="row">

<!-- divForm -->
		     <div id="divForm" class="col-md-10 col-md-offset-1 well resetFeatures">
		     	<div class="col-md-4">
		     		<h1 class="textFormat" >My BlogChain</h1>
		     	</div>
<!-- Line2 -->
				<div id="divLine2" class="col-md-12"></div>
				<div class="col-md-8">

					<form id="formSubmit" class="form" action="controller.php" method="POST" >
						  <div class="form-group">
						    <label for="title">Title</label>
						    <input type="text" class="form-control" name="title" id="title" placeholder="My post title" required>
						  </div>
						  <div class="form-group">
						    <label for="content">Content</label>
						    <textarea class="form-control" id="content" name="content" placeholder="Here all my important post text!" name="content" required></textarea>
						  </div>
						  <div class="form-group">
						    <label for="authormail">Author Email</label>
						    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
						  </div>
						  <div class="form-group">
						    <label for="image">Choose Image</label>
						    <input type="file" name="image" id="image" required>
						  </div>
						   <div class="form-group col-md-4">
						    <input type="submit" id="submit" class="btn btn-success" name="submit" value="Save Post">
						  </div>
					</form>	

				</div> 
		     </div>
		     <div class="row resetFeatures" id="data"></div>
	     </div>
	     
     </div>

	<!-- Custom JavaScript -->
	<script src="js/main.js" ></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>