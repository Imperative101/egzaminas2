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
                        <input type="text" name="customer_name" class="form-control" value = "{{old('customer_name')}}">
                        <!-- <input type="text" name="name"  class="form-control"> -->
                        <small class="form-text text-muted">name</small> 
                    </div>
                    <div class="form-group">
                        <label>surname</label>


                        <input type="text" name="customer_surname" class="form-control" value = "{{old('customer_surname')}}">
                        <small class="form-text text-muted">surname</small>
                    </div>

                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="customer_phone" class="form-control" value = "{{old('customer_phone')}}">
                        <small class="form-text text-muted">phone</small>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="customer_email" class="form-control" value = "{{old('customer_email')}}">
                        <small class="form-text text-muted">email</small>
                    </div>

                    <div class="form-group">
                        <label>comment</label>
                        <textarea name="customer_comment" class="form-control" id="summernote">{{old('customer_comment')}}</textarea>
                        <small class="form-text text-muted">comment</small> 
                    </div>
                    <!-- <div class="form-group">
                        <label>company_id</label>
                        <textarea name="customer_comment" class="form-control" id="summernote">{{old('customer_comment')}}</textarea>
                         <small class="form-text text-muted">company_id</small>
                    </div> -->

                    <div class="form-group">
                            <label>Company</label>
                            <select name="company_id" class="form-control">
                                <option value="0" disabled selected>Select Company</option>
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}">
                                        {{$company->name}} {{$company->address}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Set customer to company</small>
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