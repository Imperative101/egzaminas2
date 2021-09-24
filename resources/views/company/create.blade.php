@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">company sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('company.store')}}">
                
 
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control">
                        {{-- <small class="form-text text-muted">name</small> --}}
                    </div>
                    <div class="form-group">
                        <label>adress</label>
                        <input type="text" name="adress"  class="form-control">
                        {{-- <small class="form-text text-muted">adress</small> --}}
                    </div>

                    
                    <div class="form-group">
                        <label>timestamps</label>
                        <input type="text" name="timestamps"  class="form-control">
                        {{-- <small class="form-text text-muted">timestamps</small> --}}
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
