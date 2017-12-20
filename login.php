<?php
  session_start();
  ob_start();
?>
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
    <?php
      if(isset($_POST['submit'])){
          $un = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) or die('Missing/illegal un parameter');
          $pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) or die('Missing/illegal pw parameter');

          require_once('dbcon.php');

          $sql = 'SELECT id, password FROM admin WHERE username=?';
          $stmt = $link->prepare($sql);
          $stmt->bind_param('s', $un);
          $stmt->execute();
          $stmt->bind_result($id, $password);

          while($stmt->fetch()) { }
          if ($password === $pw){
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $un;

            header('Location: properties.php');
            exit();
          }
          else{
            echo 'Enten forkert brugernavn eller adgangskode.';
          }
        }
    ?>

    <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-7 col-xl-5 text-center">
            <div class="fdb-box fdb-touch">
              <form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row">
                  <div class="col">
                    <h1>Log In</h1>
                    <p><a href="properties.php">Go back to main site</a></p>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <input type="text" name="username" value="" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <input type="password" name="password" value="" class="form-control mb-1" placeholder="Password">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col">
                    <button class="btn" type="submit" name="submit">Log in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
