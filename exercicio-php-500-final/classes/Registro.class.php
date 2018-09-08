<?php

class Registro {

	public $id;

	public function __construct($properties) {
		foreach ($properties as $property => $valor) {
			$this->$property = $valor;
		}
		
	}

	public static function getAll(){
		$class = get_called_class();
		$sqlite = Database::connect();
		#$res = $sqlite->query('SELECT * FROM '. strtolower($class) . 's');
		$res = $sqlite->query("SELECT * FROM {$class}s");

		$objetos = [];

		while($rs = $res->fetchArray(SQLITE3_ASSOC))
			$objetos[] = new $class($rs);

		return $objetos;
	}

	public function save(){
			
			$sqlite = Database::connect();

			$properties = get_object_vars($this);

			$class = get_class($this);

			/*

			$colunas = '';

			$valores = '';

			
			foreach($properties as $property => $value){
				$colunas .= "$property, ";
				$valores .= "$value, "; 

			}
			
			$colunas = substr($colunas, 0, -2);
			$valores = substr($valores, 0, -2);
			echo $sql = "INSERT INTO usuarios ($colunas) VALUES ($valores)";
			*/

			if(!$this->id){
				unset($properties['id']);
				$colunas = implode(',', array_keys($properties));
				$valores = implode("','", array_values($properties));
				$sqlite->exec("INSERT INTO {$class}s ($colunas) VALUES ('$valores')");
			}else{
				$campos = '';
				foreach($properties as $property => $value){
					if($property != 'id')
					$campos .= "$property = '$value', ";
				}
				$campos = substr($campos, 0, -2);
				$sql = "UPDATE {$class}s SET $campos WHERE id = {$properties['id']}";
				$sqlite->exec($sql);
			}
		}

	
}