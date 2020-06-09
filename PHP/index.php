<?php 
          require './includes/common.php';
          if (isset($_SESSION['email'])) { header('location: ./products.php'); }
?>
<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Lifestyle Store</title>
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
        
        <div id="banner_image" Style="background: url(./img/intro-bg_1.jpg) no-repeat center center;">
            <div class="container">
                <div id="banner_content">
                    <h1 style="color:white">We Sell Lifestyle</h1>
                    <p style="color:white">Flat 40% OFF on premium brands</p>
                    <a href="./products.php" class="btn btn-danger btn-active">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="./products.php#cameras" > 
                          <img src="./img/1.jpg" alt="">
                          <div class="caption">
                            <h2>Cameras</h2> 
                            <p>Choose among the best available in the world.</p>
                          </div>
                        </a>
                    </div>
                    
                </div> 

                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="./products.php#watches"> 
                          <img src="./img/7.jpg" alt="">
                          <div class="caption">
                            <h2>Watches</h2> 
                            <p>Original watches from the best brands.</p>
                          </div>
                        </a>
                    </div>
                    
                </div> 

                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="./products.php#shirts" > 
                          <img src="./img/shirts.jpg" alt="">
                          <div class="caption">
                            <h2>Shirts</h2> 
                            <p>Our Exquisite collection of shirts.</p>
                          </div>
                        </a>
                    </div>
                    
                </div> 

            </div>
        </div>
            
            
        
        <?php 
          include './includes/footer.php';
        ?>
        
  </body>
   
</html>