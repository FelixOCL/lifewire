<?Php
#./php/upload.php
	include('./connect.php');
	
	$user	= $_POST['txtUser'];
	$myTitle = $_POST['txtTitle'];
	$myDescription = $_POST['txtDescription'];

	$myTitle = str_replace("'", "\'", $myTitle);
	$myDescription = str_replace("'", "\'", $myDescription);

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
					'',
					''
				)";

			echo $sql;  
	if($mysqli->query($sql) == TRUE)
	{
		return 0;
	}
	else
	{	
		echo "ERROR WRITING DB -> " . $mysqli->error;
	}


?>_