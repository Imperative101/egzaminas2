

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customer create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                   <th>name</th>
                     <th>surname</th>
                     <th>phone</th>
                     <th>email</th>
                     <th>comment</th>
                     <th>company_id</th>   
                     <th>Užeiti</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($customers as $customer)
                    <tr>
                      <td>{!!$customer->name!!}</td>
                      <td>{!!$customer->surname!!}</td>
                      <td>{!!$customer->phone!!}</td>
                      <td>{!!$customer->email!!}</td>
                      <td>{!!$customer->comment!!}</td>
                      <td>{!!$customer->company_id!!}</td>
                      <td><a class="btn btn-success" href="{{route('customer.show',[$customer])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('customer.edit',[$customer])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('customer.destroy', $customer)}}">
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