<?php
$link = mysql_connect('localhost', 'root', 'localhost');
if (!$link) 
{
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('dghs_hrm')) 
{
    exit;
}

$text = mysql_real_escape_string($_GET['text']);

//$sql = 'SELECT * FROM icd_10 WHERE disease LIKE "'. $text . '%" OR icd10_4 LIKE "'. $text . '%" LIMIT 10';
$sql = 'SELECT * FROM icd_10 WHERE icd10_4 LIKE "'. $text . '%" LIMIT 10';

$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) 
{
	$option_data=$row['icd10_4']." ".$row['disease'];
	$posts[] = array($row['icd_id'] => $option_data);
}
echo json_encode($posts);
mysql_close($link);
?>
