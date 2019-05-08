<!doctype html>
<html>
<head>
<title> OLÁ MUNDO </title>
<form>
<input type="text" name="PRIMEIRO NOME" id="c1"/>
<input type="text" name="PRIMEIRO NOME" id="c2"/>
<input type="button" value="checar" id="b1"/>
</form>
<?php
$v1 = $_POST[c1];
$v2 = $_POST[c2];

if($v1===$v2){
	echo "Senha confirmada";
}else{
	echo "Senhas diferentes";
}
?>
</body>
</head>
</html>