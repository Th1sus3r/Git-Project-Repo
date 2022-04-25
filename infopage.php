<?php 
require_once ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Information</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="agencylayout.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
        <header>
            <h1 class="display-3 text-center my-4">Delaw-Airlines</h1>
        
            <hr>
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="travelagency.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="infopage.php">Destinations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
              
  <div style="margin-top:10px;"></div>
              <br>
        </header>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Travel plans brought to you at low prices!</h1>
              <p class="lead">We offer travel plans with direct flights to multple cities at only the best prices! Delaw-Airlines will guarantee you a satisfactory sale or your money back! From Baltimore to Los Angeles, Atlanta to New York, we book flights across all across the country. To expand our branches and broaden your horizons even further, we now offer overseas trips to Europe, including Paris and London! 
              </p>
            </div>
          </div>
          <div style="margin-top:50px;"></div>

        <div class="container">
            <h2>Our Destinations</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>          
          
              <div class="carousel-inner">

                  <?php 
                  $sql = "SELECT * FROM destinations";
                  $result = mysqli_query($db_conn, $sql) or die ("Bad Query: $sql");
                  $active = false;

                  while ($row = mysqli_fetch_assoc($result)) {
                      if ($active == false) {
                          $active = true;
                          echo ("<div class='carousel-item active'>");
                      }
                          else {
                            echo ("<div class='carousel-item'>");
                          }
                    echo ("<img src={$row['photo_url']} style='width:100%;'>" . "<div class='carousel-caption'>" . "<h3>{$row['location']}</h3>" . "<p>{$row['description']}</p>" . "<p>{$row['destination_price']}</p>" . "</div>" . "</div>");
            }
                  ?>
          <!--
                <div class="carousel-item active">
                  <img src="https://th.bing.com/th/id/R.c92fec48c2ce1a5303621e415de801da?rik=9OfBgi3Lei2FWg&pid=ImgRaw&r=0" alt="Los Angeles" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>Enjoy the magical nightlife of LA! Flights starting at $240!</p>
                  </div>
                </div>
          
                <div class="carousel-item">
                  <img src="https://media.cntraveler.com/photos/5bbb6967625211259a973ad5/master/w_1200,c_limit/GettyImages-1026090174.jpg" alt="Chicago" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>See the vast reaches of Chicago! Flights starting at $150!</p>
                  </div>
                </div>
              
                <div class="carousel-item">
                  <img src="https://th.bing.com/th/id/R.599ff8711a402a0ecf04672b7c4a04db?rik=D33Eo9cRjSsnxQ&riu=http%3a%2f%2fthestyleinspiration.com%2fwp-content%2fuploads%2f2019%2f06%2ftimes-square.jpg&ehk=BrMFkpgXD63fZF%2bvQvDANxSuwTcTE3ZEa8rwMa7GqPg%3d&risl=&pid=ImgRaw&r=0" alt="New York" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>Delve into the rich culture of the Big Apple! Flights starting at $180!</p>
                  </div>
                </div>

                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/R.aeeaa60e0a061c8ef3244f58f6e5a834?rik=Hd8gPVsaLqsSPA&pid=ImgRaw&r=0" alt="Paris" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>Paris</h3>
                      <p>Gaze upon the lights of this marvelous French city! Flights starting at $590!</p>
                    </div>
                  </div>
            
                  <div class="carousel-item">
                    <img src="https://www.twelvetransfers.co.uk/wp-content/uploads/2018/05/london-sightseeing.jpg" alt="London" style="width:100%;">
                    <div class="carousel-caption">
                      <h3>London</h3>
                      <p>Enter the sophisticated atmosphere of the capitol of England! Flights starting at $630!</p>
                    </div>
                  </div>
            -->

              </div>
          
              <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
            </div>
          </div>
        
        </body>
        </html>