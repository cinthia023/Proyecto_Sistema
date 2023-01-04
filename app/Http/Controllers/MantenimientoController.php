<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mantenimiento;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimientos=Mantenimiento::all();
        return view( "index2",compact("mantenimientos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create2");
        //
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

            $mantenimientos = new Reparacion();
            $mantenimientos->num_cucharron=$request->input("num_cucharon");
            $mantenimientos->material=$request->input("material");
            $mantenimientos->tiempo=$request->input("tiempo");
            $mantenimientos->estado=$request->input("estado");


            $mantenimientos->salida_cucharon=$name;
            $mantenimientos->save();
            return "Guardado";
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mantenimientos=Mantenimiento::find($id);
        return view('show2',compact('mantenimientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mantenimientos = Discount::find($id);
        return view("edit2",compact("mantenimientos"));
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
        $mantenimientos = Mantenimiento::find($id);
        $mantenimientos->fill($request->except('salida_cucharon'));
        if ($request->hasFile('salida_cucharon')){
            $file= $request->file('salida_cucharon');
            $name=time().$file-> getClientOriginalName();

        //Imagen
        $mantenimientos->salida_cucharon=$name;
        $file->move(public_path(  ).'/images/',$name);
        }
        $mantenimientos->save();
        return redirect('mantenimiento/');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mantenimientos=Mantenimiento::find($id);
        if ($mantenimientos->delete($id))
        {
            return redirect("mantenimiento/");
            $data = Mantenimiento::FindOrFail($id);

            if(file_exists("images/".$data->salida_cucharon) AND !empty($data->salída_cucharon))
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
        //
    }

