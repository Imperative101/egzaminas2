@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customer redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('customer.update', $customer)}}">

                <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control" value="{{$customer->name}}">
                        {{-- <small class="form-text text-muted">name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control" value="{{$customer->surname}}">
                        {{-- <small class="form-text text-muted">surname.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone"  class="form-control" value="{{$customer->phone}}">
                        {{-- <small class="form-text text-muted">phone.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email"  class="form-control" value="{{$customer->email}}">
                        {{-- <small class="form-text text-muted">email.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>comment</label>
                        <input type="text" name="comment"  class="form-control" value="{{$customer->comment}}">
                        {{-- <small class="form-text text-muted">comment.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>customer_id</label>
                        <input type="text" name="customer_id"  class="form-control" value="{{$customer->customer_id}}">
                        {{-- <small class="form-text text-muted">customer_id.</small> --}}
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
