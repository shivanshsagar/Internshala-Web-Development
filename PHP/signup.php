<?php 
          require './includes/common.php';
          if (isset($_SESSION['email'])) 
            { header('location: ./products.php'); }
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Sign Up</title>
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
        <div class="panel panel-default">
            <div class="panel-heading">SIGN UP</div>
            <div class="panel-body">
                <form method="POST" action="./signup_script.php">
                    <input type="text" placeholder="Name" name="name" class="form-group form-control" 
                           pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                    <input type="text" placeholder="Email" name="email" class="form-group form-control"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <input type="password" placeholder="Password" name="password" class="form-group form-control"
                           pattern=".{6,}" required>
                    <input type="number" placeholder="Contact" name="contact" class="form-group form-control"
                           maxlength="10" size="10">
                    <input type="text" placeholder="City" name="city" class="form-group form-control">
                    <textarea placeholder="Address" name="address" class="form-group form-control"></textarea>
                    <input type="submit" value="Signup" class="btn btn-primary">
                </form>
           </div>
            <div class="panel-footer">
                <p Style="color:#f00">Already Registered? <a href="./login.php">Login Here</a></p>
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
