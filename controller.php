<?php

if( isset($_POST) && isset($_FILES)){

	if (isset($_FILES['image']['type']))
	{
		$validextensions = array('jpg', 'jpeg', 'png');
		$temporary = explode(".", $_FILES["image"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/jpg") || ($_FILES["image"]["type"] == "image/jpeg"))&& in_array($file_extension, $validextensions))
		{
			if ($_FILES["image"]["error"] > 0)
				{
				echo "Return Code: " . $_FILES["image"]["error"];
				}
				else
				{
				$sourcePath = $_FILES['image']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "upload/".$_FILES['image']['name']; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				}
		}
		else
		{
		echo "Invalid file Type";
		}
	}


	if(file_exists('json/formData.json')){
		$current_data = file_get_contents('json/formData.json');
		$array_data = json_decode($current_data, true);
		$extra = array(
			'title' => isset($_POST['title']) ? $_POST['title'] : '',
			'content' => isset($_POST['content']) ? $_POST['content'] : '',
			'email' => isset($_POST['email']) ? $_POST['email'] : '',
			'image' => isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '',
			'date' => date('d-m-Y H:i')
			);
		$array_data[] = $extra;
		$final_array = json_encode($array_data);
			if(file_put_contents('json/formData.json', $final_array)){
			}else{
				echo 'File is Mile';
			}
	}else{
		echo "File doesn't";
	}
// Returning JSON object
	$return_data = file_get_contents('json/formData.json');
	echo $return_data;
}

?>