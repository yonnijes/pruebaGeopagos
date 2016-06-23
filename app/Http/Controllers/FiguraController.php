<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FiguraController extends Controller
{
    public function show($figura)
    {
        $Obj_figura = \App\Figuras\FiguraFactory::getFigura($figura);
		$Obj_figura->dibujar();
    }
	
   
	
}
