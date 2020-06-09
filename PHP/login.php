<?php 
          require './includes/common.php';
          if (isset($_SESSION['email'])) 
            { header('location: ./products.php'); }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
      <center>
        <div class="panel panel-primary">
            <div class="panel-heading">LOGIN</div>
            <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form method="POST" action="./login_submit.php">
                    <input type="text" placeholder="Email" name="email" class="form-group form-control">
                    <input type="password" placeholder="Password" name="password" class="form-group form-control">
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
           </div>
            <div class="panel-footer">
                <p Style="color:#f00">Don't have an account? <a href="./signup.php">Register</a></p>
            </div>
       </div>
      </center>
      </div>
      </div>
        
        <?php 
          include './includes/footer.php';
        ?>
        
    </body>
</html>
