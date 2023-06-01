<?php

$file = $_GET['file'];


if ($file === "flag.txt") {
    echo "nothing here hehe";
}
else{
    // echo $file;
    include($file);

}

?>