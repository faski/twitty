<?php
  session_start();
  $user_id=$_SESSION['user_id'];
  $tweet_id=$_POST['tweetId'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  $query="SELECT COUNT(*) 
          FROM `like` 
          WHERE id_utente = $user_id AND id_tweet = $tweet_id";

  $r=mysqli_query($conn,$query);
  
  if(mysqli_num_rows($r)==1){
    $row= mysqli_fetch_array($r);
    if($row[0]==1){
      // tolgo il like
      $query="DELETE 
              FROM `like` 
              WHERE id_utente = $user_id AND id_tweet = $tweet_id";
      $r=mysqli_query($conn,$query);
      header("location: http://localhost/twitty/index.php");

    } else {
      // metto like
      $now=date("Y-m-d H:i:s");
      $query="INSERT INTO `like` (id_utente, id_tweet, data_creazione)
              VALUES ($user_id, $tweet_id, '$now')";
      $r=mysqli_query($conn,$query);
      header("location: http://localhost/twitty/index.php");
    }

  }else{
    echo "Errore nella query che ritorna il numero di Like!!!";
  }

  mysqli_close($conn);

?>