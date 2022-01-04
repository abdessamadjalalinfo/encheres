@extends('admin.master')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mes utilisateurs</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

    <div class="row">
        <div class="col-3">
            <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     Nombre d'utilisateurs
                      <div class="text-white-50 small">{{$users->count()}}</div>
                    </div>
            </div>   
        </div>  
    </div>  
    <div class="row">
        
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom et Prénom </th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Adresse</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
     
      <td><a href="">{{$user->nom}} {{$user->nom}}</a></td>
      <td>{{$user->email}}</td>
      <td>0636187128</td>
      <td>{{$user->adresse}} {{$user->ville}} {{$user->pays}}</td>
     
      </tr>
      @endforeach

    
   
    </tr>
  </tbody>
</table>
    </div>          
        
          
</div>
@endsection