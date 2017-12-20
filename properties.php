<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>360 North</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="froala_blocks.css">
    <link rel="stylesheet" href="style.css">

    <style>
      #navigator {
        position: sticky;
        top: 0;
        z-index: 1000;
      }

      #navigator .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
      }

      @media (max-width: 720px) {
        #navigator {
          border-bottom: 1px solid #ccc;
        }
      }

      #navigator a {
        font-size: 14px;
      }

      #navigator + section {
        padding: 250px 0;
      }
    </style>
  </head>
  <body>
    <header class="bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="index.php" style="font-weight:bolder; font-size:1.6em;"><span style="font-family:'Space Mono';font-weight:lighter;">360</span> North</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav5" aria-controls="navbarNav5" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav5">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#about-us">About Us</a>
              </li>
            </ul>

            <ul class="navbar-nav justify-content-end ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="properties.php">Properties</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>

            <?php
              if(empty($_SESSION['id'])){
                echo '<a class="btn ml-md-3" href="login.php">Log in</a>';
              }
              else {
                echo '<a class="btn ml-md-3" href="logout.php">Log out</a>';
              }
            ?>

          </div>
        </nav>
      </div>
    </header>
    <?php
      if(empty($_SESSION['id'])){
      }
      else {
        echo '<section class="fdb-block pb-0">
          <div class="container">
            <div class="row text-center justify-content-center">
              <div class="col-12 col-md-8 col-lg-7">
                <h2>Add a property to the list</h2>
                <p class="text-h3 text-left"></p>
              </div>
            </div>
            <div class="row-50">
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-8 col-lg-7">
                <form class="" action="add.php" method="post">
                  <div class="row">
                    <div class="col">
                      <label>Name of the case</label>
                      <input type="text" name="name" value="" class="form-control">
                    </div>
                    <div class="col">
                      <label>Location</label>
                      <input type="text" name="city" value="" class="form-control">
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <label>Description</label>
                      <textarea class="form-control" name="desc" value="" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col text-right">
                      <button type="submit" name="submit" class="btn">Submit Property</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="row-100"></div>
          </div>
        </section>
        <hr>';
      }

      echo '<section class="fdb-block">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-left">
              <h1>Properties</h1>
              <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
        </div>
      </section>';

      require_once('dbcon.php');

      $sql = "SELECT prop_id, prop_name, prop_city, prop_desc FROM properties";
      $result = $link->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '<section class="fdb-block">
            <div class="container">
              <div class="row text-left align-items-center">
                <div class="col-10 col-sm-6 m-auto m-lg-0 col-lg-4">
                  <img alt="image" class="img-fluid" src="./imgs/img_square_1.svg">
                </div>

                <div class="col-12 col-lg-8 pt-4 pt-lg-0">
                  <h1>'.$row['prop_name'].'</h1>
                  <p class="text-h3">'.$row['prop_desc'].'</p>

                  <div class="row mt-5">
                    <div class="col-12 col-sm-6">
                      <h3><strong>Location</strong></h3>
                      <p class="text-h3">'.$row['prop_city'].'</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>';
        }
      } else {

      }
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
