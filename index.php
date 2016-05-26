<?php
include("methods.php");
header("Content-Type:application/json");
    
    //procces request
	if (!empty($_GET['method'])) {
		$result = $_GET['method']();
        if (!empty($result)) {
            deliver_response("succesfull",$result);
        }
	}
    else {
    	deliver_response("failed",null);
    }

    //procces responde
    function deliver_response($status_message,$data){
    	header("HTTP/1.1  $status_message");

    	$response['status_message']=$status_message;
    	$response['data']=$data;

    	$json_response=json_encode($response);
    	echo $json_response;
    }
?>