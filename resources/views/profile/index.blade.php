@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{-- <img style="border-radius: 50px; width: 100%" src="{{asset('avatar/shopee.png')}}" alt="" width="100" height="200"> --}}
            @if (empty(Auth::user()->profile->avatar))
                <img class="rounded" style="width: 100%" src="{{asset('avatar/shopee.png')}}" alt="" width="100" height="200">
            @else
                <img class="rounded" style="width: 100%" 
                     src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" 
                     alt="" width="100" height="300">
            @endif
            <form action="{{route('profile.avatar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pt-3"></div>
                <div class="card rounded">
                    <div class="card-header" style="background-color : #114386;">
                        <h6 class="text text-light text-center">Change Your Profile Picture!</h6>
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="avatar" id="">
                        <div class="pt-3"></div>
                        <button class="btn btn-outline-primary btn-block">Update</button>
                    </div>
                    {{-- Error Exception jika avatar dikosongkan--}}
                    @if ($errors->has('avatar'))
                    <div class='error' style="color: red">
                         {{$errors -> first('avatar')}}
                    </div>                            
                    @endif
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text text-light text-center" style="background-color : #114386;">
                    <h5>Update Your Information</h5>
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
                            <button class="btn btn-outline-success">Submit</button>
                            <button class="btn btn-outline-danger" type="reset">Cancel</button>
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
                <div class="card-header text text-light text-center" style="background-color : #114386;">
                    <h5>User Details</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <table class="table table-striped table-hover table-sm">
                            <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{Auth::user()->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{Auth::user()->email}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{Auth::user()->profile->address}}</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>:</td>
                                <td>{{Auth::user()->profile->phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td>:</td>
                                <td>{{Auth::user()->profile->experience}}</td>
                            </tr>
                            <tr>
                                <td>Bio</td>
                                <td>:</td>
                                <td>{{Auth::user()->profile->bio}}</td>
                            </tr>
                            <tr>
                                <td>Since</td>
                                <td>:</td>
                                <td>{{date('d F Y', strtotime(Auth::user()->profile->created_at))}}</td>
                            </tr>
                            </tbody>
                        </table>
                        
                        
                        @if (!empty(Auth::user()->profile->cover_letter))
                            <p>
                                <a href="{{Storage::url(Auth::user()->profile->cover_letter)}}"><b>Cover Letter</b></a>
                            </p>
                        @else
                            <p><b>Please Upload Your Cover Letter!</b></p>
                        @endif
    
                        @if (!empty(Auth::user()->profile->resume))
                        <p>
                            <a href="{{Storage::url(Auth::user()->profile->resume)}}">Resume</a>
                        </p>
                        @else
                        <p><b>Please Upload Your Resume!</b></p>
                        @endif
                        </div>
                    </div>
            </div> 
            <div class="pt-3"></div>
            <form action="{{route('profile.coverletter')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header text text-light text-center" style="background-color : #114386;">
                        <h5>Update Cover Letter</h5>
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="cover_letter" id="">
                        <div class="pt-3"></div>
                        <button class="btn btn-outline-primary btn-block">Update</button>
                    </div>
                    {{-- Error Exception jika cover_letter dikosongkan--}}
                    @if ($errors->has('cover_letter'))
                    <div class='error' style="color: red">
                         {{$errors -> first('cover_letter')}}
                    </div>                            
                    @endif
                </div>
            </form> 
            <div class="pt-3"></div>
            <form action="{{route('profile.resume')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header text text-light text-center" style="background-color : #114386;">
                        <h5>Update Resume</h5>
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="file" name="resume" id="">
                        <div class="pt-3"></div>
                        <button class="btn btn-outline-primary btn-block">Update</button>
                    </div>
                    {{-- Error Exception jika resume dikosongkan--}}
                     @if ($errors->has('resume'))
                    <div class='error' style="color: red">
                     {{$errors -> first('resume')}}
                    </div>                            
                    @endif
                </div>
            </form>

        </div>
    

    </div>
</div>
@endsection
