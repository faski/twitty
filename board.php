<?php
$conn=mysqli_connect("localhost","root","","db_twitty");
$query="SELECT u.nome, u.cognome, t.data_creazione, t.testo
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

    <div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Options
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="#">Edit</a>
        <a class="dropdown-item" href="#">Delete</a>
    </div>
    </div>
</div>
</div>

<?php endwhile; ?>