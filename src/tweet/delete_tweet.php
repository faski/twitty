<?php
  session_start();
  $id=$_POST['tweetId'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  if (!$conn) {
    echo 'Errore durante la connessione al server MySQL';
  exit();
  }
  else {
    echo "Connessione effettuata con successo";
  }

  $query="DELETE FROM tweet WHERE id = $id";
  $r=mysqli_query($conn,$query);

  if(!$r)
    echo"query non eseguita correttamente";
  else {
    echo"ORDINE EFFETTUATO Grazie per l'acquisto ";
    header("location: http://localhost/twitty/index.php");
  }
    
  mysqli_close($conn);

?>
