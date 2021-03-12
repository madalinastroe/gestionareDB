<!DOCTYPE html>
<html>
<head>
<title>cerinta 7</title>
</head>

<body style="><font size="5" bgcolor="#d69a69">
<?php

$servername="localhost";
$username="mads";
$password="test1234";
$dbname="colocviu";

$conn=mysqli_connect($servername,$username,$password,$dbname); //realizam conexiunea

if(!$conn)
{
	die("Connection failed".my_sqli_connect_error());
}

$sql="CALL `all`();";
$result=mysqli_query($conn,$sql) ;


	?>
	<table align="center" border=2>
<tr>
			<h2 align="center">Fiecare oras</h2>
			<td  width="10%"><h3 align="center"> Proiecte</h3></td>
			<td  width="10%"><h3 align="center"> Furnizori</h3></td>
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
			
					<tr>
					<td><?php echo $row["nr_proiecte"];?></td>
					<td><?php echo $row["nr_furnizori"];?></td>
					</tr>
					
					<?php
				}
			}
			else if ( mysqli_num_rows($result)<=0) //daca nu avem nicio valoare
			{
				?>
				
			
				<table align="center"><tr><td><?php echo 'Niciun rezultat.';?></td></tr></table>
				<?php
			}

			
			?>
			
			
</tr>

</table>



<form action="cerinta3.php" method=post>
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

