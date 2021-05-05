<?php
    require_once '/xampp/htdocs/hotels/controller/packC.php';
    require_once '/xampp/htdocs/hotels/controller/hotelC.php';

    $hotelC =  new hotelC();
   
    $packC =  new packC();
   

	

?>
<!DOCTYPE html>
<html lang="en">

<head>
<!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="/hotels/assets1/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/hotels/assets1/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/hotels/assets1/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="/hotels/assets1/css/argon.css?v=1.2.0" type="text/css">
    -->
<style>
* {box-sizing: border-box;}

.img-magnifier-container {
  position:relative;
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 200px;
  height: 200px;
  opacity : 0;
}

.img-magnifier-glass:hover {
opacity : 1;

}

</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>

<body>
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="/hotels/assets1/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/argon-dashboard-master/index.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showpack.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">pack</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showhotel.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">hotels</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
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
              <a class="nav-link active active-pro" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
   
<a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?>">retour</a>
</form>
			<div class="shop-items">
				 <?php
        if (isset($_GET['idpack'])) {
            $result = $packC->getpackById($_GET['idpack']);
      if ($result !== false) {
    ?>
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $result['nompack'] ?>  </strong>
				  </div>
                   <div class="shop-item">
                    <strong class="shop-item-title">  type:<?= $result['typepack'] ?> </strong>
                  </div>
                     <div class="shop-item">
                    <strong class="shop-item-title"> Hotel <?= $result['hotel1'] ?>   </strong>
                  </div>
          <div> <?= $result['descpack'] ?></div>
          <div>
				  
<div style="display: inline-block;" class="img-magnifier-container"><img  id="myimage"  src="/hotels/assets/img/<?= $result['imagepack'] ?>" width = "300" height = "300" class="shop-item-image"></div>
<?php
        $hothot = $result['idh1'];
       
        //if (isset($_GET['idh1'])) {
            $result11 = $hotelC->getHotelById($hothot);
            if ($result11 !== false) {
    ?>
<div style="display: inline-block;" class="img-magnifier-container"><img  id="myimage1"src="/hotels/assets/img/<?= $result11['imagehotel1'] ?>" width = "300" height = "300" class="shop-item-image"></div>
<div style="display: inline-block;" class="img-magnifier-container"><img  id="myimage2"src="/hotels/assets/img/<?= $result11['imagehotel2'] ?>" width = "300" height = "300" class="shop-item-image"></div>
<div style="display: inline-block;" class="img-magnifier-container"><img  id="myimage3"src="/hotels/assets/img/<?= $result11['imagehotel3'] ?>" width = "300" height = "300" class="shop-item-image"></div>
<div style="display: inline-block;" class="img-magnifier-container"><img  id="myimage4"src="/hotels/assets/img/<?= $result11['imagehotel4'] ?>" width = "300" height = "300" class="shop-item-image"></div>



<script>magnify("myimage", 4);</script>
<script>magnify("myimage1", 4);</script>
<script>magnify("myimage2", 4);</script>
<script>magnify("myimage3", 4);</script>
<script>magnify("myimage4", 4);</script>
				
					</div>
     <?php
            }
            
                ?>
					<div class="shop-item-details">
                        <div>  <span class="shop-item-price">ce pack comporte <?= $result['nbrjour'] ?> jour(s). </span>
                          <span class="shop-item-price"><?= $result['access'] ?> access au resto et</span>
                           <span class="shop-item-price"><?= $result['nbrexcur'] ?> excursion(s).</span></div>
						<span class="shop-item-price"><?= $result['prixpack'] ?> dt.</span>
						<a type="button" class="btn btn-primary shop-item-button" href = "updatepack.php?idpack=<?= $result['idpack'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showpack.php?idpack=<?= $result['idpack'] ?>">Supprimer</a>
					</div>
				</div>
           
			  <?php
        }
    }
        else {
            header('Location:showpack.php');
        }
    
    ?>

		</section>
      </div>
 <script src="/hotels/assets1/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/hotels/assets1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/hotels/assets1/vendor/js-cookie/js.cookie.js"></script>
  <script src="/hotels/assets1/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/hotels/assets1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="/hotels/assets1/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="/hotels/assets1/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="/hotels/assets1/js/argon.js?v=1.2.0"></script>



</body>

</html>