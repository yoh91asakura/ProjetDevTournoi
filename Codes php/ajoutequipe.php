<html>
<head>
<title>Menu principal</title>
<style>
.boutonbleu {
	-moz-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	box-shadow:inset 0px 1px 0px 0px #dcecfb;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #bddbfa), color-stop(1, #80b5ea) );
	background:-moz-linear-gradient( center top, #bddbfa 5%, #80b5ea 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea');
	background-color:#bddbfa;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #84bbf3;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #528ecc;
}.boutonbleu:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #80b5ea), color-stop(1, #bddbfa) );
	background:-moz-linear-gradient( center top, #80b5ea 5%, #bddbfa 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80b5ea', endColorstr='#bddbfa');
	background-color:#80b5ea;
}.boutonbleu:active {
	position:relative;
	top:1px;
}
body{
	background-image:url('img/fond.jpg');
	font-family:helvetica;
}
#formulaire {
position:relative;
height:750px;
width:800px;
top:5px;
left:50%;
margin-left:-400px;
border-radius:50px;
background-color:#F5F5F5;
}
</style>
</head>

<body>
<div id="formulaire">
<br/>
<center>
<h1>Menu principal</h1>
<hr/ width=80%><br/>

<form action="ajoutequiperes.php" method="post">
Nom de l'équipe : <input type="text" name="nomequipe" required><br/><br/>
<table border="0">

<th>
<td align="center">Nom</td>
<td align="center">Prénom</td>
<td align="center">Capitaine</td>
</th>

<tr>
<td>1er membre : </td>
<td><input type="text" name="nom1"></td>
<td><input type="text" name="prenom1"></td>
<td align="center"><input type="checkbox" name="capt1"></td>
</tr>

<tr>
<td>2eme membre : 
<td><input type="text" name="nom2"></td>
<td><input type="text" name="prenom2"></td>
<td align="center"><input type="checkbox" name="capt2"></td>
</tr>

<tr>
<td>3eme membre : </td>
<td><input type="text" name="nom3"></td>
<td><input type="text" name="prenom3"></td>
<td align="center"><input type="checkbox" name="capt3"></td>
</tr>

<tr>
<td>4eme membre : </td>
<td><input type="text" name="nom4"></td>
<td><input type="text" name="prenom4"></td>
<td align="center"><input type="checkbox" name="capt4"></td>
</tr>

<tr>
<td>5eme membre : </td>
<td><input type="text" name="nom5"></td>
<td><input type="text" name="prenom5"></td>
<td align="center"><input type="checkbox" name="capt5"></td>
</tr>

<tr>
<td>6eme membre : </td>
<td><input type="text" name="nom6"></td>
<td><input type="text" name="prenom6"></td>
<td align="center"><input type="checkbox" name="capt6"></td>
</tr>

<tr>
<td>7eme membre : </td>
<td><input type="text" name="nom7"></td>
<td><input type="text" name="prenom7"></td>
<td align="center"><input type="checkbox" name="capt7"></td>
</tr>

<tr>
<td>8eme membre : </td>
<td><input type="text" name="nom8"></td>
<td><input type="text" name="prenom8"></td>
<td align="center"><input type="checkbox" name="capt8"></td>
</tr>

<tr>
<td>9eme membre : </td>
<td><input type="text" name="nom9"></td>
<td><input type="text" name="prenom9"></td>
<td align="center"><input type="checkbox" name="capt9"></td>
</tr>


</table>
<br/>
<input type="submit" value="Ajouter cette nouvelle équipe !" class="boutonbleu">
</form>
<center>

</div>