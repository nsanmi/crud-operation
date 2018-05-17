
<?php  include('functions.php'); ?>


<?php //$results = mysqli_query($db, "SELECT * FROM users"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Digital assistant and customer system PHP and MySQL</title>
</head>


<link href="style.css" rel="stylesheet">
<link href="boots/css/bootstrap.css" rel="stylesheet">
<body>
<div class="header">
	<h2>Edit profile</h2>
</div>

<form method="post" action="">

<?php echo display_error(); ?>








	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $userdata['username']; ?>">
		<input type="hidden" name="id" value="<?php echo $_SESSION['user']['id']; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $userdata['email']; ?>">
	</div>

	<div class="input-group">
		<label>address</label>
		<input type="text" name="address" value="<?php echo $userdata['address']; ?>">
	</div>

<div class="input-group">
		<button type="submit" class="btn" name="edit_btn">edit</button> <p>  &nbsp;&nbsp;</p>
		<a href="index.php " <button type="edit" class="btn" name="profile_btn">return to profile</button> </a>
	</div>
	
	</form>
	

