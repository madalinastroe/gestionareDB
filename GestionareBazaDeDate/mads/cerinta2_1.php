<!DOCTYPE html>
<html>
<head>
<title>cerinta 6</title>
</head>

<body style="><font size="5" bgcolor="#e0b12d">
<?php
$m1=$_POST['val1'];
$m2=$_POST['val2'];
if(!$m1||!$m2) //daca nu s-a introdus nimic
{?>

	<tr>
	
		<td align="right" >
		<?php
		echo 'Date incorecte. Introduceti din nou.';
		
		?>
		</td>
	</tr>

<br>
<br>
<br>
<br>
<br>
</table>
<?php
}
else
{
$servername="localhost";
$username="mads";
$password="test1234";
$dbname="colocviu";

$conn=mysqli_connect($servername,$username,$password,$dbname); //realizam conexiunea
if(!$conn)
{
	die("Connection failed".my_sqli_connect_error());
}


$sql=" CALL `getComponente`($m1, $m2);";
$result=mysqli_query($conn,$sql);

	//echo "<br>m1 ".$m1;
	//echo "<br>m2 ".$m2;
	?>
	<table align="center" border=2>
<tr>
			<h2 align="center">Componente cu pret intre 2 valori din Cluj-Napoca</h2>
			<td  width="10%"><h3 align="center"> Nume</h3></td>
			<td  width="20%"><h3 align="center"> Oras</h3></td>
			<td  width="20%"><h3 align="center"> Culoare</h3></td>
			<td  width="20%"><h3 align="center"> Masa</h3></td>
			<td  width="10%"><h3 align="center"> ID</h3></td>
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
			
					<tr>
					<td><?php echo $row["numec"];?></td>
					<td><?php echo $row["oras"];?></td>
					<td><?php echo $row["culoare"];?></td>
					<td><?php echo $row["masa"];?></td>
					<td><?php echo $row["idc"];?></td>
					
					</tr>
					
					<?php
				}
			}?>
</tr>

</table>

	<?php
}
?>


<form action="cerinta2.php" method=post>
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

