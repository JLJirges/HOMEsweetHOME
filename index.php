<?php
$page = (!isset($_GET['page'])) ? "home" : $_GET['page'];

$content = "content/";
$title = "";

if($page == "home") {
$content .= "home.php";
$title = "Startseite";
} elseif ($page == "Nutzerregistrierung") {
    $content .= "Nutzerregistrierung.php";
    $title = "Nutzerregistrierung";
} elseif ($page == "Produktuebersicht") {
    $content .= "Produktuebersicht.php";
    $title = "Produktuebersicht";
}
else {
    $content .= "404.php";
    $title = "404 Error";
}

include "header.php";
include $content;
include "footer.php";
?>



