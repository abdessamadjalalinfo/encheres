@extends('admin.master')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$cat->nom}}</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

    <div class="row">
        <div class="col-3">
            <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     Nombre de Produit
                      <div class="text-white-50 small">{{$cat->products->count()}}</div>
                    </div>
            </div>   
        </div>  
    </div>  
    <div class="row">
        
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom du produit</th>
      <th scope="col">Premier Prix</th>
      <th scope="col">Publié par</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>

    @foreach($cat->products as $product)
    <tr>
      <th scope="row"><a href="{{route('showProduct',$product->id)}}"> {{$product->titre}}</a> </th>
      <td>{{$product->premier_prix}}</td>
      <td>{{App\Models\User::find($product->owner_id)->nom}}</td>
      <td>{{$product->created_at}}</td>
    </tr>
    @endforeach
   
    </tr>
  </tbody>
</table>
    </div>          
        
          
</div>
@endsection