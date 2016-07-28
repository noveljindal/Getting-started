<html>
<body>

<?php   

include 'connect.php';


if(isset($_REQUEST['submit'])!='')
{
	$fename= $_POST["ename"];
	$fdob= $_POST["dob"];
	$fdes= $_POST["des"];
	$feid= $_POST["eid"];
	$fext= $_POST["ext"];
	if($_POST["ename"]=='' || $_POST["dob"]=='' || $_POST["des"]==''|| $_POST["eid"]==''|| $_POST["ext"]=='')
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
	
	

	$sql= "INSERT INTO empinfo (emname,DOB,designation,emID,extnsn) VALUES ('$fename','$fdob','$fdes','$feid','$fext')";
	

		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
else{
}

$conn->close();
?>
</body>
</html>