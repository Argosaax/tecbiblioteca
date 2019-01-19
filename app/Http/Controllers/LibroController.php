<?php

namespace App\Http\Controllers;
use App\Libro;
use App\Editorial;
use App\Autor;
use App\Categoria;
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
      $libros  = Libro::all();
      
     return view('Libro.index',['Libro'=>$libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
     $editorial  = Editorial::all();
      $autor  = Autor::all();
      $categoria  = Categoria::all();
      
     	return view('Libro.create',['Editorial'=>$editorial,'Autor'=>$autor,'Categoria'=>$categoria]);
     
  
       
    
       return view('Libro.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
   
 $file = $request->file('portada');
 $name = time().$file->getClientOriginalName();
 $file->move(public_path().'/portadas/',$name);
 
 
 $libro = new Libro();
 $libro->autor_id= $request->input('autor_id');
 $libro->nombre = $request->input('nombre');
 $libro->descripcion = $request->input('descripcion');
 
 $libro->precio = $request->input('precio');
 
 $libro->editorial_id=$request->input('editorial_id');
 
 
 
 
 $libro->categoria_id=$request->input('categoria_id');
 
 
 
 $libro->portada=$name;
 $libro->save();
 
 /**  $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 
   'precio'=>'required',
   $name=>'required']);
        Libro::create($request->all());
   */     
       return redirect()->route('libro.create')->with('success','Registro creado satisfactoriamente');
   
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
  
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
          $libro=libro::find($id);
          return view('libro.edit',compact('libro'));
     
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

 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::find($id)->delete();
        return redirect()->route('libro.index')->with('success','Registro eliminado satisfactoriamente');
   
    }
}
