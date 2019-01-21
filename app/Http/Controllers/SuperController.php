<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     
     
     
    public function index()
    {
    
   if(Auth::user()->tipo=="admin"){
      $user  = User::all();
      
     return view('admins.tipos',['User'=>$user]);
     
     }else{
     return redirect('/libro');
  
     }
     
    }
    
    
    
    public function edit($id)
    {
    
   if(Auth::user()->tipo=="admin"){ 
    
    
   $user = User::find($id);
    
   return view('admins.edit',['user'=>$user]); 
    
   }else{
   
 return redirect('/libro');
        
   
   } 
    
    }
    public function update(Request $request, User $user )
    {
    
    
    }
    
    
    
    
}
