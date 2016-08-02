<html>
<body>

<?php   
	
include 'connect.php';
	
	

$q = $_REQUEST["q"];
	/*if($_POST["ename"]=='' || $_POST["dob"]=='' || $_POST["des"]==''|| $_POST["eid"]==''|| $_POST["ext"]=='')
	{
	echo "please fill the empty field.";
	}
	else
	{
	/*$checkv= "SELECT * FROM `empinfo`";
	if($checkv){
	echo "table selected";
	}
	else{
		echo "table not selected";
	}
	*/
	echo $q ;
	$sql = 'SELECT * FROM empinfo WHERE emname LIKE "' . $q . '%"';
                              
	
		$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Employename</th>
<th>date of birth</th>
<th>designation</th>
<th>EmployeeID</th>
<th>Extention</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['emname'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['designation'] . "</td>";
    echo "<td>" . $row['emID'] . "</td>";
    echo "<td>" . $row['extnsn'] . "</td>";
    echo "</tr>";
}
echo "</table>";


	/*$sql= "INSERT INTO empinfo (emname,DOB,designation,emID,extnsn) VALUES ('$fename','$fdob','$fdes','$feid','$fext')";
	

		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		*/

$conn->close();
?>
</body>
</html>