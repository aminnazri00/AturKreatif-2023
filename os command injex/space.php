
<!DOCTYPE html>
<html>
  <head>
    <title>Sanity Check in Space part V - Liam, Last Son of Krypton</title>
  </head>
  <body>
    <h1>Welcome to the final page of Sanity Check in Space. This is the ultimate challenge. This is: Ping but in Space.</h1>
    <img src="res/kryp.jpg" alt="truth" width="500" height="400">
    
    <form method="post">
      <label for="website">This tool pings websites, but in space.</label>
      <input type="text" id="website" name="website" required>
      <br>
      <button type="submit" name="ping">Space Ping</button>
    </form>
    <?php
    if(isset($_POST["ping"])) {
        // $site = $_POST["website"];
        // $cmd = "curl " . $site;
        // $out = shell_exec($cmd);
        // $smarty->assign('cmdout', nl2br($out));
    

        $url = $_POST["website"];
        $output = shell_exec('ping -c 1 '. $url);
        echo "<pre>$output</pre>";
    }
    ?>
    
  </body>
</html>
