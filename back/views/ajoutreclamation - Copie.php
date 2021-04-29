<?PHP
include "../controller/typeC.php";
$c2 = new typeC();
$listtype=$c2->afficher();
?>
<!DOCTYPE html>
<html>
  <title></title>
<head>
  
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->

  <div class="content-wrapper">
    <form id="formulaire_prod_ajouter" method="POST" action="ajouterProduit.php" enctype="multipart/form-data">
<table id="tab_prod_ajouter">
  <tr> <td colspan="2" id="titre">Ajouter un produit
  </td></tr>
  <tr>
    <td><p id="text">Id produit : </p>
      <input type="text" name="idR"></td>
    <td><p id="text">Nom produit : </p>
      <input type="text" name="dateR"></td> 
    </tr>
   <tr><td>  <p id="text">type : </p>
<SELECT name="type" size="1">
<?php
  foreach($listtype as $row) {
  ?>
<OPTION value="<?php echo $row['idType'] ;?>">
  <?php echo $row['libelleT'] ;?></OPTION>
<?php } ?>
</SELECT></td></tr>

  
  
</form> </td>
  </tr>


  <tr>
        <td colspan="2"><input type="submit" name="s_inscrire" value="S'inscrire"></td>
  </tr>
</table>
</form>

  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>