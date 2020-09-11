@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-6 d-flex flex-column justify-content-center">
               
                   <div>
                       <h1>This Is A WebDomain Page</h1>
                   </div>
                   <div class="py-3">
                       <a href="{{ route('domain.create') }}" class="btn btn-primary">Submit Your Domain</a>
                   </div>
               
           </div>

           <div class="col-md-6">
              <div class="d-flex justify-content-end align-items-center">
               <img class="w-100 py-4 pl-4" src="{{ asset('/img/domain.png') }}" alt="domain image">
              </div>
           </div>
       </div>

       <div class="d-flex justify-content-center">
           <h2 class="font-weight-bolder py-3">Catagories</h2>
       </div>

       <domain-display :categories="{{$categories}}" :subcategories="{{$subcategories}}" :domains="{{$domains}}"></domain-display>
   </div>

@endsection