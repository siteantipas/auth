<!DOCTYPE html>
<html>
<head>
	<title> <?php print $fullname .' :: '. APP_NAME ?> Home</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <!-- get boostrap from cdn-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
           integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="overflow-x: hidden;">
	 <div class="row">
	 	 <div class="col-sm-0 col-m-0 col-lg-1 col-xl-2">
	 	 	<!-- nothing here -->
	 	 </div>
	 	 <div class="col-sm-12 col-m-12 col-lg-10 col-xl-8">
	 	 	 <br>
			 <div class="list-group">
			  <a class="list-group-item list-group-item-action flex-column align-items-start active text-ligh" href="#home">
			    <div class="d-flex w-100 justify-content-between">
			      <h3 class="mb-1"> <?php print $fullname ?> </h3>
			      <small>Registered: <?php print date('D d M Y - H:i a' , $register) ?></small>
			    </div>
			    <br>
			    <p class="mb-1"><?php print $email ?> <br> Welcome to your account dashboard.</p>
			    <small>&nbsp;</small>
			  </a>
			 </div>
			 <br>
			 <div class="jumbotron">
			  <h1 class="display-4">Thanks for registering, <?php print ucfirst(@end(explode(' ', $fullname))) ?>!</h1>
			  <p class="lead">You will be notified by email once your account has been confirmed by our team.</p>
			  <hr class="my-4">
			  <p>This usually takes less than a day to confirm.</p>
			  <a class="btn btn-primary btn-lg" href="?logout" role="button">Logout</a>
			</div> 
	 	 </div>
	 	 <div class="col-sm-0 col-m-0 col-lg-1 col-xl-2">
	 	 	<!-- nothing here -->
	 	 </div>
	 </div>
	 <center>
	     <small class="text-muted">
	        <i>&copy; <?php print date('Y') .' - '. APP_NAME ?></i>
	     </small>
	 </center>
</body>
</html>