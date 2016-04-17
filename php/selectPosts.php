<?Php
#Select_POSTS.php
	include('./connect.php');

	$sql = "SELECT 	lwp_id,lwp_title,lwp_description,lwp_timestamp,lwp_name, lwp_type
				FROM lwp_post
				WHERE lwp_show = true
				ORDER BY lwp_timestamp desc";
//echo $sql;
	if($result = mysqli_query($mysqli, $sql))
	{
		$titles = array();
		while ($row = $result->fetch_assoc()) 
		{
			$titles[] = array(
								'id' => $row['lwp_id'], 
								'title' => htmlentities($row['lwp_title']), 
								'description' => htmlspecialchars($row['lwp_description']), 
								'timestamp' => $row['lwp_timestamp'], 
								'name' => $row['lwp_name'],
								'type' => $row['lwp_type']
							);
		}
		echo json_encode($titles);
	}

	$mysqli->close();



?>