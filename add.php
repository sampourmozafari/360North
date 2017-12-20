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
  
  </body>
</html>


<?php
  if(isset($_POST['submit'])){

    $name = filter_input(INPUT_POST, 'name') or die('Missing/illegal album_name parameter');
    $city = filter_input(INPUT_POST, 'city') or die('Missing/illegal album_name parameter');
    $desc = filter_input(INPUT_POST, 'desc') or die('Missing/illegal album_year parameter');

    require_once('dbcon.php');

    $sql = 'INSERT INTO properties (prop_name, prop_city, prop_desc) VALUES (?, ?, ?)';
    $stmt = $link->prepare($sql);
    $stmt->bind_param('sss', $name, $city, $desc);
    $stmt->execute();

    if($stmt->affected_rows > 0){
      echo '<section class="fdb-block">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
              <h1>The property '.$name.' has been added to the list.</h1>
              <p class="mt-5">
                <a class="btn" href="properties.php">Go back to the list</a>
              </p>
            </div>
          </div>
        </div>
      </section>';
    }
    else {
      echo '<section class="fdb-block">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
              <h1>Could not add the property.</h1>
              <p class="mt-5">
                <a class="btn" href="properties.php">Go back to the list</a>
              </p>
            </div>
          </div>
        </div>
      </section>';
    }
  }
