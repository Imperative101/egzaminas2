@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Companies redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('company.update',$company)}}">
                    <!--  МЕНЯЙ МЕСТАМИ ВСЕ CUSTMERS AND COMPANUES  -->
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control" value="{{$company->name}}">
                        {{-- <small class="form-text text-muted">name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control" value="{{$company->surname}}">
                        {{-- <small class="form-text text-muted">surname.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone"  class="form-control" value="{{$company->phone}}">
                        {{-- <small class="form-text text-muted">phone.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email"  class="form-control" value="{{$company->email}}">
                        {{-- <small class="form-text text-muted">email.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>comment</label>
                        <input type="text" name="comment"  class="form-control" value="{{$company->comment}}">
                        {{-- <small class="form-text text-muted">comment.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>company_id</label>
                        <input type="text" name="company_id"  class="form-control" value="{{$company->company_id}}">
                        {{-- <small class="form-text text-muted">company_id.</small> --}}
                    </div>

                    

                    @csrf
                    <button class="btn btn-success" type="submit">update</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
 