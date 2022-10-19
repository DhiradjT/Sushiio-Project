      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="style.css">
          <title>Sushiio</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
              <a class="nav-link text-light" href="customerinfo.php">Bestellen</a>
            </div>
          </div>
          </div>
        </nav>
      </div> <!-- end col  -->


      <!-- Header section  -->

        <div class="p-5 bg-image" class="img-fluid" style="background-image: url('./img/test2.png'); height: 310px;" >
        </div>

      <!-- Header text section  -->

          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2>
                <!-- Get the right time and greet with switch case -->
                <?php
                $i= date("H");
                switch ($i) {
                case $i >= 6 &&  $i <= 12;
                  echo "Goedemorgen";
                  break;
                case $i >= 12 && $i <= 18;
                  echo "Goedemiddag";
                  break;
                case $i >= 18 && $i <= 24;
                  echo "Goedenavond";
                  break;
                case $i >= 24 && $i <= 6;
                  echo "Goedenacht";
                  default:
                  }
                  ?>, welkom bij <b>Sushiio</b></h2>
                <p class="text-secondary">
                  Wij zijn gespecialiseerd in de Japanse keuken <br>
                  Het woord "sushi" is afkomstig van "su", wat azijn betekent en "shi" -- rijst.
                  </p>
                <p class="fw-bold text-muted">
                <?php 

  function dateForOrder()  {
    $newTime = strtotime('+1 hour');
    $dateOfToday = date('w', $newTime); 
    $restOfTheDate = sprintf("%s of %s %s", date('dS', $newTime), date('F', $newTime), date('Y', $newTime));
    $deliveryTime = date('H:i', $newTime);
    $time = date('G');
    if(($time < 15 || $time > 22 && $dateOfToday == 0 || $dateOfToday == 1)
    ) {
      echo 'Wij bezorgen momenteel niet of wij zijn gesloten';
    } else {
      switch ($dateOfToday) {
        case 0: echo ""; break;
        case 1: echo "Wij zijn op maandag gesloten"; break;
        case 2: echo "Vandaag is het Dinsdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime"; break;
        case 3: echo "Vandaag is het Woensdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;
        case 4: echo "Vandaag is het Donderdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;
        case 5: echo "Vandaag is het Vrijdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;   
        default: echo "Vandaag is het Zaterdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime ";
      };
    }
  };
  dateForOrder();


  // l = Geeft de dag aan 
  // j = Geeft datum aan
  // S = Geeft st of nd aan het einde van het getal
  // of = Van in het Nederlands
  // F = Maand
  // Y = Jaar
  // echo date("l jS \of F Y");


  ?>
                </p>
              </div>
          </div>  <!-- end row  -->
          </div> <!-- end container  -->



          <?php 

  // function dateForOrder()  {
  //   $newTime = strtotime('+1 hour');
  //   $dateOfToday = date('w', $newTime); 
  //   $restOfTheDate = sprintf("%s of %s %s", date('dS', $newTime), date('F', $newTime), date('Y', $newTime));
  //   $deliveryTime = date('H:i', $newTime);
  //   $time = date('G');
  //   if(($time < 15 || $time > 22 && $dateOfToday == 0 || $dateOfToday == 1)
  //   ) {
  //     echo 'We aren\'t delivering right now or we are closed' ;
  //   } else {
  //     switch ($dateOfToday) {
  //       case 0: echo "We are closed on Sundays"; break;
  //       case 1: echo "We are closed on Mondays"; break;
  //       case 2: echo "Vandaag is het Dinsdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;
  //       case 3: echo "Vandaag is het Woensdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;
  //       case 4: echo "Vandaag is het Donderdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;
  //       case 5: echo "Vandaag is het Vrijdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime "; break;   
  //       default: echo "Vandaag is het Zaterdag $restOfTheDate <br>Als je nu een bestelling plaatst, dan zal je bestelling arriveren op:  $deliveryTime ";
  //     };
  //   }
  // };
  // dateForOrder();


  // l = Geeft de dag aan 
  // j = Geeft datum aan
  // S = Geeft st of nd aan het einde van het getal
  // of = Van in het Nederlands
  // F = Maand
  // Y = Jaar
  // echo date("l jS \of F Y");


  ?>

          <!-- Cards section  -->

          <div class="container">
            <div class="row">

            <div class="col">
            <div class="card shadow border-0" style="">
            <img src="./img/testdel2.webp" class="card-img-top" alt="food delivery">
            <div class="card-body">
            <a href="customerinfo.php" class="stretched-link text-black" style="text-decoration:none">Bestel bij ons je sushi's.</a>
          </div>
        </div>
      </div>

            <div class="col">
            <div class="card shadow border-0" style="">
            <img src="./img/sushi-3.jpg" class="card-img-top" alt="a bowl of sushi">
            <div class="card-body">
            <a href="customerinfo.php" class="stretched-link text-black" style="text-decoration:none">Keuze uit verschillende soorten sushi's.</a>
          </div>
        </div>
            </div>
            </div>  <!-- end row  -->
          </div> <!-- end container  -->


  <!-- <div class="section-testimonial"> -->
  <div class="container testimonial">
    <div class="row mt-5">
      <div class="col-lg-12">
        <p class="testimonial-p"><b>ONZE KLANTEN</b></p>
        <h2 class="testimonial-h2">Testimonials</h2>
        <p class="testimonial-text">Onze kernwaarden vormen de kern van alles wat we doen. <br> Ze zijn geïntegreerd in ons dagelijkse werkleven en helpen <br> ons te onthouden dat onze klanten altijd op de eerste plaats <br> komen, het laatste bedankje moet altijd van ons komen.</p>
        Schrijf een review <a href="review.php"><i class="bi bi-plus-circle-fill"></i></a>
      </div>

      
      <div class="col mt-5">
      <div class="card shadow border-0">
      <div class="testimonial-1">
  <div class="card-body">
  <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> 
    <h5 class="card-title text-light  mt-5">Brandon Lee</h5>
    <p class="card-text text-light">2 vrienden en ik zijn er afgelopen zaterdagavond (08-10-22) gaan eten. Reserveren is een must. Een heel klein restaurant in een geweldig hotel. Er waren waarschijnlijk 8 tafels in het gebied dat werd gebruikt. Ze nodigden ons uit om naar de bar te gaan voor een drankje als we dat wilden.</p>
    <i>10-10-2022</i>
  </div>
