@extends('frontend.client')
@section('title')
    MondolBlog :: {{$categorys->name}} Page!
@endsection
@section('pages')
<section id="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header">
                    <div class="title pt-5">
                        <h3 class="text-style">{{$categorys->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="row">
            @foreach ($post as $p)
                <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                  <div class="card" style="margin-bottom: 10px">
                    <img style="height: 150px; width:100%" src="{{asset($p->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-justify">{{Str::limit($p->title,60)}}</h5>
                      <p class="card-text text-justify">{{Str::limit($p->body,360)}}</p>
                      <a href="{{route('post-item',$p->id)}}" class="btn btn-primary">Details</a>
                    </div>
                  </div>
                </div>
            @endforeach
        </div>
        {{$post->links()}}
    </div>
</section>

@endsection
