    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Sushiio</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        </head>
        <body>
            

        <!-- Nav section  -->

          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="index.php">SUSHIIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                <a class="nav-link text-light" href="order.php">Bestellen</a>
              </div>
            </div>
            </div>
          </nav>
        </div> <!-- end col  -->


        <!-- Header section  -->

          <div class="p-5 bg-image" class="img-fluid" style="background-image: url('./img/test2.png'); height: 310px;" >
          </div>




        <!-- Order text section  -->

            <div class="container">
              <div class="row">
                <div class="col-md-12 mt-5">
                <div class="card border-0 shadow">
                    <div class="card-body">
                  <h2 class="fw-semibold">Bestelling</h2>
                  <?php
                    session_start();

                    echo "Makikomkommmer" . $_SESSION['makikomkommer'] . "<br>" . "Makiavocado" . " " . $_SESSION['makiavocado'] . "<br>" . "Nigirizalm" . " " .   $_SESSION['nigirizalm'] . "<br>" . " " . "Philadelphiaroll" . " " .   $_SESSION['philadelphiaroll'] . "<br>" . "Spicytunaroll" . " " .   $_SESSION['spicytunaroll'] . "<br>" . "Californiaroll" . " " .  $_SESSION['californiaroll'];
                  ?>
                  <br>
                  <br>
                        <b>Totaal: €5,00</b>
                    </div>
                </div>
            </div>  <!-- end col  -->
            </div>  <!-- end row  -->
            </div> <!-- end container  -->

            
            <!-- Customer INFO text section  -->

            <div class="container">
              <div class="row">
                <div class="col-md-12 mt-5">
                <div class="card border-0 shadow">
                    <div class="card-body">
                  <h2 class="fw-semibold">Klantgegevens</h2>


                  <p>
                  <?php 
    

      echo $_SESSION['firstname'] . " " .   $_SESSION['lastname'] . "<br>" .  $_SESSION['email'] ."<br>".  $_SESSION['adress'] ."<br>" .  $_SESSION['zip'] ."<br>" .  $_SESSION['living']; 

 
    ?>
             
                    </p>
                    </div>
                </div>
            </div>  <!-- end col  -->
            </div>  <!-- end row  -->
            </div> <!-- end container  -->







            <!-- Footer section  -->

            <div class="container-fluid bg-dark">
                <div class="row mt-5">

                <div class="col mt-3 text-light text-center">
                  <p>
                  <b>Contactgegevens</b><br>
                    Restaurant Sushiio<br>
                    Appelstraat 1<br>
                    1111 AA Fruit<br>
                    sushiio@mail.io<br>
                    06-12345678<br>
                  </p>
                </div>


                <div class="col mt-3 text-light text-center">
                <p>
                  <b>Openingstijden</b><br>
                    Maandag: Gesloten<br>
                    Dinsdag: 16:00-22:00<br>
                    Woensdag: 16:00-22:00<br>
                    Donderdag: 16:00-22:00<br>
                    Vrijdag: 15:00-22:00<br>
                    Zaterdag: 15:00-22:00<br>
                    Zondag: 15:00-22:00<br>
                  </p>
                </div>

                </div>  <!-- end row  -->
            </div> <!-- end container  -->
    
            

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        </body>
        </html>