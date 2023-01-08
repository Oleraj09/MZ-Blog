@extends('backend.admin')
@section('title','MondolBlog :: All Comment List!')
@section('pages')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Comment List
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Comment</th>
                    <th class="text-center">Commented By</th>
                    <th class="text-center">Post Title</th>
                    <th class="text-center">Replies</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Comment</th>
                    <th class="text-center">Commented By</th>
                    <th class="text-center">Post Title</th>
                    <th class="text-center">Replies</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($comment as $cm)
                <tr class="text-center">
                    <td>{{$cm->id}}</td>
                    <td>{{Str::limit($cm->comments,70)}}</td>
                    <td>{{$cm->user->fname.' '.$cm->user->lname}}</td>
                    <td>{{$cm->posts->title}}</td>
                    <td>{{$cm->replies == NULL ? 'No Replies' : $cm->replies}}</td>
                    <td>{{$cm->created_at == NULL ? 'No Record' : $cm->created_at->diffForHumans()}}</td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection