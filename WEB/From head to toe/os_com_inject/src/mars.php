<!DOCTYPE html>
<html>

<head>
  <title>Sanity Check in Space Page IV - I'm afraid I can't let you do that Gabriel</title>
</head>

<body>
  <?php
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $referer = "elonmars.com";
  if (preg_match("/S3cr3tAg3nt/i", $u_agent)) {
    echo '<img src="res/spice.jpeg" alt="DDD">';
    if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == $referer) {
      echo "<p>Excellent job, one ultimate challenge awaits you on spacex.</p>";
    } else {
      echo "<p>Sorry, it seems as if you are not from elonmars.com</p>";
    }
  } else {
    echo "Sorry, it seems as if your user agent is not correct, in order to access this website.";
    echo "<br> Your user agent: " . $u_agent;
   }
?>
<!-- S3cr3tAg3nt -->
</body>

</html>