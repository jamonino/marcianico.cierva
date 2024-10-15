<?php

class Marcianico implements \JsonSerializable {
	private int $vida; // 		0-100
    private int $verde;
    private int $azul;
    private int $rojo;
	private string $nombre;
	
	public function jsonConstruct($json) {
        foreach (json_decode($json, true) AS $key => $value) {
            $this->{$key} = $value;
        }
    }
	public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }
	
	public function getNombre(){		
		return $this->nombre;	
	}
	
	public function getVida(){		
		return $this->vida;
	}
	
	public function getAzul(){		
		return $this->Azul;
	}
	
	public function getRojo(){		
		return $this->Rojo;
	}
	
	public function getVerde(){		
		return $this->Verde;
	}
	
	public function setVida($newVida){
		if($newVida <101){
			$this->vida = $newVida;
		}
	}
}

?>