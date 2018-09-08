<?php 

$title = 'PHP';

class Animal{
	public $especie = '';
	public $peso = 0;
	public $velocidade = 0;
	public $fome = 0;


	function __construct($especie='', $peso=0, $velocidade=0, $fome=0){
		$this->especie = $especie;
		$this->peso = $peso;
		$this->velocidade = $velocidade;
		$this->fome = $fome;
	}

	function __toString(){
		/*
		return "Cachorro...\n Especie: $this->especie". 
			   "\n Peso: $this->peso ". 
			   "\n velocidade: $this->velocidade".
			   "\n fome: $this->fome \n";
		*/

		return <<<EOF

Especie: {$this->especie}
Peso: {$this->peso}
Velocidade: {$this->velocidade}
Fome: {$this->fome}

--------------------------------------

EOF;
	}



	function toHTML(){
			return <<<EOF

<!DOCTYPE html>
<html>
        <head>
                <title>Classe cachorra</title>
        </head>
        <body>
                <h1>$this->especie</h1>
                <ul>
                        <li><b>Peso: </b>$this->peso</li>
                        <li><b>Velocidade: </b>$this->velocidade</li>
                        <li><b>Fome: </b>$this->fome</li>
                </ul>
        </body>
</html>	

EOF;
	}

}

$cachorro = new Animal('viraLatas', 25, 30, 60);

$cachorro2 = new Animal('golden', 35, 25, 75);

echo $cachorro->toHTML();

echo $cachorro2->toHTML();


//print_r($cachorro2);

