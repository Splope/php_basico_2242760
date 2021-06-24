<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= "customer";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "CustomerId";
    //omitir campos de auditoria
    public $timestamps = false;

    //RELACION 1 m CLIENTE U SUS FACTURAS
    public function facturas(){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Factura' , 'CustomerId');
    }


}
