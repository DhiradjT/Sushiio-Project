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
  <div class="container-fluid testimonial shadow">
    <div class="row mt-5">
      <div class="col-lg-12 text-center">
        <h2 class="services-h2">Wat onze klanten zeggen</h2>
        <b class="text-secondary">Onze klanten sturen ons veel positieve feedback over onze diensten en daar zijn we dol op</b>
      </div>
  
      <div class="col-lg-12 mt-5">

          <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="card border-0 shadow" >
                  <div class="card-body">
                    <p class="card-text">"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper."</p>
                    <div class="testimonial-img">
                      <img src="img/stockman1.jpg" class="rounded-circle" alt="Saul Goodman Ceo Founder">
                    </div>
                  </div>
                </div>
                <h3 class="name-testimonial-person">Saul Goodman</h3>
                <h4 class="source-testimonial-person">Facebook</h4>
              </div>



              <div class="carousel-item">
              <div class="card border-0 shadow" >
              <div class="testimonial-img text-center"><img src="img/stockman1.jpg" class="rounded-circle" alt="Matt Brandon Freelancer ">
                </div>
                  <div class="card-body mt-5">
                  <h3 class="name-testimonial-person text-center">Marts Ploon</h3>
                  <h4 class="source-testimonial-person text-center">Facebook</h4>
                  <p class="card-text">"Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore."</p>
              </div>
            </div>
            </div>


              <div class="carousel-item">
              <div class="card border-0 shadow" >
              <div class="testimonial-img text-center"><img src="img/stockman1.jpg" class="rounded-circle" alt="Matt Brandon Freelancer ">
                </div>
                  <div class="card-body mt-5">
                  <h3 class="name-testimonial-person text-center">Joost Siemons</h3>
                  <h4 class="source-testimonial-person text-center">Facebook</h4>
                  <p class="card-text">"Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore."</p>
              </div>
            </div>
            </div>




            <div class="carousel-item">
              <div class="card border-0 shadow" >
              <div class="testimonial-img text-center"><img src="img/stockman1.jpg" class="rounded-circle" alt="Matt Brandon Freelancer ">
                </div>
                  <div class="card-body mt-5">
                  <h3 class="name-testimonial-person text-center">Brandon State</h3>
                  <h4 class="source-testimonial-person text-center">Uber</h4>
                  <p class="card-text">"Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore."</p>
              </div>
            </div>
            </div>



            <div class="carousel-item">
              <div class="card border-0 shadow" >
              <div class="testimonial-img text-center"><img src="img/stockman1.jpg" class="rounded-circle" alt="Matt Brandon Freelancer ">
                </div>
                  <div class="card-body mt-5">
                  <h3 class="name-testimonial-person text-center">Tracy Noord</h3>
                  <h4 class="source-testimonial-person text-center">Uber Eats</h4>
                  <p class="card-text">"Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore."</p>
              </div>
            </div>
            </div>


          </div>
        </div>

        </div>

      </div>  <!--ROW end div-->
    </div> <!--CONTAINER end div-->
    </div><!--End Testimonials section div-->


    </div>
  </div>
  <!-- </div> -->







  <!-- 
          <div class="container">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/stock1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/stock2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
          </div> -->






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