@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{-- <img style="border-radius: 50px; width: 100%" src="{{asset('avatar/shopee.png')}}" alt="" width="100" height="200"> --}}
            @if (empty(Auth::user()->profile->avatar))
                <img style="border-radius: 50px; width: 100%" src="{{asset('avatar/shopee.png')}}" alt="" width="100" height="200">
            @else
                <img style="border-radius: 50px; width: 100%" 
                     src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" 
                     alt="" width="100" height="300">
            @endif
            <form action="{{route('profile.avatar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="card">
                    <div class="card-header">
                        Change Your Photo Profile!
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="avatar" id="">
                        <br>
                        <button class="btn btn-primary">Update</button>
                    </div>
                    {{-- Error Exception jika avatar dikosongkan--}}
                    @if ($errors->has('avatar'))
                    <div class='error' style="color: red">
                        &nbsp; {{$errors -> first('avatar')}}
                    </div>                            
                    @endif
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Update Your Information
                </div>
                <div class="card-body">
                    <form action="{{route('profile.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">
                                Address
                            </label>
                            <textarea class="form-control" name="address" id="" cols="30" rows="3">
                                {{Auth::user()->profile->address}}
                            </textarea>
                        </div>
                        {{-- Error Exception jika address dikosongkan--}}
                        @if ($errors->has('address'))
                            <div class='error' style="color: red">
                            {{$errors -> first('address')}}
                            </div>                            
                        @endif

                        <div class="form-group">
                            <label for="">
                                Phone Number
                            </label>
                            <input type="text" name="phone_number" class="form-control" id=""
                                    value="{{Auth::user()->profile->phone_number}}">
                        </div>
                        {{-- Error Exception jika Biodata dikosongkan--}}
                        @if ($errors->has('phone_number'))
                            <div class='error' style="color: red">
                            {{$errors -> first('phone_number')}}
                            </div>                            
                        @endif


                        <div class="form-group">
                            <label for="">
                                Experience
                            </label>
                            <textarea class="form-control" name="experience" id="" cols="30" rows="3">
                                {{Auth::user()->profile->experience}}
                            </textarea>
                        </div>
                        {{-- Error Exception jika experience dikosongkan--}}
                        @if ($errors->has('experience'))
                            <div class='error' style="color: red">
                            {{$errors -> first('experience')}}
                            </div>                            
                        @endif

                        <div class="form-group">
                            <label for="">
                                Biodata
                            </label>
                            <textarea class="form-control" name="bio" id="" cols="30" rows="3">
                                {{Auth::user()->profile->bio}}
                            </textarea>
                        </div>
                        {{-- Error Exception jika Biodata dikosongkan--}}
                        @if ($errors->has('bio'))
                            <div class='error' style="color: red">
                            {{$errors -> first('bio')}}
                            </div>                            
                        @endif

                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Details
                </div>
                <div class="card-body">
                    <p><b>Name : </b>{{Auth::user()->name}}</p>
                    <p><b>Email : </b>{{Auth::user()->email}}</p>
                    <p><b>Address : </b>{{Auth::user()->profile->address}}</p>
                    <p><b>Phone Number : </b>{{Auth::user()->profile->phone_number}}</p>
                    <p><b>Experience : </b>{{Auth::user()->profile->experience}}</p>
                    <p><b>Bio : </b>{{Auth::user()->profile->bio}}</p>
                    <p><b>Member since : </b>{{date('d F Y', strtotime(Auth::user()->profile->created_at))}}</p>
                    @if (!empty(Auth::user()->profile->cover_letter))
                        <p>
                            <a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">Cover Letter</a>
                        </p>
                    @else
                        <p>Please Upload Your Cover Letter!</p>
                    @endif

                    @if (!empty(Auth::user()->profile->resume))
                    <p>
                        <a href="{{Storage::url(Auth::user()->profile->resume)}}">Resume</a>
                    </p>
                    @else
                    <p>Please Upload Your Resume!</p>
                    @endif
                </div>
            </div>

            <form action="{{route('profile.coverletter')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Update Cover Letter
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="cover_letter" id="">
                        <br>
                        <button class="btn btn-primary">Update</button>
                    </div>
                    {{-- Error Exception jika cover_letter dikosongkan--}}
                    @if ($errors->has('cover_letter'))
                    <div class='error' style="color: red">
                        &nbsp; {{$errors -> first('cover_letter')}}
                    </div>                            
                    @endif
                </div>
            </form>

            <form action="{{route('profile.resume')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Update Resume
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="resume" id="">
                        <br>
                        <button class="btn btn-primary">Update</button>
                    </div>
                    {{-- Error Exception jika resume dikosongkan--}}
                     @if ($errors->has('resume'))
                    <div class='error' style="color: red">
                    &nbsp; {{$errors -> first('resume')}}
                    </div>                            
                    @endif
                </div>
            </form>

        </div>

    </div>
</div>
@endsection
