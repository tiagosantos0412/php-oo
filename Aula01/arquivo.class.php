<?php	

# Criar uma classe arquivo
# Que contenha 2 duas propriedades:
# - Linhas
# - Caminho
# Criar o metodo abrir() -- chamar a funcao fil e jogar o conteudo de return na variavel conteudo
# Criar o metodo escrever()
# Criar o metodo ler()
# Criar o metodo lerTudo()
#Criar o metodo procurar()

class Arquivo {
	public $linhas = 0;
	public $caminho = '';
	public $conteudo;

	function __construct($caminho){	
		$this->caminho = $caminho;
	}


	function abrir(){
		$this->conteudo = file($this->caminho);
		$this->linhas = count($this->conteudo); 
	}

	function escrever(){
		
	}

	function ler($linha){
		if(isset($this->conteudo[--$linha])){
			echo implode("\t", explode(',', $this->conteudo[$linha]));
		} else {
			echo "Linha nao encontrada";
		}
	}

	function lerTudo(){
		foreach($this->conteudo as $conteudo){
			list($id, $nome, $email) = explode(',', $conteudo);
			echo "$id\t$nome\t$email";
		}
	}

	function procurar(){
		echo 'Procurando o arquivo';
	}


}

$arquivo = new Arquivo('lista.csv');
$arquivo->abrir();
$arquivo->ler(3);