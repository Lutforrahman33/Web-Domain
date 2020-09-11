@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row py-5">
        <div class="w-100">
          <h2 class="text-center">Add Your Domain Here</h2>
        </div>
      </div>
       <domain-register-component :categories="{{$categories}}" :subcategories="{{$subcategories}}"></domain-register-component>
    </div>
@endsection