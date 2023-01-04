<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Cucharon extends Model
{
    protected $fillable = ["numero", "compania","caracteristicas",
    "fecha_ingreso", "procedimiento", "fecha_entrega","entrada_cucharon"];
    //
    use Searchable;
}
