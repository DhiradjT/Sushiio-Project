
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
      <?php
  // Sushi's naar bestel pagina sturen
      session_start();
      if(isset($_POST['verzenden'])) {
        $_SESSION['makikomkommer'] = $_POST['makikomkommer'];
        $_SESSION['makiavocado'] = $_POST['makiavocado'];
        $_SESSION['nigirizalm'] = $_POST['nigirizalm'];
        $_SESSION['philadelphiaroll'] = $_POST['philadelphiaroll'];
        $_SESSION['spicytunaroll'] = $_POST['spicytunaroll'];
        $_SESSION['californiaroll'] = $_POST['californiaroll'];
        header("Location: order.php");
      }

      
  
      
            //Sushi's, voorraad, prijs uit database halen//
            //   if(isset($_POST['verzenden'])) {
            //       if(!empty($_POST['form-floating'])) {
            //          header("Location: order.php");
            //         }
            //       } try {
            //     $db = new PDO("mysql:host=localhost; dbname=sushi", "root" , "");
            //     $query = $db->prepare( "SELECT * FROM sushistock");
            //     $query->execute();
            //     $result = $query->fetchAll(PDO::FETCH_ASSOC);
            //     foreach($result as $data) {
            //     echo $data['naam'] . " ";
            //     echo "€ " .  $data['prijs'] . " ";
            //     echo $data['hoeveelheid'] . "<br>";
            //   }
            // } catch (PDOExeption $e) {
            //   die ("Error Reden" . $e->getMessage());
            // }
  ?>

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
              <a class="nav-link text-light" href="sushi.php">Bestellen</a>
            </div>
          </div>
          </div>
        </nav>
      </div> <!-- end col  -->


      <!-- Header section  -->

        <div class="p-5 bg-image" class="img-fluid" style="background-image: url('./img/test2.png'); height: 310px;" >
        </div>




        <!-- Customer INFO text section  -->

        <?php try {
    $db = new PDO("mysql:host=localhost;dbname=sushistock", "root", "");

    $query = $db->prepare("SELECT name,price,stock FROM sushi");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data) {
        echo $data["name"] . " "; 
        echo "€" .  $data["price"] . " ";
        echo $data["stock"] . " " . "<br>";
    }
  }   catch(PDOException $e) {
    die("DATABASE ERROR! ERROR CODE:" . $e->getMessage());
  }
      ?>

        <div class="container">
            <div class="row">
              <div class="col-md-12 mt-3">
                <h2 class="fw-semibold">Sushi's bestellen</h2>

                <form method="post" action="">
            

                <p class="fw-semibold">Maki komkommer <i>(max = 5)</i></p>
                
                <p class="fw-semibold">Maki komkommer <i>(max = 5)</i></p>

                <div class="form-floating">
                  <select name="makikomkommmer" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>


                
                <p class="fw-semibold">Maki Avocado <i>(max = 10)</i></p>

                <div class="form-floating">
                  <select name="makiavocado" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>




                <p class="fw-semibold">Nigiri zalm <i>(max = 10)</i></p>

                <div class="form-floating">
                  <select name="nigirizalm" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>




                <p class="fw-semibold">Philadelphia Roll <i>(max = 5)</i></p>

                <div class="form-floating">
                  <select name="philadelphiaroll" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>




                <p class="fw-semibold">Spicy Tuna Roll <i>(max = 5)</i></p>

                <div class="form-floating">
                  <select name="spicytunaroll" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>


                
                <p class="fw-semibold">California Roll <i>(max = 8)</i></p> 

                <div class="form-floating">
                  <select name="californiaroll" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                      <label for="floatingSelect">Aantal</label>
                  </div>

                  <input type="submit" name="verzenden" class="btn btn-dark mt-4" value="Verzenden">
                  </form>

                  <br>
                  <br>
                  <br>

        
    




          </div>  <!-- end col  -->
          </div>  <!-- end row  -->
          </div> <!-- end container  -->


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