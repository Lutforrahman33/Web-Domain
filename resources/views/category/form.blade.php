@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">Add Your Category</div>
                    <div class="inline-block">
                        <a href="{{ route('home') }}" class="btn btn-warning wd-70">Back</a>
                    </div>
                </div>

                <div class="card-body">
                
                   <form action="{{ route('category.store') }}" method="POST">
                       @csrf
                       <div class="from-group mt-4">
                       <label for="category">Category Name :</label>
                       <input class="form-control" type="text" name="name" placeholder="Category name">
                       @error('name')
                         <div class="error text-danger">{{ $message }}</div>
                       @enderror
                       </div>
                       
                       <button type="submit" class="btn btn-primary mt-2">Submit</button>

                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
