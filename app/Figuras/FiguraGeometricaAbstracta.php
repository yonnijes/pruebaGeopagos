<?php

namespace App\Figuras;

abstract class FiguraGeometricaAbstracta implements FiguraGeometricaInterface {

	public function getSuperficie(){

		if(isset($this->superficie)){

			return $this->superficie;
		}
		return null;

	}
	public function getBase(){
		if(isset($this->base)){

			return $this->base;
		}
		return null;

	}
	public function getAltura(){
		if(isset($this->altura)){

			return $this->altura;
		}
		return null;

	}  
	public function getDiametro(){
		if(isset($this->diametro)){

			return $this->diametro;
		}
		return null;

	}
	public function getTipoFiguraGeometrica(){

		if(isset($this->tipoFiguraGeometrica)){
			return $this->tipoFiguraGeometrica;
		}
		return null;
	}

}