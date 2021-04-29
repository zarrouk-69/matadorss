<?php
    include "../controller/userC.php";
    include_once '../entities/user.php';

	$utilisateurC = new UtilisateurC();
	$error = "";

	if (
        isset($_POST["nomU"]) && 
        isset($_POST["prenomU"]) &&
        isset($_POST["adresseU"]) && 
        isset($_POST["mdpU"])
    ){
		if (
            !empty($_POST["nomU"]) && 
            !empty($_POST["prenomU"]) && 
            !empty($_POST["adresseU"]) && 
            !empty($_POST["mdpU"])
        ) {
            $user = new utilisateur(
                $_POST['nomU'],
                $_POST['prenomU'], 
                $_POST['adresseU'],
                $_POST['mdpU']
            );
            
            $utilisateurC->modifierUtilisateur($user, $_GET['idU']);
            //header('Location:afficherUtilisateurs.php');
        }
        else
            $error = "Missing information";
	}

?>

<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>naturious modifier utlisateurs</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
        
	</head>
	<body>
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../views/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="afficherUtilisateurs.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">gestion utlisateurs</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <br><br> <br><br> <br><br>

        
		
    
        
        <div idU="error">
            <?php echo $error; ?>
        </div>
		 <?PHP
            if (isset($_GET['idU'])){
                $user = $utilisateurC->recupererUtilisateur1($_GET['idU']);
                
        ?>
		
		<form action="" method="POST">

            <table align="center">
                <tr>
                    <td rowspan='2' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nomU">Nom:
                        </label>
                    </td>
                
                    <td><input type="text" name="nomU" id="nomU" maxlength="20" value = "<?php echo $user->nomU; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomU">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenomU" id="prenomU" maxlength="20" value = "<?php echo $user->prenomU; ?>"></td>
                </tr>
                
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="adresseU" name="email" id="adresseU" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->adresseU; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mdpU">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="mdpU" name="mdpU id="mdpU" value = "<?php echo $user->mdpU; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>

           <?PHP
        }
        ?>
        </form>
		
         </table>
        <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
            <button><a href="afficherUtilisateurs.php">retour</a> </button> <br>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
         <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
	</body>
</html>