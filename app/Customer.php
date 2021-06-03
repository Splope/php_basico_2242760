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
}
