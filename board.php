<?php
$conn=mysqli_connect("localhost","root","","db_twitty");
$query="SELECT u.nome, u.cognome, t.data_creazione, t.testo, t.id_utente, t.id
        FROM `tweet` t
        JOIN `utenti` u
        ON t.id_utente = u.id
        ORDER BY t.data_creazione DESC";
$r=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($r)):
?>

<div class="tweet">
  <h4><?php echo $row[0] . ' ' . $row[1]; ?></h4>
  <h6><?php echo $row[2]?></h6>
  <p><?php echo $row[3]?></p>
  <div class="d-flex justify-content-between">
    <div>
      <img src="img/like.png" width="" height="25" alt="">
      <span>23</span>
    </div>

    <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user_id'] == $row[4]): ?>

      <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Options
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <form action="" method="post">
            <button type="submit" class="dropdown-item">Edit</button>
          </form>
          <form action="src/tweet/delete_tweet.php" method="post">
            <input id="deleteTweetId" name="tweetId" type="hidden" value="<?php echo $row[5]?>">
            <button type="submit" class="dropdown-item">Delete</button>
          </form>
        </div>
      </div>

    <?php endif; ?>
    
  </div>
</div>

<?php endwhile; ?>