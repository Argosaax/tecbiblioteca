<?php

namespace App\Http\Controllers;
use App\Editorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __construct()
    {
        $this->middleware('auth');
    } 
     
     
     
    public function index()
    {
  $editorial  = Editorial::all();
  
     return  view('editorial.index',['Editorial'=>$editorial]);
       
      
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    if(Auth::user()->tipo=="admin"){
    
    
       return view('Editorial.create'); 
       
   }else{    
       
    return redirect('/editorial');
    
    }   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorial= new Editorial();
 
 $editorial->nombre = $request->input('nombre');
 $editorial->descripcion = $request->input('descripcion');
 
 $editorial->save();
 return redirect()->route('editorial.create')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorial $editorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {
        //
    }
}
