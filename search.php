<?php

$q = $_GET['term'];

mysql_connect("localhost","root","");
mysql_select_db("ajax_test");
$query = mysql_query("SELECT * FROM score WHERE batchcode LIKE '$q%'");

$data = array();
while($row = mysql_fetch_array($query)){
$data[]=array('value'=>$row['batchcode']);
        $id[] = $row['id'];
        $name[] = $row['name'];
        $score1[] = $row['score1'];
        $score2[] = $row['score2'];
        $other_qual[] = $row['other_qual'];
        $interview[] = $row['interview'];
        $total[] = $row['total'];
}
echo json_encode($data);
?>