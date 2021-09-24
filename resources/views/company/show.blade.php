

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
            

              <div class="form-group">
            <label>Plotas:</label>
            {{$company->name}}
            <small class="form-text text-muted">name of this company</small>
            </div>

            <label>Plotas:</label>
            {{$company->adress}}
            <small class="form-text text-muted">adress of this company</small>
            </div>

        @foreach($company->companyCustomers as $customer)
        {{$customer->name}} <br>
        @endforeach
        @csrf
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
