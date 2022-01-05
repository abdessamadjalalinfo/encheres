@extends('admin.master')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NewsLetters</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     Nombre d'émail
                      <div class="text-white-50 small">{{$newsletters->count()}}</div>
                    </div>
            </div>   
        </div>  
    </div>

    <div class="row">
         <table class="table">
      <thead>
          <tr>
      <th scope="col">Email</th>
      <th scope="col">date de création</th>

       </tr>
         </thead>
         <tbody>
      @foreach($newsletters as $email)
      <tr>
     
      <td><a href="">{{$email->email}}</a></td>
      <td>{{$email->created_at}}</td>
      
     
      </tr>
      @endforeach

    
   
    </tr>
  </tbody>
</table>
    </div>
    
    
</div>
@endsection