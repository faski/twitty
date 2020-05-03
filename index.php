<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Twitty</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div>
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="" height="40" alt="">
        </a>
        <span class="navbar-brand mb-0 h1">Twitty</span>
      </div>
      
      <div class="mx-auto">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

      <!-- Show only when NOT logged in -->
      <button type="button" class="btn btn-primary btn-light" data-toggle="modal" data-target=".bd-sign-up-modal">Sign up</button>
      <div class="modal fade bd-sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="signUpDialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"lastName>Sign up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="email">Last Name</label>
                  <input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Show only when NOT logged in -->
      <button type="button" class="btn btn-primary btn-light" data-toggle="modal" data-target=".bd-log-in-modal">Log in</button>
      <div class="modal fade bd-log-in-modal" tabindex="-1" role="dialog" aria-labelledby="logInDialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"lastName>Log in</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Show only when logged in -->
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-light" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fabio Priori
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Change details</button>
          <button class="dropdown-item" type="button">Change password</button>
          <button class="dropdown-item" type="button">Log out</button>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">

          <div class="input-group mb-3 tweet">
            <input type="text" class="form-control" placeholder="Write your tweet here..." aria-label="Write your tweet here..." aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
            </div>
          </div>
          
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

        </div>

        <div class="col-sm-1">
        </div>
      </div>
    </div>
    
  </body>
</html>