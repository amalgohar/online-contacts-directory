<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll=transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Lab 3</title>
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
        <div class="direc">
            <h1> Online Contacts Directory </h1>
            <h2> Search for a Contact </h2>

            <body>
                <form method="post" action="edit.php">
                    <label for="first"> <strong>First Name: </strong></label><input type="text" name="first"> <br> <br>
                    <label for="last"> <strong>Last Name: </strong></label><input type="text" name="last"> <br> <br>
                    <input type="Submit" value="Search">
                </form>
                <hr>
                <a href="new.php"><b>Add New Contact Entry</b></a></h2><br>

        </div>
    </div>
</div>
</body>

</html>