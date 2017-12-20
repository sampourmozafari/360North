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
    <section class="fdb-block pt-0">
      <div class="container-fluid p-0 pb-md-5">
        <div id="map">

        </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-12 col-md-6 col-lg-5">
            <h2>Contact Us</h2>
            <p class="text-h3">
              Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
            </p>

            <p class="text-h3">
              It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
            </p>

            <p class="text-h3 mt-5">
              <strong>Address:</strong> <a href="https://www.google.dk/maps/place/Antoinettevej+2,+2500+Valby/@55.665849,12.5240523,17z/data=!3m1!4b1!4m5!3m4!1s0x46525391b481c527:0xd92b31721a146a4f!8m2!3d55.665849!4d12.526241" target="_blank">Antoinettevej 2, 2500 Valby</a>
            </p>
            <p class="text-h3">
              <strong>Email:</strong> <a href="mailto:info@360north.dk">info@360north.dk</a>
            </p>
            <p class="text-h3">
              <strong>Phone:</strong> <a href="">+45 39 45 62 00</a>
            </p>
          </div>

          <div class="col-12 col-md-6 ml-auto pt-5 pt-md-0">
            <form>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="row mt-4">
                <div class="col">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row mt-4">
                <div class="col">
                  <input type="email" class="form-control"  placeholder="Subject">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col">
                  <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col">
                  <button type="submit" class="btn">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script>
      function initMap() {
        var uluru = {lat: 55.665851, lng: 12.526241};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDITeU_VTg2I3yyVCsk-QLMCw7CDwiC0_o&callback=initMap">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
