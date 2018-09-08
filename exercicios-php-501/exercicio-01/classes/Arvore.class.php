<?php

class Arvore {

    public $nome = '';             # Jubuticabeira, Salgueiro
    public $tamanho = '';          # Grande ou Pequena
    public $frutos = '';           # booleano
    #public $caminho = '';          # indicará o caminho do arquivo

    function __construct($nome='', $tamanho='', $frutos=true) {
        #$this->caminho = $caminho;
        $this->nome = $nome;
        $this->tamanho = $tamanho;
        $this->frutos = $frutos;

    }

    function toHTML(){
			return <<<EOF

<!DOCTYPE html>
<html>
        <head>
                <title>Árvores</title>
        </head>
        <body>
                <h1>ÁRVORES</h1>
                <ul>
                        <li><b>Nome: </b>$this->nome</li>
                        <li><b>Tamanho: </b>$this->tamanho</li>
                        <li><b>Frutos: </b>$this->frutos</li>
                </ul>
        </body>
</html>	

EOF;
    }
}
