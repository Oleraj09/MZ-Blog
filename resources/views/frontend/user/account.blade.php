@extends('frontend.client')
@section('title')
MondolBlog :: {{Auth::User()->fname.' '.Auth::User()->lname}} Account Setting!!
@endsection
@section('pages')
<section class="my-4">
    <div class="profile">
        <div class="container">
            <div class="form-control">
                <div class="update m-5 px-5 py-2">
                    <form action="{{route('account.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5>Update Profile Info</h5>
                                <div class="div"></div>
                                Personal Info
                                <div class="div"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="fname" class="form-control" value="{{$user->fname}}"/>
                                <label class="form-label" for="form3Example1">First name</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" name="lname" class="form-control" value="{{$user->lname}}" />
                                <label class="form-label" for="form3Example2">Last name</label>
                              </div>
                            </div>
                          </div>
                          <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" class="form-control" value="{{$user->email}}" disabled/>
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>
                        <!--Age and Gender-->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="age" value="{{$user->age}}" class="form-control" />
                                <label class="form-label" for="form3Example1">Date of Birth</label>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="gender"  value="{{$user->gender}}" class="form-control" />
                                <label class="form-label" for="form3Example2">Gender</label>
                            </div>
                            </div>
                        </div>
                        <!--Division District-->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="division"  value="{{$user->division}}" class="form-control" />
                                <label class="form-label" for="form3Example1">Division</label>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <input type="text" name="district" value="{{$user->district}}" class="form-control" />
                                <label class="form-label" for="form3Example2">District</label>
                            </div>
                            </div>
                        </div>
                        <!--Thana Post-->
                        <div class="row">
                            <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" name="thana" value="{{$user->thana}}" class="form-control" />
                                <label class="form-label" for="form3Example1">Thana</label>
                            </div>
                            </div>
                            <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" name="post" value="{{$user->post}}" class="form-control" />
                                <label class="form-label" for="form3Example2">Post</label>
                            </div>
                            </div>
                            <div class="col-md-4 mb-2">
                            <div class="form-outline">
                                <input type="text" name="zip"  value="{{$user->zip}}" class="form-control" />
                                <label class="form-label" for="form3Example2">ZIP</label>
                            </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="adress"  value="{{$user->adress}}" class="form-control" />
                            <label class="form-label" for="form3Example3">Adress</label>
                        </div>

                        Change Profile
                        <div class="div"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profilepic py-2">
                                    <img style="height: 200px;width:200px;border-radius:50%;" src="{{asset($user->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline mb-4">
                                    <input type="file" name="image" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="div py-2"></div>
                        <div class="div py-2"></div>
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Update Info
                          </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection