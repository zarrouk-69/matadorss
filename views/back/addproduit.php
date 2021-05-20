<?php
    require_once 'C:/xampp/htdocs/integration/controller/produitC.php';
    require_once 'C:/xampp/htdocs/integration//entities/produit.php';

    $produitC =  new produitC();

    if (isset($_POST['nomPr']) && isset($_POST['prixPr']) && isset($_POST['imagePr'])&& isset($_POST['categoriePr'])&& isset($_POST['qtestockPr'])) {
        $produit = new produit($_POST['nomPr'], (float)$_POST['prixPr'], $_POST['imagePr'], $_POST['categoriePr'], (int)$_POST['qtestockPr']);
        
        $produitC->addproduit($produit);

        header('Location:showproduits.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<link>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="/integration/assets1/img/brand/favicon.png" type="imagePr/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/integration/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/integration/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/integration/assets1/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
	<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/integration/assets1/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showrec.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion reclamations </span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="showrec.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion types de reclamation</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="afficherUtilisateurs.php">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">gestion utilisateurs</span>
            </a></li>
             <li class="nav-item">
              <a class="nav-link" href="showproduits.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">produit</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="index2.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des précommandes</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="showsponsor.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des sponsors</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showdon.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des dons</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="back_event.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion evenements</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="back_ticket.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion ticket</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showAlbums4.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des animaux </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showAlbums2.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">gestion des sites </span>
              </a>
            </li>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="showpack.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">pack</span>
              </a>
            </li>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="showhotel.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">hotels</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          
          <!-- Navigation -->
         
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <a href = "searchproduit.php" class="btn btn-primary shop-item-button">Search</a>
	<section class="container">
		<h2>New Produit</h2>
        <a href = "showproduits.php" class="btn btn-primary shop-item-button">All produits</a>
		<div class="form-container">
            <form action="" method = "POST" onsubmit="Verif_Forms(MonForm)">
                <div class="row">
                    <div class="col-25">                
                        <label>Title :    </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "nomPr" required ="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price :</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prixPr" required ="" min=0>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>categ :</label>
                    </div>
                    <div class="col-75">
                        <select name="categoriePr" id="categoriePr">
    <option value="">veuillez choisir </option>
    <option value="t shirt">t shirt</option>
    <option value="porte cle">porte cle</option>
    <option value="map">map</option>

</select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>quant :</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "qtestockPr" required ="" min=0>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>imagePr</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "imagePr" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>
  </div>

	<?php include_once 'footer.php'; ?>

    <script src="../assets/js/script.js"></script>
</body>
<script LANGUAGE="JavaScript">


  Type   : c,C ; d,D ; n,N ; T,t ; r,R ; b,B (Combobox, Date, Numérique, Texte ( alphanumérique ), Radio, CheckBox)
  Option : o,O ou f,F (Obligatoire ou Facultatif)



function Verif_Forms(MonForm)
{
  var ok;
  var NbBox;
  var NbRadio;
  var NbElements = MonForm.elements.length;
  // Boucle tous les éléments du formulaire
  for (var l = 0; l < NbElements; l++)
  {
    var nomPr_Element = MonForm.elements[l].name;
    var nomPr_Lowercase = nomPr_Element.toLowerCase(); 
    var Champ = MonForm.elements[l];
    // Verifie que l'element n'est pas vide si il est obligatoire
    if (nomPr_Lowercase.substring(0,1) == "o" && Champ.value == "")
    {
      alert("Le champ suivant est obligatoire : " + Champ.id );
      Champ.focus();
      return false;
    }
    // Verifie que l'element contient bien une date même si ce champ n'est pas obligatoire à remplir
    if (nomPr_Lowercase.substring(1,2) == "d")
    {
      // Appel à la fonction Control_Date
      if (! Control_Date(Champ.value))
      {  
        alert("Format de date invalide pour le champ " + Champ.id + ".\nLe format de date valide est JJ/MM/AAAA" );
        Champ.focus();
        return false;
      }
    }
    // Verifie que l'element ne contient que des chiffres même si ce champ n'est pas obligatoire à remplir
    if (nomPr_Lowercase.substring(1,2) == "n")
    {
      if (isNaN(Champ.value))
      {
        alert("Le champ suivant est numérique : " + Champ.id );
        Champ.focus();
        return false;
      }
    }
    // Verifie que l'utilisateur a fait un choix dans la combobox
    // ATTENTION :
    // Implique la déclaration d'une option dans le select avec la valeur -1 **
    if (nomPr_Lowercase.substring(0,1) == "o" && nomPr_Lowercase.substring(1,2) == "c" )
    {
      if (Champ.value == -1)
      {
        alert("Le champ suivant est obligatoire : " + Champ.id);
        Champ.focus();
        return false;
      }
    }
    // Controle qu'un boutton radio a été selectionné
    if (nomPr_Lowercase.substring(0,1) == "o" && nomPr_Lowercase.substring(1,2) == "r")
    {
      ok = false;
      // getElementsByName([nomPr_element]).length renvoie le nomPrbre d'element du meme nomPr
      // Merci bultez
      NbRadio = document.getElementsByName(nomPr_Element).length;
      for (var k = 0; k < NbRadio; k++)
      {
        if (document.getElementsByName(nomPr_Element)[k].checked == true)
        {
          ok = true
          k = document.getElementsByName(nomPr_Element).length;
        }
      }
      if (ok == false)
      {
        alert("Le champ suivant est obligatoire : " + Champ.id);
        Champ.focus();
        return false;
      }
    }
    // Meme chose mais avec des CheckBox
    if (nomPr_Lowercase.substring(0,1) == "o" && nomPr_Lowercase.substring(1,2) == "b" )
    {
      ok = false;
      NbBox = document.getElementsByName(nomPr_Element).length;
      for (var k = 0; k < NbBox; k++)
      {
        if (document.getElementsByName(nomPr_Element)[k].checked == true)
        {
          ok = true
          k = document.getElementsByName(nomPr_Element).length;
        }
      }
      if (ok == false)
      {
        alert("Le champ suivant est obligatoire : " + Champ.id);
        Champ.focus();
        return false;
      }
    }
  }
  return true;
}

// Si l'element est nul, renvoie True ( "oui, l'element est vide" )
// Sinon, vérifie la date
function Control_Date (MaDate)
{
  var strTemporaire = MaDate;
  
  if (strTemporaire == '')
    return true;
    strTemporaire = formatDate(strTemporaire);
  if (strTemporaire == null) 
    return false;

  return true;
}

// Enleve les "XY_" devant le [nomPr_de_l'element]
function Format_nomPr (nomPrChamp)
{
  var position
  var nomPrTemp = nomPrChamp
  position = nomPrTemp.indexOf("_");
  nomPrTemp = nomPrTemp.substr(position,nomPrTemp.length)
  var reg = new RegExp("_","gi");
  nomPrTemp = nomPrTemp.replace(reg," ");
  return nomPrTemp;
}

// Function qui format une date et vérifie si elle n'est pas farfelue
// Cette fonction n'est pas de moi. Je sais juste qu'elle vient d'un Cédric
// Merci à lui
function formatDate(valeur)
{
  var JJ;var MM;var AAAA;      
  isMatch = false;
  var tabDate    
  // L'ordre de lecture des expressions est important
  var expReg1 =  /(\d{2})(\d{2})(\d{4}|\d{2})/;
  var expReg2 =  /(\d{2}|\d)\/(\d{2}|\d)\/(\d{4}|\d{2})/;
  // tabDate={JJMMAAAA ou JJMMAA}
  tabDate = valeur.match(expReg1);    
  if  ((tabDate != null) && (tabDate[0] == valeur))
  {          
    isMatch = true;
    JJ  = tabDate[1];
    MM  = tabDate[2]; 
    if (tabDate[3].length == 2 ) AAAA = '20' + tabDate[3] ;
    else AAAA = tabDate[3];
  } 
  // tabDate={JJ/MM/AAAA ou JJ/MM/AA}
  tabDate = valeur.match(expReg2);
  if  ((tabDate != null) && (tabDate[0] == valeur))  
  {
      isMatch = true;
      if (tabDate[1].length == 1 ) JJ  = '0' + tabDate[1];
      else JJ  = tabDate[1];
      if (tabDate[2].length == 1 ) MM  = '0' + tabDate[2]; 
      else MM  = tabDate[2]; 
      if (tabDate[3].length == 2 ) AAAA = '20' + tabDate[3] ;
      else AAAA = tabDate[3]; 
    }
    
    var objDate=new Date(AAAA, (MM - 1) ,JJ);

    if ((JJ=='32') && (MM='13') && isMatch) {
      //return JJ + '/' + MM + '/' + AAAA;
      return objDate;
    }
      
    if ( (!isMatch) || (objDate.getDate() != JJ) || ((objDate.getMonth()+1) != MM )) {       
      return null;
    }    
    //return JJ + '/' + MM + '/' + AAAA;
    return objDate;
  }

</script>
<!-- Argon Scripts -->
  <!-- Core -->
  <script src="/integration/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/integration/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/integration/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/integration/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/integration/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/integration/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/integration/assets1/js/argon.js?v=1.2.0"></script>
</html>