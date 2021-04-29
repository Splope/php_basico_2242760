<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//función sin nombre que
//hace parte de los parametros de la invocación
Route::get("variables" , function(){
    //JAVA, NET: fuertemente tipados
    //PHP,JAVASCRIPT,PYTHON: Debilmente tipados
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = true;
    var_dump($mensaje);


});

Route::get("arreglos", function () {

    //Arreglo: estructura de datos
    $estudiantes = [ "AN" => "Ana",
                     "MA" => "María",
                     "JO" => "Jorge"
                    ];
    echo "<pre>";
    print_r ($estudiantes);
    echo "</pre>";
});
