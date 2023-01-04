<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Cucharon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $error = ['error'=>'Sin resultados, ingresar otros campos para la busqueda '];

        if($request->has('text')){
           $cucharons=Cucharon::search($request->get('text'))->get();
           return view("busqueda", compact("cucharons"));

    }
           return $error;
}
    public function index()
{
        return view("search");

}
    //
}



