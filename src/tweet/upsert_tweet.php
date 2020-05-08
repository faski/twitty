<?php
  session_start();
  $text=$_POST['tweetText'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  if (!$conn) {
	  echo 'Errore durante la connessione al server MySQL';
	exit();
  }
  else {
    echo "Connessione effettuata con successo";
  }

  $now=date("Y-m-d H:i:s");

  if (isset($_SESSION['tweetId']) && isset($_SESSION['tweetText'])){
    $tweetId=$_SESSION['tweetId'];

    $query="UPDATE tweet 
              SET 
                  testo = '$text',
                  data_ultima_modifica = '$now'
              WHERE
                  id = $tweetId;";
    $r=mysqli_query($conn,$query);

    if(!$r)
      echo"update query non eseguita correttamente";
    else {
      echo"update query eseguita correttamente";
      header("location: http://localhost/twitty/index.php");
    }

    unset($_SESSION['tweetId']);
    unset($_SESSION['tweetText']);

  } else {
    $user_id=$_SESSION['user_id'];

    $query="INSERT INTO `tweet` (`testo`, `data_creazione`, `data_ultima_modifica`, `id_utente`) VALUES
                ('$text', '$now', '$now', $user_id);";
    $r=mysqli_query($conn,$query);
  
    if(!$r)
      echo"insert query non eseguita correttamente";
    else {
      echo"insert query eseguita correttamente";
      header("location: http://localhost/twitty/index.php");
    }
  }

  mysqli_close($conn);
?>
