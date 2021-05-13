@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <img style="border-radius: 50px" src="{{asset('avatar/shopee.png')}}" alt="" width="100">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update Your Information
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">
                            Address
                        </label>
                        <textarea class="form-control" name="address" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Experience
                        </label>
                        <textarea class="form-control" name="experience" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Biodata
                        </label>
                        <textarea class="form-control" name="bio" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    User Description
                </div>
                <div class="card-body">
                    User Details
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Update Cover Letter
                </div>
                <div class="card-body">
                    <input class="form-control" type="file" name="cover_letter" id="">
                    <br>
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Update Resume
                </div>
                <div class="card-body">
                    <input class="form-control" type="file" name="resume" id="">
                    <br>
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
