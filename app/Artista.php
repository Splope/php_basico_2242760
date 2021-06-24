<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table= "artist";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "ArtistId";
    //omitir campos de auditoria
    public $timestamps = false;

    //definir relacion artista 1-M albums
    public function discos (){
        //hasmany: parametros
        //1. modelo a relacionar
        //2. Fk modelo papa
        //3. Pk del modelo hijo
        return $this->hasMany ('App\Disco', 'ArtistId');

    }

    //definir la relación de multitabla entre
    //artista y sus canciones(tracks)

    public function canciones(){
        //hasManyThrough: parametros
        //1. Modelo Nieto
        //2. Modelo papa
        //3. Fk del Abuelo en el papa
        //4. Fk del papa en el nieto
        //5. clave primaria del abuelo

        return $this->hasManyThrough('App\Cancion' ,
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }
}
