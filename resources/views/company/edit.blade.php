@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Companies redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('company.update',$company)}}">
                

                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control" value="{{$company->name}}">
                        {{-- <small class="form-text text-muted">name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>adress</label>
                        <input type="text" name="adress"  class="form-control" value="{{$company->adress}}">
                        {{-- <small class="form-text text-muted">adress.</small> --}}
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
 

<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
