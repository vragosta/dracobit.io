<?php
 
	require_once realpath( dirname( __FILE__)) . '/../Slim/Slim.php';
	require_once realpath( dirname( __FILE__)) . '/../themes/dracobit-twentysixteen/inc/database.php';
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
	 * Checks API Key, if invalid, returns false
	 * Passed as middleware for every endpoint expect init_check_key
	 *
	 * @param String - key
	 * @return Boolean 
	 */
	function validateAPIkey(){
		$global $FORBIDDEN;
		$app = \Slim\Slim::getInstance();
		//TODO: Check token
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
	 * Initial check of the API key
	 * This will get called once in the very start of the app
	 * 
	 * URL /init_check_key/
	 * Method - GET
	 * Params none
	 */
	$app->get('/init_check_key/', function() use ($app) {
		global $SUCCESS, $FORBIDDEN;
		if (validateAPIkey($app->request->headers->get('key')))
			echoResponse($SUCCESS, array('valid' => 'true'));
		else
			echoResponse($FORBIDDEN, array('valid' => 'false'));
	});


	/**
	 * Checks if user is logged in, or if there password is changed
	 * Returns array with true or false on login and password changed 
	 * and user key (if both are true)
	 *
	 * URL /login_status/
	 * Method - GET
	 * Headers - key
	 * Params - username
	 * @return Array
	 */
	$app->post('/login_status', function() use ($app) {
		// if (validateAPIkey($app->request->headers->get('key'))){
		// 	//TODO: check login status
		// }
	});


	/**
	 * Retreives the unique userKey based on the userID
	 *
	 * URL /get_user_key/
	 * Method - POST
	 * Headers - key
	 * Params - userID
	 */
	$app->post('/get_user_key' function() use ($app){
	});


	$app->run();
 ?>
