<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "projet");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM produit 
  WHERE categorie LIKE '%".$search."%'
  OR nom LIKE '%".$search."%' 
  OR prix LIKE '%".$search."%'
  OR image LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM produit
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["categorie"].'</td>
    <td>'.$row["nom"].'</td>
    <td>'.$row["prix"].'</td>

 
   </tr>
  ';
  ?>
  <?php
$result2 = $row['image'];
?>
<img src="<?php echo $result2; ?>.jpg">
  <?php
 }
 echo $output;

}
else
{
 echo 'Data Not Found';
}

?>