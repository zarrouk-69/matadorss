<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "projet");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM commande 
  WHERE idPrec  LIKE '%".$search."%'
  OR qtePrec LIKE '%".$search."%' 
  OR datePrec  LIKE '%".$search."%'
  OR prixTotalprec  LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM commande
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>id precomande</th>
     <th>quantite </th>
     <th>date</th>
     <th>prix totale</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["idPrec"].'</td>
    <td>'.$row["qtePrec"].'</td>
    <td>'.$row["datePrec"].'</td>
    <td>'.$row["prixTotalprec"].'</td>


 
   </tr>
  ';
 
 }
 echo $output;

}
else
{
 echo 'Data Not Found';
}

?>