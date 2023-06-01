<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/aplo.png" />
        <title>Apvarga</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!--new css for homepage-->
        
    </head>
    <body>
        <div>
           <?php
           
            require 'header.php';
           
           ?>
           <br>
           <br>
           <br>

            <?php
           
          
           require 'home_1.php'
          ?>

 
           <!--<div id="bannerImage">
               <div class="container">
                   <center>
                   <div class="newdiv">
            <center><img src="img/logo.jpg"</center>
</div>
                   <div id="bannerContent">
                      
                       <a href="donate.php" class="btn btn-danger">Donate</a>
                       <p>Just A Little Help Can Make Their Hearts Happier.</p>
                   </div>
                   </center>
               </div>
           </div>-->
           <br>
           <br>
           <br>
           <br>
           <br>

           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="sell.php">
                                <img src="img/sell.jpeg" alt="sell">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Sell</p>
                                        
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/buy.jpeg" alt="shop">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Shop</p>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="accept.php">
                               <img src="img/accept.jpeg" alt="accept">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Accept Donation</p>
                                   
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="https://projectworlds.in">Apvarga</a>. All Rights Reserved.</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>