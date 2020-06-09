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
        <title>Cart</title>
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
                    <table class="table table-hover">
                        <?php 
                              $sum=0;
                              $id="";
                              $user_id = $_SESSION['user_id'];
                              $query= "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id'AND status='added to cart'";
                              $result= mysqli_query($con,$query) or die(mysqli_error($con));
                              if(mysqli_num_rows($result)==0)
                              {
                                echo"<center><h2>Add items to the cart first!</h2></center>";
                              }
                              else
                              {
                                
                        ?>
                        <thead>
                            <tr>
                                <th>
                                  Item Number  
                                </th>
                                <th>
                                  Item Name 
                                </th>
                                <th>
                                  Item Price 
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                            
                        <tbody>
                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                
                                $sum += $row["Price"];
                                
                                $id .= $row["id"] . ",";

                                echo
                                 "
                                  <tr>
                                        <td>
                                                " .$row["id"] . "
                                        </td>
                                        <td>
                                                " .$row["Name"] . "
                                        </td>
                                        <td>
                                                " .$row["Price"] . "
                                        </td>
                                        <td>
                                                <a href='./cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>
                                        </td>
                                    </tr>
                                 ";
                            }
                            

                            echo
                             "  <tr>
                                    <td> $id </td>
                                    <td>
                                        Total  
                                    </td>
                                    <td>
                                        Rs $sum  
                                    </td>
                                    <td>
                                    <a href='./success.php?items_id={$id}' class='btn btn-primary'>Confirm Order</a>
                                    </td>
                                </tr>
                             ";
                              }
                            ?>
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
        
        <?php 
          include './includes/footer.php';
        ?>
        
    </body>
</html>