@extends('frontend.client')
@section('title','MondolBlog :: A online News Portal for your needs!!')
@section('pages')
<section>
  <div class="owl-carousel loop">

    @foreach ($popular as $view)
    <div class="item"> 
      <div class="row">
        <div class="col-xl-4 col-12">
            <div class="img3">
              <img style="height: 100%; width:100%" src="{{asset($view->image)}}" alt="">
            </div>
        </div>
        <div class="col-xl-8 col-12">
          <div class="title text-justify"><h6 class="ps-1"><a style="text-decoration: none" href="{{route('post-item',$view->id)}}">{{Str::limit($view->title,80)}}</a></h6></div>
        </div>
        <div class="col-12">
          <div class="desc text-justify"><p>{{Str::limit($view->body,140)}}</p></div>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
</section>
<hr>
<section id="news-section">
  <div class="container-fluid">
    <div class="all d-flex">
      <div class="news-list px-2 py-5">
        <div class="list">
          <div class="leatest-news pt-0 pb-5">
            <div class="title">
              <h3>Leatest News</h3>
            </div>
            <div class="news-item">
              <div class="owl-carousel item-leatest">
                @foreach ($leatest as $update)
                <div class="item-leatests">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="img1">
                        <img src="{{asset($update->image)}}" style="height:100%;width:100%;" alt="">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 space">
                      <h3><a style="text-decoration: none" href="{{route('post-item',$update->id)}}">{{Str::limit($update->title,120)}}</a></h3>
                      <p>{{Str::limit($update->body,400)}} <a href="{{route('post-item',$update->id)}}" style="text-decoration: none">Read More</a></p>
                    </div>
                  </div>
                 </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="list">
          <div class="leatest-news">
            <div class="title">
              <h3>All News</h3>
            </div>
            <div class="news-item">
              <div class="row">

                @foreach ($allnews as $all)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card" style="margin-bottom: 10px">
                    <img style="height: 150px; width:100%" src="{{asset($all->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title text-justify">{{Str::limit($all->title,60)}}</h5>
                      <p class="card-text text-justify">{{Str::limit($all->body,200)}}</p>
                      <a href="{{route('post-item',$all->id)}}" class="btn btn-primary">Details</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              {{$allnews->links()}}
            </div>
          </div>
        </div>
      </div>
      <div class="sidebar px-2 py-5">
        <div class="lists">
          <div class="side-title">
            <h3>Most Viewed</h3>
          </div>
          <div class="side-news">
            @foreach ($popular as $view)
              <li style="list-style: none" class="mt-2"><a style="text-decoration: none" href="{{route('post-item',$update->id)}}">{{$view->title}}</a></li>
            @endforeach
          </div>
        </div>
        <div class="cats mt-5">
          <div class="cat-title">
            <h3>Category list</h3>
          </div>
          <div class="cat-item">
            <ul>
              @foreach ($categorys as $cat)
                <li>{{$cat->name}}</li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="comment mt-5">
          <div class="comment-title">
            <h3>Last Comment</h3>
          </div>
          <div class="comment-item">
            <ul>
              @foreach ($comment as $cmt)
                <li>{{$cmt->comments}}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection