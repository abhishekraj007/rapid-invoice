<?php
/*******************************************************************************
*  Invoice Management System                                                *
*                                                                              *
* Version: 1.0	                                                               *
* Author:  Abhishek Raj                                   				   *
*******************************************************************************/

include('header-login.php');
include('functions.php');

?>

<div class="row vertical-offset-100">
	<div id="response" class="alert alert-success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<div class="message"></div>
	</div>

	<div class="col-md-4 col-md-offset-4 login-form">
		<div class="panel panel-default">
		  	<div class="panel-heading panel-login">
		  		<h1 class="text-center">
					<img src="<?php echo COMPANY_LOGO ?>" class="img-responsive">
				</h1>
		    	<h3 class="panel-title text-center">Please sign in</h3>
		 	</div>
		  	<div class="panel-body">
		    	<form accept-charset="UTF-8" role="form" method="post" id="login_form">
		    		<input type="hidden" name="action" value="login">
	                <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control required" name="username" id="username" type="text" placeholder="Enter username" autofocus>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control required" placeholder="Password" name="password" type="password" placeholder="Enter password">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    	<!--a href="forgot.php" class="float-right">Forgot password?</a-->
			    	    </div>
			    		<button type="button" id="btn-login" class="btn btn-lg btn-success btn-block">Login</button><br>
			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>