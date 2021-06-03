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
}
