<?php 
	//function for responce in JSON format
	function response_msg($status, $status_msg, $data)
	{
		header("HTTP/1.1 $status $status_msg");
		
		$response['status']=$status;
		$response['status_message']=$status_msg;
		$response['character']=$data;

		$json_response = json_encode($response);
		echo $json_response;

	} 
?>