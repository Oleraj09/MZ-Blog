@extends('backend.admin')
@section('title','Add Category!!')
@section('pages')
    <div class="container mt-2">
        <form action="{{route('category-create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
                <h3>Add New Category</h3>
                <label for="">Category Name </label>
                <input type="text" name="name" class="form-control w-50 my-2 py-2">
                <label for="">Image </label>
                <input type="file" name="image" class="form-control w-50 my-2 py-2">
                <input type="submit" value="Add" class="form-control bg-success text-white w-25 my-2 py-2">
            </div>
        </form>
    </div>
@endsection
