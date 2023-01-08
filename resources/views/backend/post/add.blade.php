@extends('backend.admin')
@section('title','Add Category!!')
@section('pages')
    <div class="container mt-2">
        <form action="{{route('post-create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-control">
                <h3>New Post</h3>
                <label for="">Title </label>
                <input type="text" name="title" class="form-control w-50 my-2 py-2">
                <label for="">Category </label>
                <select name="category_id" class="form-control w-50">
                    <option value="" selected disabled>Select Category</option>
                    @foreach ($category as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
                <label for="">Body </label><br>
                <textarea name="body" id="" rows="10" class="form-control w-50"></textarea>
                <input type="file" name="image" class="form-control w-50 my-2 py-2">
                <input type="submit" value="Post" class="form-control bg-success text-white w-25 my-2 py-2">
            </div>
        </form>
    </div>
@endsection
