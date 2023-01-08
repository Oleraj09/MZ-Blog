@extends('frontend.client')
@section('title')
    MondolBlog :: Category List!!
@endsection
@section('pages')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h3>All Category</h3>
            </div>
            @foreach ($category as $c)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 p-2 my-2">
                    <div class="box shadow">
                        <div class="image"><img style="height: 180px; width:100%;" src="{{asset($c->image)}}" style="height: 100%; width:100%" alt=""></div>
                        <div class="title"><h5 class="text-center py-2">{{$c->name}}</h5></div>
                    </div>
                </div>
            @endforeach
            {{$category->links()}}
        </div>
    </div>
</section>
@endsection
