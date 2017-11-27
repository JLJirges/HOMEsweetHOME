<?php

$dblink = mysqli_connect("localhost", "root", "", "sae_project");
mysqli_query($dblink, "SET names UTF8");

if(!$dblink){
    die('Passt ned');
}

?>
