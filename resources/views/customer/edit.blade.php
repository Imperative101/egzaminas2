@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customer redagavimas</div>
               @csrf
               <div class="card-body">
                <form method="POST" action="{{route('customer.update', $customer)}}">


                <div class="form-group">
                        <label>name</label>
                        <input type="text"  class="form-control"  name="customer_name"
                        value="{{ $customer->name }}">
                        <small class="form-text text-muted">Customer name.</small> 
                    </div>

                    <div class="form-group">
                        <label>surname</label>
                        <input type="text"  class="form-control"  name="customer_surname"
                        value="{{ $customer->surname }}">
                        <small class="form-text text-muted">Customer surname.</small> 
                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input type="text"  class="form-control"  name="customer_phone"
                        value="{{ $customer->phone }}">
                        <small class="form-text text-muted">Customer phone.</small> 
                    </div>
        
                    <div class="form-group">
                        <label>email</label>
                        <input type="text"  class="form-control"  name="customer_email"
                        value="{{ $customer->email }}">
                        <small class="form-text text-muted">Customer email.</small> 
                    </div>
                   
                    <div class="form-group">
                        <label>comment</label>
                        <input type="text"  class="form-control"  name="customer_comment"
                        value="{{ $customer->comment }}">
                        <small class="form-text text-muted">Customer comment.</small> 
                    </div>
                    
                    <div class="form-group">
                        <label>customer_id</label>
                        <input type="text"  class="form-control"  name="customer_customer_id"
                        value="{{ $customer->customer_id }}">
                        <small class="form-text text-muted">Customer customer_id.</small> 
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
