<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Apvarga-donation</title>
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
        <link rel="stylesheet" href="sellform.css">
    </head>
    <body>
    <?php
                require 'header.php';
            ?>
        <br><br><br>
      
		<form style="justify-content: center;display: flex;">
		  <fieldset>

			<legend>Enter details:</legend>
            <br>
			<label for="fname">Name:</label>
			<input type="text" name="name" required autofocus maxlength="15"><br><br>

            <label for="email">Email : </label>
            <input type="email" name="email"><br><br>
			
            <label for="phone">Contact number : </label>
            <input type="text" name="phone"><br><br>

            <label for="addr">Enter pickup address : </label><br>
            <textarea name="addr" cols="30" rows="5"></textarea><br><br>

            <label for="cat">Select product category to be donated : </label>
				<select name="cat" >
				<option value="select">--Select--</option>
					<option value="cloth">Clothing</option>
					<option value="footwear">Footwear</option>
                    <option value="Stationery">Stationery</option>
                    <option value="Homeessentials ">Home Essentials</option>
					<option value="accr">Accessories</option>
					<option value="other">Other</option>
				</select>
				<br><br>
            
            <label for="pname">Product Name : </label>
            <input type="text" name="pname"><br><br>

            <label for="pdr">Product Description : </label><br>
            <textarea name="pdr" cols="30" rows="5"></textarea><br><br>

            <label for="quantity">Product quantity : </label>
			<input type="number" id="quantity"><br><br>

            <label for="dim">Enter product dimensions : </label>
            <input type="text" name="dim"><br><br>

            <label for="date">Enter preferred pickup date : </label><br>
            <input type="date"><br><br>

			<button onclick="alert('Your ad is now live !!')">Submit</button>
			<input type="reset" value="Reset" />
		  </fieldset>
		</form>
        
		
	</body>
    </html>