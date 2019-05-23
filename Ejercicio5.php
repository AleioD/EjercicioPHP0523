<?php
  echo "<h2>SERVER</h2>";
  foreach ($_SERVER as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

  echo "<h2>FILES</h2>";
  foreach ($_FILES as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

  echo "<h2>REQUEST</h2>";
  foreach ($_REQUEST as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

  echo "<h2>SESSION</h2>";
  foreach ($_SESSION as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

  echo "<h2>COOKIE</h2>";
  foreach ($_COOKIE as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

  echo "<h2>GLOBALS</h2>";
  foreach ($_GLOBALS as $key => $value) {
    echo $key . " " . $value . "<br>";
  }

  echo "<hr>";

 ?>
