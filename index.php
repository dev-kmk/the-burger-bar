<?php
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>

<?php
  if($page<>NULL){

    if(!file_exists("pages/".$page.".php")){
      echo '<h1>Oops, our bad...</h1><br /><p>The page you requested was not found.';
    } else {
      include("pages/".$page.".php");
    }
  } else {
    include("pages/home.php");
  }
?>

<?php

  include_once('inc/footer.php');
?>
