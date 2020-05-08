<?php
  session_start();
  $_SESSION['tweetId']=$_POST['tweetId'];
  $_SESSION['tweetText']=$_POST['tweetText'];
  header("location: http://localhost/twitty/index.php");
?>