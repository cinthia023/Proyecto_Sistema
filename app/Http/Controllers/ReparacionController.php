<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reparacion;

class ReparacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reparacions=Reparacion::all();
        return view( "index1",compact("reparacions"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create1");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile("salida_cucharon")) {
            $file=$request->file("salida_cucharon");
            $name=time().$file->getClientOriginalName();
            $file->move(public_path( )."/images/",$name);

            $reparacions = new Reparacion();
            $reparacions->num_cucharron=$request->input("num_cucharon");
            $reparacions->material=$request->input("material");
            $reparacions->tiempo=$request->input("tiempo");
            $reparacions->estado=$request->input("estado");


            $reparacions->esalida_cucharon=$name;
            $reparacions->save();
            return "Guardado";

    }
        //
    }

    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reparacions=Reparacion::find($id);
        return view('show1',compact('reparacions'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //return view('edit',compact('cucharons'));
        //
        $reparacions = Reparacion::find($id);
        return view("edit1",compact("reparacions"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $reparacions = Reparacion::find($id);
        $reparacions->fill($request->except('salida_cucharon'));
        if ($request->hasFile('salida_cucharon')){
            $file= $request->file('salida_cucharon');
            $name=time().$file-> getClientOriginalName();

        //Imagen
        $reparacions->salida_cucharon=$name;
        $file->move(public_path(  ).'/images/',$name);
        }
        $reparacions->save();
        return redirect('reparacion/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reparacions=Reparacion::find($id);
        if ($reparacions->delete($id))
        {
            return redirect("reparacion/");
            $data = Reparacion::FindOrFail($id);

            if(file_exists("images/".$data->salida_cucharon) AND !empty($data->salida_cucharon))
            {
            unlink("images/".$data->salida_cucharon);
            }
                try{
                    $data->delete();
                    $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            }
            if($bug==0){
                echo "success";
            }else{
                echo "error";
            }

        }
        else return "El ".$id. "No se pudo borrar";
    }
}


