<?php 
          require './includes/common.php';
          if(!isset($_SESSION['email']))
          {
            header('location: ./index.php');
          }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./index.css">
    </head>
    <body>
        <?php 
          include './includes/header.php';
        ?>
        
        <div id="banner_image">
            <div class="container">
                <?php
                    $id=$_SESSION['user_id'];
                    $query="update users_items set status='confirmed' where user_id=$id";
                    $result=mysqli_query($con,$query) or die("Some error occurred.");
                    ?>
                    <h1>Your order is confirmed.</h1>
                    <p>Thank you for shopping with us. <a href="./products.php">Click here</a> to purchase any other item.</p>
            </div>
        </div>
        
        <?php 
          include './includes/footer.php';
        ?>
        
    </body>
</html>
