@extends('backend.admin')
@section('title', 'Manage Category');
@section('pages')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Category List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Body</th>
                    <th class="text-center">Added By</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Body</th>
                    <th class="text-center">Added By</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($post as $p)
                <tr class="text-center">
                    <td><img src="{{asset($p->image)}}" alt="" style="height: 40px; width:40px"></td>
                    <td>{{$p->id}}</td>
                    <td>{{Str::limit($p->title,50)}}</td>
                    <td>{{Str::limit($p->body,250)}}</td>
                    <td>{{$p->user->fname.' '.$p->user->lname}}</td>
                    <td>{{$p->category->name}}</td>
                    <td>{{$p->created_at->diffForHumans()}}</td>
                    <td>
                        <button class="btn btn-primary my-2">Inactive</button>
                        <button class="btn btn-primary my-2">Edit</button>
                        <button class="btn btn-danger my-2">Delete</button>
                    </td>
                </tr>                   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection