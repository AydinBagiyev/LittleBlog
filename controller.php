<?php

if( isset($_POST) && isset($_FILES)){

// include 'writeJSON.php';
$myObj = new \stdClass();

$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

// $myJSON = json_encode($myObj);
// $arrayJSON = array($myJSON );
// array_push($arrayJSON, 'sdf');

// $arrayName = array('dsfa' =>'dsaf');
// $inp = file_get_contents('json/animal.json');
// $tempArray = json_encode($inp);
// // array_push($tempArray, $arrayName);
// $arrayJSON = json_encode($tempArray);
// file_put_contents('json/animal.json', $arrayJSON);

$fp = fopen('json/animal.json', 'w');
fwrite($fp, json_encode($myObj));
fclose($fp);

// print_r($tempArray);

// if (isset($_FILES['image']['type']))
// {
// 	$validextensions = array('jpg', 'jpeg', 'png');
// 	$temporary = explode(".", $_FILES["image"]["name"]);
// 	$file_extension = end($temporary);
// 	if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg"))&& in_array($file_extension, $validextensions))
// 	{
// 		if ($_FILES["image"]["error"] > 0)
// 			{
// 			echo "Return Code: " . $_FILES["image"]["error"];
// 			}
// 			else
// 			{
// 			$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
// 			$targetPath = "upload/".$_FILES['image']['name']; // Target path where file is to be stored
// 			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
// 			}
// 	}
// 	else
// 	{
// 	echo "Invalid file Size or Type";
// 	}
// }

// echo '
// 	     <div id="rowPost" class="row">
// 	     <div class="col-md-10 col-md-offset-1 resetFeatures">
// 		     	<div id="divPost" class="col-md-9 well">
// 			     	<div class="row">
// 			     		<div class="col-md-10">	
// 			     			<p id="text">'.$_POST['title'].'</p>
// 						</div>
// 			     		<div id="divDate" class="col-md-2">
// 			     			<p >01/12/2018</p>
// 			     		</div>
// 		     		</div>
// 		     			<div class="col-md-6">
// 		     				<img src="upload/'.$_FILES['image']['name']. '" id="img300" class="img-responsive" alt="Responsive image">
// 		     			</div>
// 		     			<div class="col-md-6"	 >
// 		     				<p>' .$_POST['content']. '</p>
// 		     			</div>
// 		     			<div class="col-md-6">
// 		     				<p>Author:' .$_POST['email']. '></p>
// 		     			</div>
// 		     		</div>
// 	     		<div class="col-md-3 well">
// 	     			<div class="col-md-10 col-md-offset-2">
// 		     			<h5>Most Used Words</h5>
// 		     		</div>
// 		     		<div class="col-md-2">
// 		     			<p>1)</p>
// 		     		</div>
// 		     		<div class="col-md-9">
// 		     			<p>  alice(46)</p>
// 		     		</div>
// 		     	</div>
// 	     	</div>		

// 		</div>
// ';
}


?>