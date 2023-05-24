<!DOCTYPE html>
<?php
$cookie_name = "humans";
if (!isset($_COOKIE[$cookie_name])) {
	setcookie("humans", "false");
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Sanity Check in Space Part III: Revenge of the Robots</title>
</head>

<body>
  <?php
    if (!isset($_COOKIE[$cookie_name]) || $_COOKIE[$cookie_name] == "false") {
      echo "<h1>Welcome fellow human to page three of Sanity Check in space! You look pretty human, but we have to be sure. Go eat something and come back here.</h1>";
    } else {
      echo "<h1>Wow, you really are human, celebrate with us by visiting mars</h1>";
    }
  ?>

  <img src="res/cook.jpg" alt="cool image">
</body>

</html>
