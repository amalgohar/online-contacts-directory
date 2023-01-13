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
    <div class="goback">
      <?php

      if (
        !empty($_POST["first"]) && !empty($_POST["last"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) &&
        !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["state"]) && !empty($_POST["zip"])
      ) {
        $first = $_POST["first"];
        $last = $_POST["last"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];


        $contact = "\n" . $first . "," . $last . "," . $email . "," . $phone . "," . $address . "," . $city . "," . $state . "," . $zip;
        $Fopen = fopen("directory.txt", "a");

        if (fwrite($Fopen, $contact) > 0) {
          echo "<br><b>Successfully added to contacts.<b></br>";
          echo "<hr>";
          echo '<a href="index.php"><b>Return to directory</b></a>';
        } else {
          echo "<br><b>Adding of contact unsuccessful.<b></br>";
          echo "<hr>";
          echo '<a href="index.php"><b>Return to directory</b></a>';
        }
      } else {
        echo "<br><b> You must enter a value in each field. Click your browser's back button to return to the form.<b> <br />";
        echo "<hr>";
        echo '<a href="index.php"><b>Return to directory</b></a>';
      }

      ?>

    </div>
  </div>
</div>

</html>