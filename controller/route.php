<?php

require_once './model/database-query.php';

class Route extends AccountSession
{
	
	protected static $pages = [
		'home',
		'login',
		'register',
		'forgot-password'
	];

	protected static $pageSettings = [
		'requireLogin' => [
			'home'
		],

		'requireNoLogin'=>[
			'login',
			'register',
			'forgot-password'
		]
	];

	function __construct()
	{		
	  global $DB;
	  	
	  if (in_array(request, Route::$pages)) {

	  	 $message  = @$_GET['msg'];
	  	 $disabled = isset($_GET['disabled']) ? 'disabled' : '';

	  	 if ( in_array(request, Route::$pageSettings['requireLogin']) ) {
	  	 	if (AccountSession::isActive()) {

				if (isset($_GET['logout'])) {
					AccountSession::destroy();
				} else {

				   $user = DatabaseQuery::getUserInfo($_SESSION['token']);
					  	 		
					$id = $user['id'];
					$token = $user['token'];
					$fullname = $user['fullname'];
					$email = $user['email'];
					$username = $user['username'];
					$register = $user['register_on'];

					require_once 'view/'.request.'.php';	
				}

	  	 	} else {
	  	 		
	  	 		header('Location:'.ROOT.'login');
	  	 		exit;
	  	 	}
	  	 } 
	  	 elseif( in_array(request, Route::$pageSettings['requireNoLogin']) )  {
	  	 	 if (AccountSession::isActive()) {
	  	 	    header('Location:'.ROOT.'home');
	  	 	    exit;
	  	 	 }
	  	 	 else if( request == 'forgot-password') {
	  	 	 	if (isset($_GET['reset']) ) {

	  	 	 		if (strlen($_GET['reset']) > 50 and !empty($_GET['reset']) ) {

						$accountExist = $DB->select('users','*', [
		  	 	 			'reset' => $_GET['reset']
		  	 	 		]);
		  	 	 		if (count($accountExist) > 0 ) {
		  	 	 			foreach ($accountExist as $user) {
		  	 	 				require_once 'view/new-password.php';
		  	 	 				break;	
		  	 	 			} 
		  	 	 		} 
		  	 	 		else {
		  	 	 			require_once 'view/forgot-password.php';
		  	 	 		}
	  	 	 		} 
	  	 	 		else {
	  	 	 			//header('Location:https://www.google.com/search?q=I+am+a+useless+asshole+bastard+who+tries+to+hack+people\'s+accounts.');
	  	 	 			require_once 'view/forgot-password.php';
	  	 	 		}
	  	 	 	} 
	  	 	 	else {
	  	 	 		require_once 'view/forgot-password.php';
	  	 	 	}
	  	 	 }
	  	 	 else {

	  	 	 	require_once 'view/'.request.'.php';
	  	 	 }
	  	 }
	  }
	  else {
	  	 require_once 'view/404.php';
	  }
	}
}

new Route();