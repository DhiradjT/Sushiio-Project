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




      <!-- Customer INFO text section  -->

        <div class="container">
          <div class="row">
            <div class="col-md-12 mt-5">
              <h2 class="fw-semibold">Klantgegevens</h2>

     
        
                <form method="post" action="">
                    <label class="form-label">Voornaam</label>
                    <input type="text" class="form-control" name="firstname">

                       <label class="form-label">Achternaam</label>
                    <input type="text" class="form-control" name="lastname">

                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">

                    <label class="form-label">Adres</label>
                    <input type="text" class="form-control" name="adress">
                    
                    <label class="form-label">Postcode</label>
                    <input type="text" class="form-control" name="zip">

                    
                    <label class="form-label">Woonplaats</label>
                    <input type="text" class="form-control" name="living">

                    <input type="submit" name="verzenden" class="btn btn-dark mt-3" value="Ga naar sushi's">
                </form> 

                <?php

                session_start();


                
  //   if(isset($_POST['verzenden'])) {
  //     $check = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  //      if(empty($_POST['firstname']) . empty($_POST['lastname']) . empty($_POST['email']) . empty($_POST['adress']) .  empty($_POST['zip']) .  empty($_POST['living'])) {
  //         echo "Niet alle velden ingevuld";
  //     }  else if (!$check) {
  //             echo "Vul een geldig email in";
  //     } else if (!empty($_POST['firstname']) . !empty($_POST['lastname']) . !empty($_POST['email']) . !empty($_POST['adress']) .  !empty($_POST['zip']) .  !empty($_POST['living'])) {
  //         echo "Niet alle velden ingevuld";
  //         $_SESSION['firstname'] = $_POST['firstname'];
  //         $_SESSION['lastname'] = $_POST['lastname'];
  //         $_SESSION['email'] = $_POST['email'];
  //         $_SESSION['adress'] = $_POST['adress'];
  //         $_SESSION['zip'] = $_POST['zip'];
  //         $_SESSION['living'] = $_POST['living'];
  //         header("Location: sushi.php");
  //     }
  // }

  if(isset($_POST['verzenden'])) {
    $check = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
     if(empty($_POST['firstname']) . empty($_POST['lastname']) . empty($_POST['email']) . empty($_POST['adress']) .  empty($_POST['zip']) . empty($_POST['living'])) {
        echo "Niet alle velden ingevuld";
    }  else if (!$check) {
            echo "Vul een geldig email in";
    } else if (!empty($_POST['firstname']) . !empty($_POST['lastname']) . !empty($_POST['email']) . !empty($_POST['adress']) .  !empty($_POST['zip']) . !empty($_POST['living'])) {
        echo "Niet alle velden ingevuld";
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['adress'] = $_POST['adress'];
        $_SESSION['zip'] = $_POST['zip'];
        $_SESSION['living'] = $_POST['living'];
        header("Location: sushi.php");
    }
}


                
              // if(isset($_POST['verzenden'])) {
                
              //   $check = filter_input(INPUT_POST, "email" , FILTER_VALIDATE_EMAIL);
              //   if(empty($_POST['firstname']) && empty($_POST['lastname']) || empty($_POST['email']) && empty($_POST['adress']) && empty($_POST['zip']) &&  empty($_POST['living'])) {
              //     echo "Niet alle velden zijn ingevuld!";
              //   } else if (!$check) {
              //     echo "Vul een geldig email in!";
              //   }
                
              //   else if (!empty($_POST['firstname']) . !empty($_POST['lastname']) . !empty($_POST['email']) . !empty($_POST['adress']) .  !empty($_POST['zip']) .  !empty($_POST['living'])) {
              //     $_SESSION['firstname'] = $_POST['firstname'];
              //             $_SESSION['lastname'] = $_POST['lastname'];
              //             $_SESSION['email'] = $_POST['email'];
              //             $_SESSION['adress'] = $_POST['adress'];
              //             $_SESSION['zip'] = $_POST['zip'];
              //             $_SESSION['living'] = $_POST['living'];
              //             header("Location: sushi.php");
              //   }


              // }


                // if(isset($_POST['verzenden'])) {  
                //   $check = filet_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

                //   if(!$check) {
                //     echo "Vul een geldig email adres in!";
                //   }
                // }


              //   if(empty($_POST['firstname']) && empty($_POST['lastname']) || empty($_POST['email']) && empty($_POST['adress']) && empty($_POST['zip']) &&  empty($_POST['living'])) {
              //     echo "Niet alle velden zijn ingevuld!";
              //   } else if ($check === false) {
              //     echo "Vul een geldig email in!";
              //   }
                
              //   else if (!empty($_POST['firstname']) . !empty($_POST['lastname']) . !empty($_POST['email']) . !empty($_POST['adress']) .  !empty($_POST['zip']) .  !empty($_POST['living'])) {
              //     $_SESSION['firstname'] = $_POST['firstname'];
              //             $_SESSION['lastname'] = $_POST['lastname'];
              //             $_SESSION['email'] = $_POST['email'];
              //             $_SESSION['adress'] = $_POST['adress'];
              //             $_SESSION['zip'] = $_POST['zip'];
              //             $_SESSION['living'] = $_POST['living'];
              //             header("Location: sushi.php");
              //   }


              // }

                ?>
              
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