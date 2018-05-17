<?php 
include('../functions.php');
if(isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM requests WHERE id = '$id'") or die(mysqli_error($db));
	header("location: requests.php");
}
?>
