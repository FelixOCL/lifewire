<?Php
#./php/upload.php
	include('./connect.php');
	// Where the file is going to be placed 
	$target_path = "../uploads/";
	$bareFile = $_FILES['uploadedfile']['name'];

	/* Add the original filename to our target path.  
	Result is "uploads/filename.extension" */
	$target_path = $target_path . basename( $bareFile);
	#echo $target_path;
	#print_r($_FILES['uploadedfile']);


	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	    #echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
	    #" has been uploaded";
	} else{
	    echo "ERROR UPLOADING!";
	    return;
	}

	$user	= $_POST['txtUser'];
	$myTitle = $_POST['txtTitle'];
	$myDescription = $_POST['txtDescription'];

	$myTitle = str_replace("'", "\'", $myTitle);
	$myDescription = str_replace("'", "\'", $myDescription);
	$myType = pathinfo($bareFile, PATHINFO_EXTENSION);

	$dateTime = new DateTime("now", new DateTimeZone('America/Toronto'));
	$mysqldate = $dateTime->format("Y-m-d H:i:s");

	//$myType = pathinfo($bareFile, PATHINFO_EXTENSION);


	$sql = "INSERT INTO `lwp_post` 
				(
					`lwp_user`,
					`lwp_title`, 
					`lwp_description`, 
					`lwp_timestamp`, 
					`lwp_name`,
					`lwp_type`
				)
			VALUES
				(
					'$user',
					'$myTitle', 
					'$myDescription', 
					'$mysqldate',
					'$bareFile',
					'$myType'
				)";

			  
	if($mysqli->query($sql) == TRUE)
	{
		return 0;
	}
	else
	{	
		echo "ERROR WRITING DB -> " . $mysqli->error;
	}


?>_