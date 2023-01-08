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
                    <th class="text-center">Name</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Added By</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Added By</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($category as $c)
                <tr class="text-center">
                    <td><img src="{{asset($c->image)}}" alt="" style="height: 40px; width:40px"></td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->id}}</td>
                    <td>{{$c->user->fname.' '.$c->user->lname}}</td>
                    <td>{{$c->created_at->diffForHumans()}}</td>
                    <td>
                        <button class="btn btn-primary">Inactive</button>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection