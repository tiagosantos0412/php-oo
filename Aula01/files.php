<?php

#primeira forma - Exemplo de download por login
//readfile('usuarios.csv');

#segunda forma - Carregar arquivo na memoria
#$usuarios = file_get_contents('usuarios.csv');

#echo $usuarios;


$usuarios = file('usuarios.csv');


#percorrer tosos os indices da variavel usuarios

echo "ID: \t NOME: \t EMAIL: \n";

foreach($usuarios as $usuario){
	list($id, $nome, $email) = explode(',', $usuario);
	echo "$id\t$nome\t$email";
	#echo str_replace(',', "\t", $users);
	#$usuario = explode(',', $users);
	#echo implode("\t", $usuario);
	#echo "$usuario[0]\t$usuario[1]\t$usuario[2]";
}



?>