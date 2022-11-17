<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--lein vers css-->
<link rel="stylesheet" href="css/fonts.css">

    <!--compatiblité avec internet edge-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--controle ma mise en page sur mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">-->
    <!--titre de la page-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="shortcut icon" type="image/ico" href="img/Logo 500x500  px.jpeg">
    <link rel="stylesheet" href="css/saida.css">
    <title>Portfolio S.Bahloul</title>
</head>
<body>
    <header>
    <!--une div pour les deux logos-->

        <div class="container ">
        <!--les liens de navigation sous forme d'une liste-->
            <nav class="navbar navbar-expand-lg text-body ">

                <a href="index.html">
                    <img class="logos-1" title="jadoo" src="img/Logo 500x500  px.jpeg" alt="jadoo1" width="150px">
                </a>
              
                
                <div class="collapse navbar-collapse  "  id="navbarNavDropdown">

                    <ul class="navbar-nav ">
                        <li class="nav-item active ">
                             <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Compétences</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="#">Projets</a>
                        </li>
                        <li class="onglets burger"><a href="#"></a>
                            <img title="Menu" src="img/burger_icon.svg" alt="Icone menu">
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             GITHUB
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>    
    </header>
    
    <!--section-1-->
    <section id="section-1">
       
            <article class="titres">

                <video playsinline autoplay muted loop id="bgvid" >
                    <source src="img/Computer - 36503.mp4" type="video/mp4">
                </video>
                <h1 class=" text-white text-center display-2">Developpeur Web<br> Full-Stack</h1>
              

              
             
            </article>
            
        </section>
        <section  id="section-2">
                <div class="text-center">
                        <h2 class="h2-s2 text-white text-center pt-5">Mes Projets</h2>
                       
                </div>

                <div class="container " >

                    <div class="row m-2 ">

                        <div class="mt-3 col-md-4 col-sm-12  ">
                            <div class="card ">
                                    <img src="img/jadoo.png" class="card-img-top img-fluid" alt="" title="">
                                    <h4 class="card-title text-black text-center">Projet Jadoo </h4>  
                                    <p class="text-center">Réalisé avec HTML , CSS</p> 

                                    <div class="card-body text-center">
                                        <a class="btn btn-secondary" href="https://github.com/s-bahloul/site-jadoo.git">Voir le site</a>
                                    </div>    
                            </div> 
                              
                        </div>
    

                        <div class="mt-3 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="img/beauty.png" class="card-img-top img-fluid" alt="imgJadoo" title="imgJadoo">
                                <h4 class="card-title text-black text-center">Projet CS Beauty</h4>   
                                <P class="text-center">Réalisé avec BOOTSTRAP</P>  

                                <div class="card-body text-center">
                                    <a class="btn btn-secondary" href="https://github.com/s-bahloul/agence-de-voyage-bootstraps.git">Voir le site</a>
                                </div>               
                            </div>
                        </div>
                        
                        <div class="mt-3 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="img/js.png" class="card-img-top img-fluid" alt="imgcs" title="imgcs">
                                <h4 class="card-title text-black text-center">Projet Languages Programmation</h4>  
                                <p class="text-center">Réalisé avec JAVASCRIPT</p>   
                                
                                <div class="card-body text-center">
                                    <a class="btn btn-secondary" href="https://github.com/s-bahloul/site-jadoo.git">Voir le site</a>
                                </div>                
                            </div>
                        </div>

                        <div class="mt-3 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="img/php1.png" class="card-img-top img-fluid" alt="imgPhp" title="imgPhp">
                                <h4 class="card-title text-black text-center">Projet PHP</h4> 
                       
                                
                                <div class="card-body text-center">
                                    <a class="btn btn-secondary" href="https://github.com/s-bahloul/site-jadoo.git">Voir le site</a>
                                </div>                 
                            </div>
                        </div>
                        <div class="mt-3 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="img/phpg.png" class="card-img-top img-fluid" alt="imgPhpG" title="imgPhpG">
                                <h4 class="card-title text-black text-center">Projet Ma Classe</h4> 
                                <p class="text-center">Réalisé avec PHP </p>   
                                
                                <div class="card-body text-center">
                                    <a class="btn btn-secondary" href="https://github.com/s-bahloul/site-jadoo.git">Voir le site</a>
                                </div>                 
                            </div>
                        </div>

                    </div>

                </div> 
        </section>

        <section  id="section-3">
            <div class="container bg-secondary mt-5">

                <h2 class="h2-s2 text-white text-center pt-5">Mes compétences</h2>

               
                  <!-- List group -->
                    <div class="list-group " id="myList" role="tablist">
                        <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab">HTML</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">CSS</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Javascript</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">SettingsMySQL</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">PHP</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Sass</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Photoshop</a>
                    </div>
                    
                    <!-- Tab panes -->
                    <div class="tab-content ">
                        <div class="tab-pane active" id="home" role="tabpanel">...</div>
                        <div class="tab-pane" id="profile" role="tabpanel">...</div>
                        <div class="tab-pane" id="messages" role="tabpanel">...</div>
                        <div class="tab-pane" id="settings" role="tabpanel">...</div>
                    </div>
            </div>
        </section>
        <section class="section-3">

        <?php
        //Creer les variables de connexion
      $host = "promo-113.codeur.online";
      $user = "saidaa";
      $pass = "n2P265pA8wjotQ==";
      $dbname = "saidaa_portfolio";
      
      try {
          $base3 = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";charset=UTF8", $user, $pass);

          $base3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "<div class='text-center'>
              <p class='alert alert-success'>Vous etes connectez a PDO MySQL</p>
          </div>";
          $sql = "INSERT INTO `email`(`id_email`) VALUES (?)";
          $insert_email = $base3->prepare($sql);
          $insert_email->bindParam(1, $_POST['id_email']);
          $insert_email->execute();
      
          if($insert_email){
              echo "<p class='alert alert-success'>Votre email a bien été enregistré !</p>";
          }else{
              echo "<p class='alert alert-danger'>Erreur lors de l'envoi de votre email !</p>";
          }
      
      } catch (PDOException $exception) {
          echo "<p class='alert amert-danger'>Erreur de connexion a PDO MySQL </p>" . $exception->getMessage();
      }
      
      
      
      if(isset($_POST['objet']) && !empty($_POST['objet']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message'])){
      
          //Creer des variables
          $destinataire = "dalidi915@gmail.com";
          $objet = $_POST['objet'];
          $email = $_POST['email'];
          $message = $_POST['message'];
      
          $to = $destinataire;
          $subject = $objet;
         
      
          $options = 'MIME-Version: 1.0' . "\r\n";
          $options .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      
          $message = '<html>
              <body style="background-color: red; color:white">
                   <p>Expediteur : '.$email.'</p>
                  <p>Objet du mail : '.$subject.'</p>
                  <p>Message : '.$message.'</p>
              </body>
          </html>';
      
          //Fonction mail de php
          mail($to, $subject, $message, $options);
      
          echo "<p class='alert alert-success'>Votre email a bien été envoyé !</p>";
          echo "<div class='text-center'>
                  <a href='https://martinb.promo-113.codeur.online/index.php' class='btn btn-outline-info'>Retour</a>
              </div>";
      
      }else{
          echo "<p class='alert alert-danger'>Votre email n'a pas ete envoyé, merci de recommencer!</p>";
      }
      
    ?>

    <div class="container  lightmt-5">
            <h2 class="h2-s2 text-white text-center pt-5">Me contacter</h2>
               
        <form action="email.php" method="post" class="container">

            <div class="mb-4 text-white">
                <label for="objet">Objet </label>
                <input type="text" class="form-control" name="objet" id="objet" placeholder="Entrer votre objet">
            </div>

            <div class="mb-4 text-white">
                <label for="email">  Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre email">
            </div>

            <div class="mb-4 text-white">
                <label for="message">Message </label>
                <textarea rows="4" class="form-control" name="message">Entrer votre message</textarea>
            </div>

            <div class="mb-4 text-center ">
                <button type="submit" class="btn btn-secondary ">Envoyer</button>
            </div>

        </form>
               
    </div>
            
    
            <div class="container text-center">
                <a href="assets/pdf/saida_bahloul_(1)_février_2021.pdf" class="btn btn-secondary">
                    
                    Telecharger mon CV
                </a>
            </div>

        </section>
        <section class="section-4">
            <footer class="bg-dark text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                  <!-- Section: Social media -->
                  <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
              
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-twitter"></i
                    ></a>
              
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-google"></i
                    ></a>
              
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-instagram"></i
                    ></a>
              
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
              
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-github"></i
                    ></a>
                  </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright:
                  <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
              </footer>
        </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

       
    