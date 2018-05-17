<?php  include('../functions.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Digital assistant and customer system PHP and MySQL</title>
</head>


<link href="../style.css" rel="stylesheet">
<link href="../boots/css/bootstrap.css" rel="stylesheet">
<body>
<div class="header">
	<h2>Edit profile</h2>
</div>

<form method="post" action="">

<?php echo display_error(); 
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$usr = mysqli_query($db, "SELECT * FROM users WHERE id = '$id'") or die(mysqli_error($db));
	$usrrow = mysqli_fetch_array($usr);

}


?>








	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $userdata['username']; ?>">
		<input type="hidden" name="id" value="<?php echo $usrrow['id']; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $usrrow['email']; ?>">
	</div>

	<div class="input-group">
		<label>address</label>
		<input type="text" name="address" value="<?php echo $usrrow['address']; ?>">
	</div>

<div class="input-group">
		<button type="submit" class="btn" name="edit_btn_admin">edit</button> <p>  &nbsp;&nbsp;</p>
		<a href="home.php " <button type="edit" class="btn" name="profile_btn">return to list</button> </a>
	</div>
	
	</form>
	

