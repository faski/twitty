<?php
  session_start();
  $_SESSION['searchText']=$_POST['searchText'];
  header("location: http://localhost/twitty/index.php");
?>
