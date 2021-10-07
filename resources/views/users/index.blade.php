@extends('layouts.main')
 @section('content')
   
<div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Users</h1>  </div>
     
        <div class="card" mx-auto>
          <div class="card-header"> 
            <a href="{{route('users.create')}}" class="float-left"> Create </a>
        </div> 
   <div class="card-body" >
     
   <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($user as $user )
        <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>@mdo</td>
       </tr>
    @endforeach

    </tbody>
</table>
</div>
</div>

 @endSection