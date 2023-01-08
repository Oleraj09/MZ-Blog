@extends('frontend.client')
@section('title')
MondolBlog :: {{Auth::User()->fname.' '.Auth::User()->lname}}'s Dashboard!
@endsection
@section('pages')
<div class="container">
    <section class="form-control my-5">
        <div class="user-dashboard">
            <div class="info d-flex px-2">
                <h3 class="text-secondary py-2" style="float: left;">Dashboard</h3>
                <h3 class="text-secondary py-2 position-relative" style="float: Right;margin-left: auto;">
                    <i class="fa-solid fa-comments"></i> 
                    <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger">
                    77</span>
                </h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-control">
                        <div class="row">
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="ps-2">Hi,  {{Auth::User()->fname.' '.Auth::User()->lname}}!!</h5>
                            </div>
                            <div class="col-md-4 col-12 py-2">
                                <button class="btn btn-success text-white" disabled>Your Post: <span class="text-warning">{{$post->count();}}</span></button>
                            </div>
                            <div class="col-md-4 col-12 py-2">
                                @php
                                    $role = Auth::user()->role;
                                @endphp
                                @if ($role==1)
                                    <button class="btn btn-primary text-white" disabled>You are: <span class=text-warning>{{Auth::user()->role==1 ? 'Author' : 'User'}}</span></button>
                                @elseif($role==2)
                                    <a href="{{route('author',Auth::user()->id)}}"><button class="btn btn-success">Send Author Request!</button></a>
                                @else
                                    <button class="btn btn-success text-white-50" disabled>Author Request Pending!</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="form-control">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <ul class="nav-bar">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('userdb')}}">View Post</a>
                                    </li>
                                    @if ($role==1)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('post-user-add')}}">Create Post</a>
                                    </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('account',Auth::user()->id)}}">Account Setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <form id="logout" action="{{route('logout')}}" method="post">
                                            @csrf
                                            <a class="nav-link" onclick="logout()">Logout</a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <form action="{{route('post-create')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-control">
                                        <h3>New Post</h3>
                                        <label for="">Title </label>
                                        <input type="text" name="title" class="form-control w-100 my-2 py-2">
                                        <label for="">Category </label>
                                        <select name="category_id" class="form-control w-100">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach ($category as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="">Body </label><br>
                                        <textarea name="body" id="" rows="10" class="form-control w-100"></textarea>
                                        <input type="file" name="image" class="form-control w-100 my-2 py-2">
                                        <input type="submit" value="Post" class="form-control bg-success text-white w-50 my-2 py-2">
                                    </div>
                                </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
