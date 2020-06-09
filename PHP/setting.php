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
        <title>Products</title>
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
                    <div class="panel ">
                        
                        <div class="panel-heading">
                            <label for="changePassword">Change Password</label>
                        </div>
                        
                        <div class="panel-body">
                            <form action="./settings_script.php" method="POST">
                                <input type="password" placeholder="Old Password" name="old_password" class="form-group form-control" pattern=".{6,}" required>
                                <input type="password" placeholder="New Password" name="new_password" class="form-group form-control" pattern=".{6,}" required>
                                <input type="password" placeholder="Re-type New Password" name="repnew_password" class="form-group form-control" pattern=".{6,}" required>
                                <input type="submit" value="Change" class="btn btn-primary" Style="float:left" >
                            </form>
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
