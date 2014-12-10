<?php
	$target_dir  = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOK	 = 1;

	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	// Check if image file is an actual image
	if(isset($_POST["submit"])){
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

		if($check !== false){
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOK = 1;
		} else {
			echo "File is not an image.";
			$uploadOK = 0;
		}
	}

	// Check if file already exists
	if(file_exists($target_file)){
		echo "Sorry but the file already exists.";
		$uploadOK = 0;
	}

	// Check file size
	if($_FILES["fileToUpload"]["size"] > 500000){
		echo "The file is too large.";
		$uploadOK = 0;
	}

	// Filter file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif") {
		echo "Unfortunately, only JPG, JPEG, PNG and GIF files are allowed";
		$uploadOK = 0;
	}

	// Check if the upload is good to go
	if ($uploadOK == 0){
		echo "Unfortunately, your file wasn't uploaded.";
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
			echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
		} else {
			echo "There was an error uploading your file.";
		}
	}
?>