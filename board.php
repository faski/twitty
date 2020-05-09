<?php
$conn=mysqli_connect("localhost","root","","db_twitty");
$query="SELECT u.nome, u.cognome, t.data_creazione, t.testo, t.id_utente, t.id, IFNULL(l.likes, 0) AS likes
        FROM `tweet` t
        JOIN `utenti` u
        ON t.id_utente = u.id
        LEFT JOIN (
          SELECT id_tweet, COUNT(*) AS likes
          FROM `like` 
          GROUP BY 1
        ) l
        ON t.id = l.id_tweet
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
      <form action="src/like/add_remove_like.php" method="post">
        <input id="addRemoveLikeTweetId" name="tweetId" type="hidden" value="<?php echo $row[5]?>">
        <button type="submit" <?php if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
                                  echo "disabled";?> >
          <img src="img/like.png" width="" height="25" alt="">
        </button>
        <span><?php echo $row[6]?></span>
      </form>
    </div>

    <?php
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['user_id'] == $row[4]): ?>

      <div class="btn-group">
        <button class="btn btn-secondary btn-sm dropdown-toggle btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Options
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <form action="src/tweet/edit_tweet.php" method="post">
            <input id="editTweetText" name="tweetText" type="hidden" value="<?php echo $row[3]?>">
            <input id="editTweetId" name="tweetId" type="hidden" value="<?php echo $row[5]?>">
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
<?php mysqli_close($conn); ?>