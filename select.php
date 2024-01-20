<?php
 require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if ($conn->connect_error) 
die($conn->connect_error);
 $query = "SELECT * FROM students";
 $result = $conn->query($query);
 if (!$result) 
die ("Database access failed: " . $conn->error);
$rows =$result->num_rows;
echo "<table border='2' align='center'>
<tr> 
<th>Rollno</th>
<th>Name</th>
<th>Mark1</th>
<th>Mark2</th>
<th>Mark3</th>
<th>Total</th>
<th>Average</th>
</tr>";
for ($j = 0 ; $j < $rows ; ++$j)
 {
 	$result->data_seek($j);
 	$row = $result->fetch_array(MYSQLI_NUM);
 	echo "<tr>";
 	for ($k = 0 ; $k < 7 ; ++$k) 
		echo "<td>$row[$k]</td>";
	echo "</tr>";
 }
 echo "</table>";
?>
