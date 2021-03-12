<!DOCTYPE html>
<html>
<head>
<title>cerinta 4</title>
</head>

<body style="><font size="5" bgcolor="#86cbd1">
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

$sql="CALL `perechi`();";
$result=mysqli_query($conn,$sql) ;


	?>
	<table align="center" border=2>
<tr>
			<h2 align="center">Perechi de proiecte carora sa le fie livrata aceeasi componenta</h2>
			<td  width="10%"><h3 align="center"> Proiect1</h3></td>
			<td  width="10%"><h3 align="center"> Proiect2</h3></td>

			
			<?php
			if(mysqli_num_rows($result)>0)
			{
				//afisam pentru fiecare rand
				while($row=mysqli_fetch_assoc($result))
				{
					?>
			
					<tr>
					<td><?php echo $row["proiect1"];?></td>
					<td><?php echo $row["proiect2"];?></td>
					</tr>
					
					<?php
				}
			}?>
			
			
</tr>

</table>



<form action="cerinta4.php" method=post>
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

