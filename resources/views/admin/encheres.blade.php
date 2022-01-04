@extends('admin.master')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Les Enchères</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

    <div class="row">
        <div class="col-3">
            <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     Nombre d'Enchères
                      <div class="text-white-50 small">{{$encheres->count()}}</div>
                    </div>
            </div>   
        </div>  
    </div>  
    <div class="row">
        
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom du produit</th>
      <th scope="col">Qui</th>
      <th scope="col">Proposition</th>
      <th scope="col">date</th>
       <th scope="col">Etat</th>
    </tr>

    @foreach($encheres as $enchere)
    <tr>
        <td> <a href="{{route('showProduct',$enchere->produit_id)}}">{{App\Models\Product::find($enchere->produit_id)->titre}}</a> </td>
        <td>{{App\Models\User::find($enchere->user_id)->nom}}</td>
        <td>{{$enchere->price}} MAD</td>
        <td>{{$enchere->created_at}} </td>
        <td>{{App\Models\Product::find($enchere->produit_id)->etat}} </td>


    </tr>
    @endforeach
  </thead>
  <tbody>

    
   
    </tr>
  </tbody>
</table>
    </div>          
        
          
</div>
@endsection