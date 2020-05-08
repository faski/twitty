<?php
  session_start();
  $text=$_POST['tweetText'];
  $user_id=$_SESSION['user_id'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  if (!$conn) {
	  echo 'Errore durante la connessione al server MySQL';
	exit();
  }
  else {
    echo "Connessione effettuata con successo";
  }

  $now=date("Y-m-d H:i:s");

  $query="SELECT id, nome, cognome, email FROM Utenti WHERE email LIKE '$email' AND password LIKE '$password'";
  $query="INSERT INTO `tweet` (`testo`, `data_creazione`, `data_ultima_modifica`, `id_utente`) VALUES
              ('$text', '$now', '$now', $user_id);";
  $r=mysqli_query($conn,$query);

  if(!$r)
    echo"query non eseguita correttamente";
  else {
    echo"ORDINE EFFETTUATO Grazie per l'acquisto ";
    header("location: http://localhost/twitty/index.php");
  }
    
  
  mysqli_close($conn);
?>
