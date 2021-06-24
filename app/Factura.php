<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table= "invoice";
    //establecer la pk para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //omitir campos de auditoria
    public $timestamps = false;

    //Relacion M:M ENTRE FACTURA Y CANCIONES
    public function canciones(){
        //relacion mm: belongsToMany()
        //parametros: 1.Modelo a Relacionar
        //            2.La tabla privote
        //            3.Fk del presentemodelo en la tabla privote
        //            4.Fk del modelo relacionado en la tabla privote
        return $this->belongsToMany('App\Cancion' ,
                                    'invoiceline',
                                    'InvoiceId',
                                    'TrackId');
    }
}
