<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll=transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>New Contact</title>
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<link rel="stylesheet" href="contactstyles.css" type="text/css" />
</head>

<?php
include_once "/home/agohar/helios_html/IT207/LAB0/menu.inc";
include_once "/home/agohar/helios_html/IT207/LAB1/header.php";
include "/home/agohar/helios_html/IT207/LAB0/footer.inc";
?>

<div class="all">
	<div class="main">
		<div class="entry">
			<h2> New Contact Entry </h2>

			<body>
				<form method="post" action="add.php">
					<label for="first"> <strong>First Name: </strong></label><input type="text" name="first"> <label for="last"> <strong>Last Name: </strong></label><input type="text" name="last"> <br> <br>
					<label for="email"> <strong>Email Address: </strong></label><input type="text" name="email"> <br> <br>
					<label for="phone"> <strong>Phone Number: </strong></label><input type="text" name="phone"> <br> <br>
					<label for="address"> <strong>Address: </strong></label><input type="text" name="address"> <label for="city"> <strong>City: </strong></label><input type="text" name="city"> <br> <br>
					<label for="state"><strong>State:</strong></label>
					<select name="state" id="state">
						<option value='empty'></option>
						<option value='Alabama'>Alabama</option>
						<option value='Alaska'>Alaska</option>
						<option value='Arizona'>Arizona</option>
						<option value='Arkansas'> Arkansas</option>
						<option value='California'>California</option>
						<option value='Colorado'>Colorado</option>
						<option value='Connecticut'>Connecticut</option>
						<option value='Delaware'>Delaware</option>
						<option value='Florida'>Florida</option>
						<option value='Georgia'>Georgia</option>
						<option value='Hawaii'>Hawaii</option>
						<option value='Idaho'>Idaho</option>
						<option value='Illinois'>Illinois</option>
						<option value='Indiana'>Indiana</option>
						<option value='Iowa'>Iowa</option>
						<option value='Kansas'>Kansas</option>
						<option value='Kentucky'>Kentucky</option>
						<option value='Louisiana'>Louisiana</option>
						<option value='Maine'>Maine</option>
						<option value='Maryland'>Maryland</option>
						<option value='Massachusetts'>Massachusetts</option>
						<option value='Michigan'>Michigan</option>
						<option value='Minnesota'>Minnesota</option>
						<option value='Mississippi'>Mississippi</option>
						<option value='Missouri'>Missouri</option>
						<option value='Montana'>Montana</option>
						<option value='Nebraska'>Nebraska</option>
						<option value='Nevada'>Nevada</option>
						<option value='New Hampshire'>New Hampshire</option>
						<option value='New Jersey'>New Jersey</option>
						<option value='New Mexico'>New Mexico</option>
						<option value='New York'>New York</option>
						<option value='North Carolina'>North Carolina</option>
						<option value='North Dakota'>North Dakota</option>
						<option value='Ohio'>Ohio</option>
						<option value='Oklahoma'>Oklahoma</option>
						<option value='Oregon'>Oregon</option>
						<option value='Pennsylvania'>Pennsylvania</option>
						<option value='Rhode Island'>Rhode Island</option>
						<option value='South Carolina'>South Carolina</option>
						<option value='South Dakota'>South Dakota</option>
						<option value='Tennessee'>Tennessee</option>
						<option value='Texas'>Texas</option>
						<option value='Utah'>Utah</option>
						<option value='Vermont'>Vermont</option>
						<option value='Virginia'>Virginia</option>
						<option value='Washington'>Washington</option>
						<option value='West Virginia'>West Virginia</option>
						<option value='Wisconsin'>Wisconsin</option>
						<option value='Wyoming'>Wyoming</option>
					</select>
					<label for="zip"> <strong>Zip: </strong></label><input type="text" name="zip"> <br> <br>
					<input type="Submit" value="Add Entry">
				</form>
				<hr>
				<a href="index.php"><b>Return to directory</b></a></h2>
		</div>
	</div>
</div>
</body>

</html>