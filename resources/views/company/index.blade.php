@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">company create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>name</th>
                     <th>adress</th>
                     <!-- <th>id</th> -->
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($companies as $company)
                    <tr>
                      <td>{!!$company->name!!}</td>
                      <td>{!!$company->adress!!}</td>
                      
                      <td><a class="btn btn-success" href="{{route('company.show',[$company])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('company.edit',[$company])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('company.destroy', $company)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>


               @csrf
           </div>
       </div>
   </div>
</div>
@endsection
