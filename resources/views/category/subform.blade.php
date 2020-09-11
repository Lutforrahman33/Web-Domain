@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">Add Your SubCategory</div>
                    <div class="inline-block">
                        <a href="{{ route('home') }}" class="btn btn-warning wd-70">Back</a>
                    </div>
                </div>

                <div class="card-body">
                
                   <form action="{{ route('subcategory.store') }}" method="POST">
                       @csrf
                       <div class="from-group">
                         <label for="selectcategory">Select Category</label>
                         <select class="form-control" id="selectcategory" name="category_id">
                          <option value=" ">Select</option>
                           @foreach($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                         </select>
                       </div>

                       <div class="from-group mt-4">
                       <label for="Subcategory">Subcategory Name :</label>
                       <input class="form-control" type="text" name="subcategoryname" placeholder="Subcategory name">
                       @error('subcategoryname')
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
