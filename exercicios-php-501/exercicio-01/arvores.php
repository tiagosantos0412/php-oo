<?php

# A classe parece que foi incluida, mas os valores que estou 
# passando para o construtor não estão preenchendo o objeto.

require 'classes/Arvore.class.php';

$arvore = new Arvore('Ipê', 'Grande', true);
echo $arvore->toHTML();

/*
$arvore->nome = 'Ipê';
$arvore->frutos = true;
$arvore->tamanho = 'Grande';
*/


echo "<pre>";
print_r($arvore);

echo "<br>";

//echo $arvore->nome." ".$arvore->tamanho." ".$arvore->frutos;

echo "<hr>";    


# Depois disso quero criar um objeto para cada registro no arquivo dados/arvores.csv
# mas não me lembro direito se era file_get_contents() ou file()
# e acho que o nome das variáveis estão errados

$arvore = file('dados/arvores.csv');


#percorrer tosos os indices da variavel usuarios



foreach($arvore as $arvores){
	list($nome, $fruto, $tamanho) = explode(',', $arvores);
    echo "$nome\t$fruto\t$tamanho";
}

# Quero diminuir o código para capturar os dados do arquivo como $nome, $frutos e $tamanho
# Mas não me lembro também se era explode() ou list()

/*
$arvores = new Arvore('dados/arvores.csv');
$arquivo->abrir();
$arquivo->ler(3);
*/