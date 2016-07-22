<?php

	require_once realpath( dirname( __FILE__)) . '/app/Slim/Slim.php';
	require_once realpath( dirname( __FILE__)) . '/../api-code/database.php';
	require_once realpath( dirname( __FILE__)) . '/../api-code/keyVersions.php';
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
	 *
	 * @param String - key
	 * @return Boolean 
	 */
	function validateAPIkey($key){
		return $key == API_KEY\getKey();
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
		global $SUCCESS, $FORBIDDEN;
		// check API Key first
		if (validateAPIkey($app->request->headers->get('key'))){
			verifyRequiredParams(array('username'));
			$username = $app->request->post('username');

			// ensure user exists
			if (DatabaseUtil\does_user_exist($username)){
				$user_id = DatabaseUtil\get_user_id_from_name($username);

				//check if theyre logged in
				if(DatabaseUtil\is_logged_in($user_id)){
					if(DatabaseUtil\is_password_changed($user_id)){
						echoResponse($SUCCESS, array('login' => 'true', 'password' => 'same', 'userexists' => 'true'));
					}
					// logged in but password was changed
					echoResponse($SUCCESS, array('login' => 'true', 'password' => 'changed', 'userexists' => 'true'));
				}
				
				// not logged in
				echoResponse($SUCCESS, array('login' => 'false', 'password' => 'N/A', 'userexists' => 'true'))	
			}
			// user doesnt exist
			echoResponse($SUCCESS, array('login' => 'false', 'password' => 'N/A', 'userexists' => 'false'));	
		}
		else{
			// invalid api key
			echoResponse($FORBIDDEN, array('valid' => 'false'));
		}
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
		global $SUCCESS, $FORBIDDEN;
		// check API key first
		if (validateAPIkey($app->request->headers->get('key'))){
			verifyRequiredParams('user_id');
			$user_id = $app->request->post('user_id');
			$user_key = DatabaseUtil\get_user_key($user_id);
			echoResponse($SUCCESS, array('user_key' => $user_key));
		}
		echoResponse($FORBIDDEN, array('valid' => 'false'));
	});


	$app->run();
 ?>
