
 @extends('layouts.app')

@section('content')
 <h3>hola 
{{Auth::user()->tipo}}</h3>
  <table class="table table-dark" align="center" >
  <thead>
  
    <tr>
    @foreach($Libro as $libro)
      <td >
      <img src="../portadas/{{$libro->portada}}" width="100" height="100"> <br>  
      
     {{$libro->descripcion}}<br>
      		{{$libro->nombre}} 
      		{{$libro->editorial_id}}
      
           </td>
           
      		@endforeach
      	
      		
      		</tr>
      		
      
       
 
 	
    
  </thead>
  
             

</table>


		 


	 


                           
  

                              

   

 
 
 
 
 
 
 
 
 
 
                     
                            
                            
                        

                
   
@endsection
