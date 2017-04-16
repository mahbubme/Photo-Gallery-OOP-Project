<?php 

	require_once("includes/header.php");

	if ($session->is_signed_in()) {
		redirect("index.php");
	}

	if (isset($_POST['submit'])) {
		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		//method to check database user
		$user_found = User::verify_user($username, $password);

		if ($user_found) {
			
			$session->login($user_found);
			redirect("index.php");

		}else {

			$the_message = '<div class="alert alert-danger"><strong>Danger!</strong> Your password or username are incorrect.</div>';

		}

	}else {

		$the_message = "";
		$username = "";
		$password = "";

	}

?>

<div class="col-sm-4"></div>
<div class="col-sm-4">
	<?php echo $the_message; ?>
	<form action="" method="post">
		<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" value="<?php echo htmlentities($password); ?>">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Submit" name="submit" >
		</div>
	</form>
</div>
<div class="col-sm-4"></div>

<?php require_once("includes/footer.php"); ?>