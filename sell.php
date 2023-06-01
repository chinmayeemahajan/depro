<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Apvarga-selling</title>
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

			<legend>Enter Product details:</legend>
            <br>
			<label for="fname">Name:</label>
			<input type="text" name="name" required autofocus maxlength="15"><br><br>

            <label for="email">Email : </label>
            <input type="email" name="email"><br><br>
			
            <label for="phone">Contact number : </label>
            <input type="text" name="phone"><br><br>

            <label for="cat">Select product category : </label>
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

            <label for="pdesc">Product Description : </label><br>
            <textarea name="pdesc" cols="30" rows="5"></textarea><br><br>
                
            <label for="img">Product Image : </label>
			<input type="file" name="img"><br><br>

            <label for="rpice">Price of product : </label>
			<input type="number" id="price"><br><br>

			<button onclick="alert('Your product ad is now live !!')">Submit</button>
			<input type="reset" value="Reset" />
		  </fieldset>
		</form>
		
	</body>
</html>
</body>