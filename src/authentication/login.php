<?php
  session_start();
  $email=$_POST['logEmail'];
  $password=$_POST['logPassword'];

  $conn=mysqli_connect("localhost","root","","db_twitty");

  if (!$conn) {
	  echo 'Errore durante la connessione al server MySQL';
	exit();
  }
  else {
    echo "Connessione effettuata con successo";
  }

  $query="SELECT id, nome, cognome, email FROM Utenti WHERE email LIKE '$email' AND password LIKE '$password'";
  $r=mysqli_query($conn,$query);

  if( mysqli_num_rows($r) ==1) // restituisce il numero di righe generate  dall'ultima query
  {
	 /*la funzione mysqli_fetch_array è usata per estrarre righe dall'array  (result set.) creato da una query (select)
      nel nostro caso abbiamo la tabella risultante dalla select composta da un solo record ma piu' genericamente se avessimo n
       record avremmo dovuto chiamare n volte la funzione per visualizzare tutte le righe .
       */	
	 
    $row= mysqli_fetch_array($r); // restituisce la prima riga del set risultato. 
    
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $row[0];
    $_SESSION['name'] = $row[1];
    $_SESSION['lastName'] = $row[2];
    $_SESSION['email'] = $row[3];

    header("location: http://localhost/twitty/index.php");
  }
  else
  {
    echo "<script>
    alert('Attenzione! Utente inesistente o dati inseriti non correttamente!');
    window.location.href='http://localhost/twitty/index.php';
    </script>";
  }
  mysqli_close($conn); //chiudo la connessione

?>