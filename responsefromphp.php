<?php

    $input = json_decode(file_get_contents('php://input'), true);
     $response = new \stdClass();
	 	$response->fulfillmentText= "It's ".date('h:i A'). " Now!";
    echo json_encode($response,JSON_FORCE_OBJECT); 
    ?>
