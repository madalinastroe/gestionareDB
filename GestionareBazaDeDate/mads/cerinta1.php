<!DOCTYPE html>
<html>
<head>
<title>BUNA SEARA BUCURESTI</title>
</head>


<body bgcolor="#32a852">
<h1><u>SUBIECT 7</u></h1>
<h2 align="center"> Informatii complete despre furnizori</h2>

<form action="cerinta1_1.php" method=post>
<table align="center" border=2>
	<tr><td align="center"><h4>Modul de ordonare:</h4>
		<select name="mod">
		<option value="asc">Ordonare crescatoare</option>
		<option value="desc">Ordonare descrescatoare</option>
		</select>
		</td></tr><br>
		
		<tr><td width="40%" align="center"><h4>Criteriu de ordonare</h4>
		<select name="criteriu">
		<option value="idf">Id Furnizor</option>
		<option value="numef">Nume</option>
		<option value="stare">Stare</option>
		<option value="oras">Oras</option>
		</select></td></tr>
		<br>
		<tr>
		<br>
	
</tr>
		<tr><td ></td></tr>
		<tr><td align="center"> <input type="submit" name="submitBtn" value="Afisare"></td></tr>
</table>
</form>

<form action="principal.php" method=post>
<table align="right" border=3>
<tr>
<br><br><br><br><br><br><br>
	<td align="center">
		<input type="submit" name="submitBtn" value="Revenire">
	</td>
</tr>
</table>
</form>

</body>
</html>
