@extends('frontend.client')
@section('title')
    MondolBlog :: {{$post->title}}
@endsection
@section('pages')
    <div class="news py-5 m-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="img2">
                        <img style="height: 100%; width:100%" src="{{asset($post->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 pt">
                    <h4>{{$post->title}}</h4>
                    <h5>Author: {{$post->user->fname.' '.$post->user->lname}}</h5>
                    <h5>Category: {{$post->category->name}}</h5>
                    <p>
                        {{$post->body}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="comment">
                        <form action="{{route('comment-post')}}" method="POST">
                            @csrf
                            <div class="title">
                                <h4>Leave A Comment</h4>
                            </div>
                            <input type="hidden" name="blog_id" id="post_id" value="{{ $post->id }}" />
                            <div class="comment-area">
                                <textarea name="comments" id="" class="form-control bg-secondary" rows="5">Write Here...</textarea>
                            </div>
                            <div class="submit text-right">
                                <input type="submit" value="Comment" class="btn btn-primary text-white my-2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    @foreach ($comment as $cm)
                    <div class="col-12 my-2">
                        <div class="form-control bg-dark text-white">
                            <div class="image d-flex">
                                <img src="{{asset($cm->user->image)}}" style="border-radius: 50%; height:60px; width:60px; float: left;" alt="" class="">
                                <h5 style="float: left" class="mt-4 ms-3">{{$cm->user->fname.' '.$cm->user->lname}}</h5>
                            </div>
                            <div class="comment ps-4">
                                <p class="ps-5">{{$cm->comments}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection