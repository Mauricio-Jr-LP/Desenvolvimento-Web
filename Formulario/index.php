<?php

include("bd/conect_bd.php");
abrirConexao();
	
$sql = "SELECT * FROM pessoa ORDER BY nome";

$resultado = $mysqli->query( $sql );

echo "O número de registros retornados é: ";
echo $resultado->num_rows;
echo "<br>";

echo "<b>Acessando dados com index numéricos!</b> <br>";

$row1 = $resultado -> fetch_array(MYSQLI_NUM);
echo $row1[0];
echo "  ";
echo $row1[1];
echo "<br>";
$row1 = $resultado -> fetch_array(MYSQLI_NUM);
echo $row1[0];
echo "  ";
echo $row1[1];
echo "<br>";


$resultado->data_seek(0); 


echo "<b>Acessando dados com index associativos!</b> <br>";
// Coloca todos os atributos da segunda linha 
// em um array Numerico
$row1 = $resultado -> fetch_array(MYSQLI_ASSOC);
echo $row1["nome"];
echo "  ";
echo $row1["idade"];
echo "<br>";

$row1 = $resultado -> fetch_array(MYSQLI_ASSOC);
echo $row1["nome"];
echo "  ";
echo $row1["idade"];
echo "<br>";


$resultado->data_seek(0); 
echo "<b>Modo alternativo</b> <br>";

//Usando loops!
while( $row1 = $resultado -> fetch_array(MYSQLI_ASSOC) ){
	echo $row1["nome"];
	echo "  ";
	echo $row1["idade"];
	echo "<br>";
}


$resultado->data_seek(0); 
echo "<b>Modo alternativo 2</b> <br>";

//modo alternativo
$row1 =  $resultado -> fetch_assoc();
for($i = 0; $i < $resultado->num_rows; $i++){
	echo $row1["nome"];
	echo "  ";
	echo $row1["idade"];
	echo "<br>";
}


$resultado->data_seek(0); 
//converte em atributos
echo "<b>Modo com objeto</b> <br>";

while( $row1 = $resultado -> fetch_object() ){
	echo $row1->nome ;
	echo "  ";
	echo $row1->idade;
	echo "<br>";
}

?>