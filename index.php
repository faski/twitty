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

    <?php
      session_start();
      #$_SESSION['loggedin'] = false;

      #$_SESSION['name'] = 'Fabio';  
    ?>
    
    <?php include 'navbar.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-1">
        </div>

        <div class="col-sm-10">
          <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>

          <form action="src/tweet/new_tweet.php" method="post">
            <div class="input-group mb-3 tweet">
              <input type="text" class="form-control" name="tweetText" placeholder="Write your tweet here..." aria-label="Write your tweet here..." aria-describedby="button-addon2">
              <div class="input-group-append">

                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Post</button>
              </div>
            </div>
          </form>

          <?php endif; ?>
          
          <?php include 'board.php'; ?>

        </div>

        <div class="col-sm-1">
        </div>
      </div>
    </div>
    
  </body>
</html>