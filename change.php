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

      if (!empty($_POST["newfirst"]) && !empty($_POST["newlast"]) && !empty($_POST["newemail"]) && !empty($_POST["newphone"]) && !empty($_POST["newaddress"]) && !empty($_POST["newcity"]) && !empty($_POST["newstate"]) && !empty($_POST["newzip"])) {
        $new = "\n" . $_POST['newfirst'] . "," . $_POST['newlast'] . "," . $_POST['newemail'] . "," . $_POST['newphone'] . "," . $_POST['newaddress'] . "," . $_POST['newcity'] . "," . $_POST['newstate'] . "," . $_POST['newzip'];
        if (file_exists("directory.txt")) {
          $fopen = fopen("directory.txt", "r");
          $info = file_get_contents("directory.txt");

          $parts = explode("\n", $info);

          $num = count($parts);
          for ($i = 1; $i < $num; $i++) {

            $part = explode(",", $parts[$i]);

            if ((!strcasecmp($part[0], $_POST['newfirst'])) && (!strcasecmp($part[1], $_POST["newlast"]))) {
              $parts[$i] = $new;
              $change = fopen("directory.txt", "w"); {
                if (fwrite($change, $parts[$i]) > 0) {
                  echo "<br><b>Contact updated successfully.<b></br>";
                  echo "<hr>";
                  echo '<a href="index.php"><b>Return to directory</b></a>';
                } else {
                  echo "<br><b>Contact not updated.<b></br>";
                  echo "<hr>";
                  echo '<a href="index.php"><b>Return to directory</b></a>';
                }
              }
            }
          }
        }
      }

      ?>

    </div>
  </div>
</div>

</html>