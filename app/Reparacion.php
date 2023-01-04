<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    protected $fillable = ["num_cucharon", "material","tiempo",
    "estado","salida_cucharon"];
    //
}
