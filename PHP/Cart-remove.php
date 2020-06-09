<?php 
          require './includes/common.php';

          if(isset($_GET["id"]))
          {
          	$item_id=$_GET["id"];
          	$user_id=$_SESSION['user_id'];

          	$query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    		$result = mysqli_query($con, $query) or die($mysqli_error($con));
    		header("location: ./cart.php");

          }
?>