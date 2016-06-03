<?php 
	require_once realpath( dirname( __FILE__)) . '/../Slim/Slim.php';

	\Slim\Slim::registerAutoloader();

	// Slim instance
	$app = new \Slim\Slim();

	// Setting response type to JSON
	$app->response->headers->set('Content-Type', 'application/json');

	// Stats code constants
	$SUCCESS = 200;
	$FORBIDDEN = 403;
	$BAD_REQUEST= 400;

	/**
	 * Verifying required params posted or not
	 * @param Array of neccessary ajax parameters
	 * Returns if API endpoint is hit with missing paramaters
	 */
	function verifyRequiredParams($required_fields) {
		global $BAD_REQUEST;
		$app = \Slim\Slim::getInstance();
	    $error = false;
	    $error_fields = "";
	    $request_params = array();
	    $request_params = $_REQUEST;
	    // Handling PUT request params
	    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
	        parse_str($app->request()->getBody(), $request_params);
	    }
	    foreach ($required_fields as $field) {
	        if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
	            $error = true;
	            $error_fields .= $field . ', ';
	        }
	    }

	    if ($error) {
	        // Required field(s) are missing or empty
	        // Return Json with missing fields and bad request code
	        // of 400
	        $response = array();
	        $response["missing"] = substr($error_fields, 0, -2);
	        echoResponse($BAD_REQUEST, $response);
	        $app->stop();
	    }
	}

	/**
	 * Echoing json response to client
	 * @param String $status_code Http response code
	 * @param Int $response Json response
	 */
	function echoResponse($status_code, $response) {
	    $app = \Slim\Slim::getInstance();
	    // Http response code
	 	$app->response->setStatus($status_code);

	 	// Not sure if print_r or echo is better
	    echo json_encode($response);
	}

	/**
	 * Returns a request token based on version of app
	 * URL /get_token/:key
	 * Method - GET
	 * Params :key
	 */
	$app->get('/get_token/:key', function ($key) {
		// TODO
	});


 ?>
