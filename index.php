<!--1-->
<?php
session_start();
require_once("controleur/controleur.class.php");
require_once("controleur/controleur_devis.php");
require_once("conf/config.ini");
//instancier la classe controleur
$unControleur=new Controleur($serveur,$bdd,$user,$mdp);
$unDevisC = new ControleurDevis($serveur,$bdd,$user,$mdp);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/mtcStyles.css">
    <title>MTC</title>
</head>
<body  style="background: url('images/bluemarbreBack.jpg')"><!--style="background-image: url(src/images/background.jpg)"-->
    <div>
    <center>
    <!--<header class="header">
          <div class="title"><h1> NOM </h1></div>
          <div class="headerCo"><a href="index.php?page=6"> Déconnexion </a></div>
        </header>-->
        <div id="accueil">
        <?php
        if(! isset($_SESSION['email']))
        {
          echo '
          <header class="header">
            <!--<img src="src/images/logo.png" id="logo">-->

            <div class="title">
              <img src="images/logoMTC.png" id="logo" height="70px">
            </div>

            <!--<div class="nav">-->
              <nav>
                <a href="index.php?page=0"> Acceuil </a>
                <a href="index.php?page=1"> Les Réalisations </a>
                <a href="index.php?page=2"> Les Projets </a>
                <a href="index.php?page=3"> Les Services </a>
                <a href="index.php?page=4"> Devis  </a>
              </nav>
            <!--</div>-->

            <div class="headerCo">
              <a class=headerCon href="index.php?page=5"> Connexion/Inscription </a>
            </div>
          </header>
        </br>';



      if(isset($_GET['page'])) $page = $_GET['page'];
           else  $page = 0;
        switch ($page)
        {
            case 0 :
                require_once("accueil.php");
            break;
            case 1 :
                require_once("gestion_realisation.php");
            break;
            case 2 :
                require_once("gestion_projet.php");
            break;
            case 3 :
                require_once("gestion_service.php");
            break;
            case 4 :
                require_once("gestion_devis.php");
            break;
            case 5 :
                require_once("vue/vue_connexion.php");
            break;
            case 6 :
                session_destroy();
                header("Location: index.php");
            break;
            case 8 :
                require_once("vue/gestion_ouvrier.php");
            break;
        }
        echo"
        <footer class='footer'>
          <div id='footer'>
            <div id='logoInsta'>
              <a href='https://www.instagram.com/renovationpro92/?hl=fr' target='blank'><img src='images/insta.png'></a>
            </div>

            <div class='bar'>
              <img src='images/barFooter2.png'>
            </div>

            <div class='contact'>
              <p> CONTACTEZ NOUS : mtc.batiment92@gmail.com </p>
              <p> Téléphone : 0603284138 </p>
            </div>

            <div class='bar'>
              <img src='images/barFooter2.png'>
            </div>

            <div class='adresse'>
              <p><strong> DEPLACEMENT :</strong> région Parisienne </p>
            </div>
          </footer>
        </footer>";
      }
        ?>

        <?php

    if (isset($_SESSION['droits']) && $_SESSION['droits'] =="ouvrier")
  			{
          echo '
          <header class="header">
            <!--<img src="src/images/logo.png" id="logo">-->

            <div class="title">
              <img src="images/logoMTC.png" id="logo" height="70px">
            </div>

            <!--<div class="nav">-->
              <nav>
                <a href="index.php?page=0"> Acceuil </a>
                <a href="index.php?page=1"> Les Réalisations </a>
                <a href="index.php?page=2"> Les Projets </a>
                <a href="index.php?page=3"> Les Services </a>
                <a href="index.php?page=9"> Les Ouvriers  </a>
              </nav>
            <!--</div>-->

            <div class="headerCo">
              <a class=headerCon href="index.php?page=6"> Vous Deconnecter </a>
            </div>
          </header>

        </br>
        ';



			if(isset($_GET['page'])) $page = $_GET['page'];
           else  $page = 0;
        switch ($page)
        {
            case 0 :
                require_once("accueil.php");
            break;
            case 1 :
                require_once("gestion_realisation.php");
            break;
            case 2 :
                require_once("gestion_projet.php");
            break;
            case 3 :
                require_once("gestion_service.php");
            break;
            case 5 :
                require_once("vue/vue_connexion.php");
            break;
            case 6 :
                session_destroy();
                header("Location: index.php");
            break;
            /*case 7 :
                require_once("contact.php");
            break;
            case 8 :
                require_once("mentionsLegales.php");
            break;*/
            case 9 :
                require_once("gestion_ouvrier.php");
            break;
        //}

        }
        echo"
        <footer class='footer'>
          <div id='footer'>
            <div id='logoInsta'>
              <a href='https://www.instagram.com/renovationpro92/?hl=fr' target='blank'><img src='images/insta.png'></a>
            </div>

            <div class='bar'>
              <img src='images/barFooter2.png'>
            </div>

            <div class='contact'>
              <p> CONTACTEZ NOUS : mtc.batiment92@gmail.com </p>
              <p> Téléphone : 0603284138 </p>
            </div>

            <div class='bar'>
              <img src='images/barFooter2.png'>
            </div>

            <div class='adresse'>
              <p><strong> DEPLACEMENT :</strong> région Parisienne </p>
            </div>
          </footer>
        </footer>";
      }

      if (isset($_SESSION['droits']) && $_SESSION['droits'] =="admin")
    			{
            echo '
            <header class="header">
              <!--<img src="src/images/logo.png" id="logo">-->

              <div class="title">
                <a href="index.php?page=0"><img src="images/logoMtc.png" id="logo" height="70px"></a>
              </div>

              <!--<div class="nav">-->
                <nav>
                  <a href="index.php?page=0"> Acceuil </a>
                  <a href="index.php?page=1"> Les Réalisations </a>
                  <a href="index.php?page=2"> Les Projets </a>
                  <a href="index.php?page=3"> Les Services </a>
                  <a href="index.php?page=4"> Les Devis  </a>
                  <a href="index.php?page=9"> Les Ouvriers  </a>
                  <a href="index.php?page=10"> Les Chefs de Chantier  </a>
                </nav>
              <!--</div>-->

              <div class="headerCo">
                <a href="index.php?page=11"> Modifiez votre mot de passe  | </a>
                <a class=headerCon href="index.php?page=6"> Vous Deconnecter </a>
              </div>
            </header>

          </br>
          ';



  			if(isset($_GET['page'])) $page = $_GET['page'];
             else  $page = 0;
          switch ($page)
          {
              case 0 :
                  require_once("accueil.php");
              break;
              case 1 :
                  require_once("gestion_realisation.php");
              break;
              case 2 :
                  require_once("gestion_projet.php");
              break;
              case 3 :
                  require_once("gestion_service.php");
              break;
              case 4 :
                  require_once("gestion_devis.php");
              break;
              case 5 :
                  require_once("vue/vue_connexion.php");
              break;
              case 6 :
                  session_destroy();
                  header("Location: index.php");
                  break;
              /*case 6 :
                  require_once("contact.php");
              break;
              case 7 :
                  require_once("mentionsLegales.php");
              break;*/
              case 9 :
                  require_once("gestion_ouvrier.php");
              break;
              case 10 :
                  require_once("gestion_chef.php");
              break;
              case 11 :
                  require_once("gestion_motDePasse.php");
              break;
          //}
          }
          /*echo"
          <footer class='footer'>
            <div id='footer'>
              <div id='logoInsta'>
                <a href='https://www.instagram.com/renovationpro92/?hl=fr' target='blank'><img src='images/insta.png'></a>
              </div>

              <div class='bar'>
                <img src='images/barFooter2.png'>
              </div>

              <div class='contact'>
                <p> CONTACTEZ NOUS : mtc.batiment92@gmail.com </p>
                <p> Téléphone : 0603284138 </p>
              </div>

              <div class='bar'>
                <img src='images/barFooter2.png'>
              </div>

              <div class='adresse'>
                <p><strong> DEPLACEMENT :</strong> région Parisienne </p>
              </div>
            </footer>
          </footer>";*/
        }

        if (isset($_SESSION['droits']) && $_SESSION['droits'] =="user")
      			{
              echo '
              <header class="header">
                <!--<img src="src/images/logo.png" id="logo">-->

                <div class="title">
                  <img src="images/logoMTC.png" id="logo" height="70px">
                </div>

                <!--<div class="nav">-->
                  <nav>
                    <a href="index.php?page=0"> Acceuil </a>
                    <a href="index.php?page=1"> Les Réalisations </a>
                    <a href="index.php?page=2"> Les Projets </a>
                    <a href="index.php?page=3"> Les Services </a>
                    <a href="index.php?page=4"> Les Devis  </a>
                    <a href="index.php?page=9"> Grille tarifaire </a>
                  </nav>
                <!--</div>-->

                <div class="headerCo">
                  <a class=headerCon href="index.php?page=6"> Vous Deconnecter </a>
                </div>
              </header>

            </br>
            ';



    			if(isset($_GET['page'])) $page = $_GET['page'];
               else  $page = 0;
            switch ($page)
            {
                case 0 :
                    require_once("accueil.php");
                break;
                case 1 :
                    require_once("gestion_realisation.php");
                break;
                case 2 :
                    require_once("gestion_projet.php");
                break;
                case 3 :
                    require_once("gestion_service.php");
                break;
                case 4 :
                    require_once("gestion_devis.php");
                break;
                case 5 :
                    require_once("vue/vue_connexion.php");
                break;
                case 6 :
                    session_destroy();
                    header("Location: index.php");
                    break;
                /*case 6 :
                    require_once("contact.php");
                break;
                case 7 :
                    require_once("mentionsLegales.php");
                break;*/
                case 9 :
                    require_once("gestion_ouvrier.php");
                break;
            //}

            }
            echo"
            <footer class='footer'>
              <div id='footer'>
                <div id='logoInsta'>
                  <a href='https://www.instagram.com/renovationpro92/?hl=fr' target='blank'><img src='images/insta.png'></a>
                </div>

                <div class='bar'>
                  <img src='images/barFooter2.png'>
                </div>

                <div class='contact'>
                  <p> CONTACTEZ NOUS : mtc.batiment92@gmail.com </p>
                  <p> Téléphone : 0603284138 </p>
                </div>

                <div class='bar'>
                  <img src='images/barFooter2.png'>
                </div>

                <div class='adresse'>
                  <p><strong> DEPLACEMENT :</strong> région Parisienne </p>
                </div>
              </footer>
            </footer>";
          }

        ?>
        </div>

       <!-- <footer>
            <a href="index.php?page=6"> Nous Contacter </a>
            <a href="index.php?page=7"> Mentions Légales </a>
        </footer>-->
    </center>
</div>
</body>
</html>
