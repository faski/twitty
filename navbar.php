<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div>
  <a class="navbar-brand" href="#">
      <img src="img/logo.png" width="" height="40" alt="">
  </a>
  <span class="navbar-brand mb-0 h1">Twitty</span>
  </div>
  
  <div class="mx-auto">
    <form class="form-inline my-2 my-lg-0" action="src/search/search.php" method="POST">
      <input
        class="form-control mr-sm-2"
        name="searchText"
        type="search"
        value="<?php if (isset($_SESSION['searchText'])) echo $_SESSION['searchText'];?>"
        placeholder="Search"
        aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>

  <!-- Show only when logged in -->
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle btn-light" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php echo $_SESSION['name'] . ' ' . $_SESSION['lastName']?>
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
      <!-- <button class="dropdown-item" type="button">Change details</button> -->
      <!-- <button class="dropdown-item" type="button">Change password</button> -->
      <form action="src/authentication/logout.php" method="post">
        <button type="submit" class="dropdown-item" type="button">Log out</button>
      </form>
    </div>
  </div>

  <?php else: ?>
  
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
          <form action="src/authentication/signup.php" method="POST">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="sigName" aria-describedby="emailHelp" placeholder="Enter Name" required/>
            </div>
            <div class="form-group">
              <label for="email">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="sigLastName" aria-describedby="emailHelp" placeholder="Enter Last Name" required/>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="sigEmail" aria-describedby="emailHelp" placeholder="Enter email" required/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="sigPassword" placeholder="Password" required/>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
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
          <form action="src/authentication/login.php" method="post">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="logEmail" aria-describedby="emailHelp" placeholder="Enter email" required/>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="logPassword" placeholder="Password" required/>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php endif; ?>

</nav>