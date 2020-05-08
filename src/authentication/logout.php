<?php
  session_start();
  $_SESSION['loggedin'] = false;
  header("location: http://localhost/twitty/index.php");
?>