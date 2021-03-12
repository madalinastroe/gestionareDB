<!DOCTYPE html>
<html>
<head>
<title>cerinta 1</title>
</head>

<body style="><font size="5" bgcolor="#32a852">

<?php

if(isset($_POST["criteriu"]))
{
	$criteriu=$_POST["criteriu"];
}
else
{
	echo "esti proasta";
}


$servername="localhost";
$username="mads";
$password="test1234";
$dbname="colocviu";

$conn=mysqli_connect($servername,$username,$password,$dbname); //realizam conexiunea
if(!$conn)
{
	die("Connection failed".my_sqli_connect_error());
}

$sql="CALL `getFullInfoAsc`('$criteriu');";
$result=mysqli_query($conn,$sql);
echo "<br>Criteriu: ".$criteriu;
?>

<table align="center" border=2>
<tr>
			
			<td  width="30%"><h3 align="center"> Nume</h3></td>
			<td  width="30%"><h3 align="center"> Oras</h3></td>
			<td  width="30%"><h3 align="center"> Stare</h3></td>
			<td  width="30%"><h3 align="center"> ID</h3></td>
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
			
					<tr>
					<td><?php echo $row["numef"];?></td>
					<td><?php echo $row["oras"];?></td>
					<td><?php echo $row["stare"];?></td>
					<td><?php echo $row["idf"];?></td>
					
					</tr>
					
					<?php
				}
			}?>
</tr>

</table>


<form action="cerinta1.php" method=post>
<table align="right" border=3>
<br><br><br><br>
<tr>
	<td>
		<input type="submit" name="revenireBtn" value="Revenire">
		
	</td>
</tr>
</table>

</body>
</html>


