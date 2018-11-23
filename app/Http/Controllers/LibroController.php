<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('libros.crear');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro=new Libro();        
        $libro->name=$request->input('fecha_entrega');
        $libro->editoria=$request->input('editoria');
        $libro->año=$request->input('año');
        $libro->biblioteca=$request->input('biblioteca');     
        $libro->autor=$request->input('autor');
        $libro->tipo=$request->input('tipo');
        $libro->area=$request->input('area');
        $libro->dia=$request->input('dia');
        $libro->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $libro->fill($request->input('$id'));
        $libro->name=$request->input('fecha_entrega');
        $libro->editoria=$request->input('editoria');
        $libro->año=$request->input('año');
        $libro->biblioteca=$request->input('biblioteca');     
        $libro->autor=$request->input('autor');
        $libro->tipo=$request->input('tipo');
        $libro->area=$request->input('area');
        $libro->dia=$request->input('dia');
        $libro->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
