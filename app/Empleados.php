<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table= "employee";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "EmployeeId";
    //omitir campos de auditoria
    public $timestamps = false;

    //relacion 1- M cliente
    public function clientes(){
        return $this->hasMany('App\Customer' , 'SupportRepId');
    }

    //relacion 1-M Facturas (a traves del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId', //FK del abuelo en el papa
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId' );
    }
}

