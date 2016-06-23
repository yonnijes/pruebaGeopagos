<?PHP
namespace App\Http\Controllers;


class FigurasController extends Controller
{
public function index(){

$circle = \App\Figuras\FiguraFactory::getFigura('CIRCULO');
$circle->dibujar();
}
}