<?php 
	include('functions.php');


	
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}


?>







<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
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
			<img src="images/user.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $userdata['username']; ?></strong>



					

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
						
						
					</small>

                             <h4><?php echo $userdata['address'];; ?></h4>
					<h4><a href="request.php" style="float: right; text-decoration:none; color:olive; ">Request Assistance</a> </h4>

</div>
</div>











</div>






				<?php endif ?>
			</div>
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

//$user_qry = "SELECT * FROM users WHERE  ";
?>	

		<tr>
		

			<td><?php echo $userdata['username']; ?></td>
			<td><?php echo $_SESSION['user']['address']; ?></td>
			
<td>
				<a href="edit.php?edit=<?php echo $_SESSION['user']['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			
			<td>
				<a href="delete.php?del=<?php echo $_SESSION['user']['id']; ?>" onclick = "return confirm ('Are you sure ?')" class="del_btn">Delete</a>
			</td>



		</tr>



	<?php  ?>
</table>



	


<?php  ?>






	
</body>
</html>