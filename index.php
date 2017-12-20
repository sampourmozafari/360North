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

          </div>
        </nav>
      </div>
    </header>
    <section class="fdb-block" style="background-image: url(heroimg.jpg); height: calc(100vh - 64px)">
      <div class="container">
        <div class="row text-left">
          <div class="col-12 col-sm-10 m-auto m-md-0 col-md-8 col-lg-6">
            <div class="fdb-box">
              <div class="row justify-content-center">
                <div class="col-12 col-xl-8 text-left">
                  <h1>Property Management</h1>
                  <p class="text-h3">We are keen to find properties with potential and the right location, and we make a virtue of building a healthy and simple business model around each property</p>

                  <p class="text-h3 mt-4"><a href="index.php#services">Learn More &gt;</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-left">
            <h1>Services</h1>
            <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>

        <div class="row text-left mt-5">
          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto ml-md-0">
            <img alt="image" class="img-fluid" src="./imgs/img_square_1.svg">
            <h3><strong>Investment</strong></h3>
            <p>We renovate and rebuild and our investments are always long-term and targeted. We invest in residential real estate, as well as office buildings, commercial which are either improved or developed into homes.</p>
          </div>

          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto pt-5 pt-md-0">
            <img alt="image" class="img-fluid" src="./imgs/img_square_2.svg">
            <h3><strong>Management</strong></h3>
            <p>Our competent employees daily manage our property and help the firm create a safe and increased success. At 360 North we have inhouse Asset Management as well as Property Management.</p>
          </div>

          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto ml-md-auto mr-md-0 pt-5 pt-md-0">
            <img alt="image" class="img-fluid" src="./imgs/img_square_3.svg">
            <h3><strong>Counseling</strong></h3>
            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="about-us" class="fdb-block">
      <div class="container">
        <div class="row">
          <div class="col col-md-8 text-left">
            <h1>About Us</h1>
            <p class="text-h3">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far world of grammar.</p>
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
