

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customer create</div>

               <!-- form -->

               <div class="card-header">Clientu sarasas</div>
              <form action="{{route('customer.indexSpecifics')}}" method="get"> Rusiavimas</form>
                <select class="form-control" name="order" id="">
                <option class="form-control" name="order" id="">
                <option value="0">rusiuokite pagal</option>
                <option value="name">varda</option>
                <option value="surname">pavarde</option>
                <option value="phone">telefona</option>
                <option value="email">email</option>
                <option value="comment">comment</option>
                <option value="company_id">company_id</option>
              </select>
              filtravimas
              <select class="form control" name="filter" id="">

                <option value="0">filtruokite pagal</option>
                
                <option value="name">name</option>
                <option value="surname">surname</option>
                <option value="phone">telefona</option>
                <option value="email">email</option>
                <option value="comment">comment</option>
                <option value="company_id">company_id</option>

                    @foreach($customers as $customer)    <!-- customer -->
                    <option value="{{$name->id}}">{{$customer->name}}</option>    <!-- customer -->
                @endforeach
                  </select>


                    <button class="btn btn-primary" type="submit">select</button>
                    </form>
                      <a href="{{ route('customer.index') }}">isvalyti filtra</a>
                      </div>

                 <!-- form -->



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

                    <!-- form -->
                      <select name="customer" class="form-control">
                              @foreach ($customers as $customer)
                                    <option value="{{$customer->id}}" @if($customer->id == $customer->company) selected @endif>
                                       {{$customer->title}} 
                                    </option>
                              @endforeach
                      </select>
                     <!-- form -->







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