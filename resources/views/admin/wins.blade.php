@extends('admin.master')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ventes sur Site</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

    <div class="row">
        <div class="col-3">
            <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     Nombre de Ventes
                      <div class="text-white-50 small">{{$wins->count()}}</div>
                    </div>
            </div>   
        </div>  
    </div>  
    <div class="row">
        
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom du produit</th>
      <th scope="col">Prix de Vente</th>
      <th scope="col">Publié par</th>
      <th scope="col">Acheté par :</th>
    </tr>
  </thead>
  <tbody>
      @foreach($wins as $win)
      <tr>
      @php $enchere=\App\Models\Enchere::find($win->enchere_id);
      $product=App\Models\Product::find($enchere->produit_id);
     
      @endphp
      <td><a href="">{{$product->titre}}</a></td>
      <td>{{$enchere->price}}</td>
      <td><a href="">{{App\Models\User::find($product->owner_id)->nom}}</a></td>
       <td><a href="">{{App\Models\User::find($win->user_id)->nom}}</a></td>
      </tr>
      @endforeach

    
   
    </tr>
  </tbody>
</table>
    </div>          
        
          
</div>
@endsection