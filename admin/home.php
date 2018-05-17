<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: green;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php 
		if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin.jpg"  >

			<div>
				<?php 
				 if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>
					
					<h4><a href="requests.php" style="float: left; text-decoration:none; color:olive; ">View Requests </a> </h4>

				<?php endif ?>
			</div>
		</div>
		
		<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
<?php 

$user_qry = mysqli_query($db, "SELECT * FROM users ");

while ($row = mysqli_fetch_array($user_qry)){
				
?>
		<tr>
		

			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['address']; ?></td>
			
<td>
				<a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			
			<td>
				<a href="delete.php?del=<?php echo $row['id']; ?>" onclick = "return confirm ('Are you sure ?')" class="del_btn">Delete</a>
			</td>



		</tr>
<?php 
}
?>

	<?php  ?>
</table>

	</div>
</body>
</html>