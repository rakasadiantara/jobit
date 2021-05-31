@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="display-4 fontrek">Recent Jobs</h3>
        
    </div>
    <div class="py-2"></div>
    <div class="row">
        <form action="{{route('alljobs')}}" method="GET">
            <div class="form-inline">
                <div class="form-group">
                    <label for="">
                        Keyword
                    </label>&nbsp;
                    <input type="text" name="title" id="" class="form-control">
                </div>
                &nbsp;
                <div class="form-group">
                    <label for="">
                        Employment Type
                    </label>&nbsp;
                    <select name="type" id="" class="form-control">
                        <option value="">Select Type</option>
                        <option value="fulltime">Full Time</option>
                        <option value="parttime">Part Time</option>
                        <option value="casual">Casual</option>
                    </select>
                </div>&nbsp;
        
                <div class="form-group">
                    <label for="">
                        Category
                    </label>&nbsp;
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Category</option>
                        @foreach (App\Category::all() as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>&nbsp;
        
                <div class="form-group">
                    <label for="">
                        Address
                    </label>&nbsp;
                    <input type="text" name="address" id="" class="form-control">
                </div>&nbsp;
        
                <div class="form-group">
                    <button class="btn btn-outline-dark">Search</button>
                </div>&nbsp;
            </div>
        </form>
        
    </div>
    <div class="py-3"></div>
    <div class="container">
        @foreach($jobs as $job)    
            <div class="">
                <div class="row">
                    <div class="col-2 text-center align-self-center">
                        <img class="" src="{{asset('avatar')}}/{{$job->job_image}}" alt="" width="150px">
                    </div>
                    <div class="col">
                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}">{{$job->position}}</a><br>
                        <i class="fa fa-map-marker"></i>&nbsp; {{$job->address}} <br>
                        <i class="fa fa-clock"></i> {{$job->type}} <br>
                        <i class="fa fa-calendar-check"></i> {{$job->created_at->diffForHumans()}}  
                    </div>
                    <div class="col-2 align-self-center">
                        <a class="" href="{{route('jobs.show', [$job->id, $job->slug])}}"> <!--Mengarahkan untuk menampilkan detail dari job  -->
                            <button type="submit" class="btn btn-success btn-sm">Detail</button>
                        </a>
                    </div>
                </div>
            </div>
      		<div class="py-3"></div>
        @endforeach
    </div>
    <div class="py-2"></div>
    {{$jobs->links()}}
</div>


@endsection
