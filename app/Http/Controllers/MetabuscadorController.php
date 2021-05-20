<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion para mostrar el formulario de busqueda
    public function formulario_buscador(){
        //mostrar la vista del metabuscador
        return view ('metabuscador');
    }

    //accion para realizar la busqueda
    public function buscar (){
        //Datos llegan al arreglo $_POST
        $termino = $_POST["termino"];
        $motor   = $_POST["motores"];
        //Redireccionnar al motor correcto, junto con el termino
        //querystring
        switch($motor){
            case 1: return redirect()-> to ("https://www.google.com/search?q=   $termino");
                break;
            case 2: return redirect()-> to ("https://www.ask.com/web?q=$termino");
                break;
            case 3: return redirect()-> to ("https://www.bing.com/search?q=$termino");
                break;
            case 4: return redirect()-> to ("https://www.dogpile.com/serp?q=$termino");
                break;
            case 5: return redirect()-> to ("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 6: return redirect()-> to ("https://www.ecosia.org/search?q=$termino");
                break;
            case 7: return redirect()-> to ("https://www.facebook.com/login/?privacy_mutation_token=$termino");
                break;
            case 8: return redirect()-> to ("https://duckduckgo.com/?q=$termino");
                break;
            case 9: return redirect()-> to ("https://www.qwant.com/?l=es&q=$termino");
                break;
            case 10: return redirect()-> to ("https://search.aol.com/aol/search?q=$termino");
                break;


}

}
}

