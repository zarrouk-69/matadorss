
<?php //code for get value of usercode from database
error_reporting(0);
$myuname = "";
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("dummy1") or die(mysql_error());
$check = mysql_query("SELECT * FROM members WHERE email = '$myeid'")or die(mysql_error()); 
while($info = mysql_fetch_array($check))
{
	if ($myeid == $info['email'])
	{
		$myuname = $info['username'];
		$mycode = $info['usercode'];
		
	}
}
$userscode = $mycode;

?>
<?php
error_reporting(0);
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("dummy1") or die(mysql_error());
$checky = mysql_query("SELECT * FROM acountseting")or die(mysql_error());

while($chec = mysql_fetch_array($checky)) 
{
	if($chec['usercode'] == $mycode)
	{
		$date2 = $chec['birthday'];
		 
		$name = $chec['fnm'];
		
		echo $date2;
	}

}


$date1 = date("Y-m-d");
echo "<br>" . $date1 . "<br>";


$today = strtotime($date1);
$expiration_date = strtotime($date2);

if ($expiration_date > $today) {
     $valid = "yes";
} else {
     $valid = "no";
}

echo "<br>" . $valid . "<br>";

$dateCmp=dateDiff("-",$date2,$date1);
function dateDiff($dformat, $endDate, $beginDate)
{
$date_parts1=explode($dformat, $beginDate);
$date_parts2=explode($dformat, $endDate);
$start_date=gregoriantojd($date_parts1[0], $date_parts1[1], $date_parts1[2]);
$end_date=gregoriantojd($date_parts2[0], $date_parts2[1], $date_parts2[2]);
echo $end_date . "<br>";
echo $start_date;
return $end_date - $start_date;

}

print $name . "'s birthday on" . $dateCmp;
?>