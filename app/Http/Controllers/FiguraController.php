<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FiguraController extends Controller
{
	public function show($figura)
	{


		$Obj_figura = \App\Figuras\FiguraFactory::getFigura($figura);

		$data['Tipo_figura']= $Obj_figura->getTipoFiguraGeometrica();
		$data['Superficie']= $Obj_figura->getSuperficie();
		$data['Diametro']= $Obj_figura->getDiametro();
		$data['Base']= $Obj_figura->getBase();
		$data['Altura']= $Obj_figura->getAltura();


		
		var_dump(json_encode($data));
		
	}
	

	
}
