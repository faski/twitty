<?php
  session_start();
  $name=$_POST['sigName'];
  $lastName=$_POST['sigLastName'];
  $email=$_POST['sigEmail'];
  $password=$_POST['sigPassword'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  if (!$conn) {
	  echo 'Errore durante la connessione al server MySQL';
	exit();
  }
  else {
    echo "Connessione effettuata con successo";
  }
  $query="SELECT email FROM Utenti WHERE email LIKE '$email'";
  $r=mysqli_query($conn,$query); // restituisce un identificativo di risorsa o FALSE se la query non è stata eseguita correttamente
  if( mysqli_affected_rows($conn) ==1) //mysql_num_rows() restituisce il numero di righe in un risultato
    echo "Errore, login gia' esistente";
  else {
    $prova="INSERT INTO utenti (nome, cognome, email, password)
            VALUES ('$name', '$lastName', '$email', '$password')";
    $r=mysqli_query($conn,$prova);
    if(!$r)
      echo "la query non e' stata eseguita correttamente";
    else {
      echo "Inserimento effettuato puoi effettuare il login ";
      #header('Location: login.php?logEmail=' . $email . '&logPassword=' . $password);

      $_POST['logEmail']=$email;
      $_POST['logPassword']=$password;
      include 'login.php';
    }
  }

  mysqli_close($conn);

?>