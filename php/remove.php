<?Php
#./php/remove.php
	include('./connect.php');

	$myID = $_POST['txtID'];




	$target_path = "../uploads/";

	$sql = "UPDATE lwp_post
				SET lwp_show = false
				WHERE lwp_id = $myID";

	$file = "SELECT lwp_name, lwp_type
				FROM lwp_post
				WHERE lwp_id = $myID";

	if(mysqli_query($mysqli, $sql))
	{
		if($result = mysqli_query($mysqli, $file))
		{
			while($deleteFile = mysqli_fetch_field($result))
			{
				$type = json_decode($deleteFile->lwp_type);
				if($type == '')
				{
					return 0;
				}
				chown($target_path . $deleteFile->lwp_name,65534); //Insert an Invalid UserId to set to Nobody Owern; 666 is my standard for "Nobody" 
				$msg = $deleteFile->lwp_name;
			}
			unlink($target_path . $deleteFile['lwp_name']);

			$msg .= "FILE DELETED!";
		}
		else
		{
			$msg = "PROBLEM DELETING FILE!";
		}
		$msg .= "POST DELETED";	


	}
	else
	{
		$msg = "PROBLEM DELETING POST OR FILE!";
	    $msg = mysqli_error($mysqli, $sql);
	}
	$mysqli->close();

	echo $msg;
?>