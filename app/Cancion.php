<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $table= "track";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "TrackId";
    //omitir campos de auditoria
    public $timestamps = false;
}
