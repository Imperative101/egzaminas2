@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">customer redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('customer.update',$customer)}}">

                    <div class="form-group">
                        <label>title</label>
                        <input type="text" name="title"  class="form-control" value="{{$customer->title}}">
                        {{-- <small class="form-text text-muted">title.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>area</label>
                        <input type="text" name="area"  class="form-control" value="{{$customer->area}}">
                        {{-- <small class="form-text text-muted">area.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>about</label>
                        <input type="text" name="about"  class="form-control" value="{{$customer->about}}">
                        {{-- <small class="form-text text-muted">about.</small> --}}
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