<?php
  require("server/config.php");
  require("server/auth.php");
  ob_start();
  $item_type = $_GET['item_type'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <a
            href="#"
            id="admin-icon"
            class="img logo rounded-circle mb-5"
            style="background-image: url(images/admin-icon.png)"
          ></a>
          <ul class="list-unstyled components mb-5">

            <a href="#">Logged as <?php echo $_SESSION['username']; ?></a>
            
            <li class="active">
              <a
                href="#homeSubmenu"
                data-toggle="collapse"
                aria-expanded="false"
                class="dropdown-toggle"
                >Chatlogs</a
              >
              <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                  <a href="#">Chat</a>
                </li>
                <li>
                  <a href="#">All commands</a>
                </li>
                <li>
                  <a href="#">Masked command</a>
                </li>
                <li>
                  <a href="#">Admin commands</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Banlista</a>
            </li>
            <li>
              <a href="items-list.php?item_type=vehicles">Vozila</a>
            </li>
            <li>
              <a href="items-list.php?item_type=businesses">Biznisi</a>
            </li>
            <li class="nav-item">
              <a href="items-list.php?item_type=houses">Kuce</a>
            </li>
            <li class="nav-item">
              <a href="items-list.php?item_type=users">Korisnici</a>
            </li>
          </ul>

          <div class="footer">
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-secondary active" id="logout-btn">
                <input type="checkbox" checked autocomplete="off" /> <a href="../server/logout.php">Logout</a>
              </label>
            </div>
          </div>
        </div>
      </nav>

      <!-- Telo stranice  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button
              class="btn btn-dark d-inline-block d-lg-none ml-auto"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Chat (Log)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">All commands (Log)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Masked command (Log)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Admin commands (Log)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Vozila</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Biznisi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kuce</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Korisnici</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <?php 
        if($item_type == 'users'){
          include("php-includes/items/users.php");
        } else if($item_type == 'vehicles') {
          include("php-includes/items/vehicles.php");
        } else if($item_type == 'businesses'){
          include("php-includes/items/businesses.php");
        } else if($item_type == 'houses'){
          include("php-includes/items/houses.php");
        }


        ?>
        

        <br />
        <hr />
        <br />

      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
