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
            {{$customer->name}}
            <small class="form-text text-muted">name of this customer</small>
            </div>

            <label>Plotas:</label>
            {{$customer->surname}}
            <small class="form-text text-muted">surname of this customer</small>
            </div>

            <label>Plotas:</label>
            {{$customer->phone}}
            <small class="form-text text-muted">phone of this customer</small>
            </div>


            <label>Plotas:</label>
            {{$customer->email}}
            <small class="form-text text-muted">email of this customer</small>
            </div>

            <label>Plotas:</label>
            {{$customer->comment}}
            <small class="form-text text-muted">comment of this customer</small>
            </div>

            <label>Plotas:</label>
            {{$customer->company_id}}
            <small class="form-text text-muted">id of this customer</small>
            </div>

        @foreach($customer->customerCompanies as $company)
        {{$company->name}} <br>
        @endforeach
        @csrf
               </div>
           </div>
       </div>
   </div>
</div>
@endsection


