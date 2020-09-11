@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">Dashboard</div>
                    <div class="inline-block">
                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    You are logged in!
                    <div class="d-flex align-items-between">
                        <a href="{{ route('category.create') }}" class="btn btn-primary w-80 m-2">Add Category</a>
                    
                        <a href="{{ route('subcategory.create') }}" class="btn btn-primary w-80 m-2">Add Sub Category</a>
                    </div> 

                    <div class="d-flex align-items-between">
                        <a href="{{ route('category.index') }}" class="btn btn-primary w-80 m-2">Show Category</a>
                    
                    </div> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
