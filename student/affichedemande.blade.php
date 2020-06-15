@extends('layouts.app')

@section('content')

<h1>absence request list</h1>
    
<table class="table table-hover">
    <thead>
      <tr>
 
       
        <th scope="col">Module_name </th>
        <th scope="col">date_absence </th>
        <th scope="col">Reason of absence </th>
        
      </tr>
    </thead>
    <tbody>
            
            <tr>
            
               
                <td>{{$demandeabsence->Module_name}}</td>
                <td>{{$demandeabsence->date_absence}}</td>
                <td>{{$demandeabsence->Reason of absence}}</td>

       
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection