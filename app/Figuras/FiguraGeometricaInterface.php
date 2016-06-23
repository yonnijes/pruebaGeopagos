<?php

namespace App\Figuras;


interface FiguraGeometricaInterface{
	public function getSuperficie();
	public function getBase();
	public function getAltura();  
	public function getDiametro();
	public function getTipoFiguraGeometrica();


}
