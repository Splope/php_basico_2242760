<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table= "playlist";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "PlaylistId";
    //omitir campos de auditoria
    public $timestamps = false;

    //relacion MM (playlist y cancion)
    public function canciones(){
        //metodo: belongsToMany Parametros:
        //1. Modelo destino
        //2. Modelo private
        //3. Fk tabla origen
        //4. Fk tabla destino
        return $this->belongsToMany('App\Cancion' ,
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');
    }
}
