@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customers sukurimas</div>
               @csrf
               <div class="card-body">
                <form method="POST" action="{{route('customer.store')}}">

 
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control">
                        {{-- <small class="form-text text-muted">name</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control">
                        {{-- <small class="form-text text-muted">surname</small> --}}
                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone"  class="form-control">
                        {{-- <small class="form-text text-muted">phone</small> --}}
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email"  class="form-control">
                        {{-- <small class="form-text text-muted">email</small> --}}
                    </div>

                    <div class="form-group">
                        <label>comment</label>
                        <input type="text" name="comment"  class="form-control">
                        {{-- <small class="form-text text-muted">comment</small> --}}
                    </div>
                    <div class="form-group">
                        <label>company_id</label>
                        <input type="text" name="company_id"  class="form-control">
                        {{-- <small class="form-text text-muted">company_id</small> --}}
                    </div>


                    @csrf
                    <button class="btn btn-primary" type="submit">ADD</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection