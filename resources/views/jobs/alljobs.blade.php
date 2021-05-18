@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Recent Jobs</h1>
        <br>
        <form action="{{route('alljobs')}}" method="GET">
        <div class="form-inline">
            <div class="form-group">
                <label for="">
                    Keyword
                </label> &nbsp; &nbsp;
                <input type="text" name="title" id="" class="form-control">
            </div> &nbsp; &nbsp;

            <div class="form-group">
                <label for="">
                    Employment Type
                </label>&nbsp; &nbsp;
                <select name="type" id="" class="form-control">
                    <option value="">Select Type</option>
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
                    <option value="casual">Casual</option>
                </select>
            </div> &nbsp; &nbsp;

            <div class="form-group">
                <label for="">
                    Category
                </label> &nbsp; &nbsp;
                <select name="category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    @foreach (App\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div> &nbsp; &nbsp;

            <div class="form-group">
                <label for="">
                    Address
                </label> &nbsp; &nbsp;
                <input type="text" name="address" id="" class="form-control">
            </div> &nbsp; &nbsp;

            <div class="form-group">
                <button class="btn btn-outline-dark">Search</button>
            </div>
        </div>
        </form>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            @foreach($jobs as $job)    
                <tr>
                    <td>
                        <img src="{{asset('avatar/shopee.png')}}" alt="" width="80">
                    </td>
                    <td>
                        Position : {{$job->position}}
                            <br>
                        Job Type : &nbsp; <i class="fa fa-clock"></i> {{$job->type}}
                    </td>
                    <td>
                       <i class="fa fa-map-marker"></i>&nbsp; Address : {{$job->address}}
                    </td>
                    <td>
                       <i class="fa fa-calendar-check"></i> &nbsp; Date : {{$job->created_at->diffForHumans()}} <!--fungsi melihat tanggal dibuat dari kapan-->
                    </td>
                    <td>
                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}"> <!--Mengarahkan untuk menampilkan detail dari job  -->
                        <button type="submit" class="btn btn-success btn-sm">Apply</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$jobs->links()}}
    </div>
 
</div>

@endsection
