<!DOCTYPE html>
<html>
<head>
<title>cerinta 6</title>
</head>

<body style="><font size="5" bgcolor="#74b877">
<?php
$furnizor=$_POST['furnizor'];

if(!$furnizor) //daca nu s-a introdus nimic
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

$sql="CALL `getFurnizor`('$furnizor');";
$result=mysqli_query($conn,$sql);


	echo "<br>Furnizor ".$furnizor;
	?>
	<table align="center" >
		<tr>
			
			<h3 align="center"> Proiecte</h3>
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
					<table align="center" border=2>
					<tr>
					<td>
					<?php echo $row["numep"];?></td></tr></table>
					
					<?php
				}
			}
			else if ( mysqli_num_rows($result)<=0) //daca nu avem nicio valoare
			{
				?>
				
				<tr>
				<td><?php echo 'Niciun rezultat. Introduceti din nou.';
			}

			
			?></td></tr>
			
		</tr>
	</table>
	<?php
}
?>

<form action="cerinta6.php" method=post>
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


