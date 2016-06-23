<?php
namespace App\Figuras;

use Illuminate\Database\Eloquent\Model;

class FiguraFactory extends Model
{
   	public static function getFigura($figura){
        $figura;
        switch($figura){
           case 'TRIANGULO':
            $figura = new Triangulo();
           break;
           case 'CIRCULO':
            $figura = new Circulo();
           break;
           case 'CUADRADO':
            $figura = new Cuadrado();
           break;    
        }
        
        return $figura;
    }
}
