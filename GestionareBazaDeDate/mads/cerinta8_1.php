<!DOCTYPE html>
<html>
<head>
<title>cerinta 8</title>
</head>

<body style="><font size="5" bgcolor="#e0b12d">
<?php
$componenta=$_POST['idc'];
if(!$componenta) //daca nu s-a introdus nimic
{?>

	<tr>
	
		<td align="right" >
		<?php
		echo 'Date incorecte. Introduceti din nou.';
		
		?>
		</td>
	</tr>
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

$sql="select max(cantitate) as maxi, min(cantitate) as mini from livrari where idc='$componenta'";
$result=mysqli_query($conn,$sql) ;


	?>
	<table align="center" border=2>
<tr>
			<h2 align="center">Minim/Maxim componenta <?php echo $componenta?></h2>
			<td  width="10%"><h3 align="center"> MIN</h3></td>
			<td  width="10%"><h3 align="center"> MAX</h3></td>
			
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
			
					<tr>
					<td><?php echo $row["mini"];?></td>
					<td><?php echo $row["maxi"];?></td>
					
					</tr>
					
					<?php
				}
			}?>
			
			
</tr>

</table>

	<?php
}
?>


<form action="cerinta8.php" method=post>
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