</div>
</div>
      </div>



      <div class="col mt-5">
      <div class="card shadow">
      <div class="testimonial-2">
  <div class="card-body">
  <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i>
    <h5 class="card-title text-light mt-5">Hans Schaek</h5>
    <p class="card-text text-light">Zo’n heerlijk eten! Fraai opgediend op een mooi bord en met een vriendelijke lach geserveerd. Een gezellige sfeer. Je moet zeker een "foodie" zijn voor deze plek, geweldig gebruik van culinaire technieken. Een beetje te verfijnd voor ons, maar we hadden een geweldige tijd. We hebben enorm genoten. </p>
    <i>03-10-2022</i>
  </div>
</div>
</div>
      </div>

      

      <div class="col mt-5">
        <div class="card shadow">
        <div class="testimonial-3">
  <div class="card-body">
  <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
    <h5 class="card-title text-light  mt-5">Mieke Dijk</h5>
    <p class="card-text text-light">Heerlijk heerlijk heerlijk. De aandacht voor detail, de service, de keuze in het menu, de snelheid en de kwaliteitsprijs was fantastisch. Was zwanger toen we daar aten en de chef was uiterst meegaand om een paar van de gerechten te veranderen zodat ik ze kon eten. Zal zeker teruggaan!</p>
    <i>05-10-2022</i>
  </div>
</div>
</div>
      </div>
      
      



    </div>
  </div>
  <!-- </div> -->
  
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

              </div>
          </div> 
  
          

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      </body>
      </html>