<?php
	header("Content-Type:application/json");
	include 'feedback.php';
	include 'output.php';

	//First take an request
	if (!empty($_GET['name'])) 
	{
		$char = $_GET['name'];
		$data = get_data($char);

		if (empty($data)) 
		{
			response_msg(200, "Not Found", NULL);
		}
		else
		{
			response_msg(200, "Found", $data);	
		}
	}
	else
	{
		response_msg(400, "Error", NULL);	
	}
	
?>