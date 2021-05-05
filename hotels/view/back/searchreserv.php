<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "zarrouk");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM reserv 
  WHERE typereserv LIKE '%".$search."%'
  OR idhot1 LIKE '%".$search."%' 
  OR prixreserv LIKE '%".$search."%' 
  OR datereserv LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM reserv
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Nom hotel</th>
     <th>typereserv</th>
     <th>prixreserv</th>
     <th>id client</th>
     <th>datereserv</th>
     <th>nbrjourv</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["idhot1"].'</td>
    <td>'.$row["typereserv"].'</td>
    <td>'.$row["prixreserv"].'</td>
    <td>'.$row["idc1"].'</td>
    <td>'.$row["datereserv"].'</td>
    <td>'.$row["nbrjourv"].'</td>
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
