@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="company-profile">
            {{-- <img src="{{asset('cover/banner_shopee.png')}}" alt="" width="1150" height="200" > --}}
            @if (empty(Auth::user()->company->cover_photo))
                <img style="border-radius: 0px; width: 100%" src="{{asset('cover/it_software.png')}}" alt="" width="200px">
            @else
                <img style="border-radius: 50px; width: 100%" 
                     src="{{asset('uploads/cover')}}/{{Auth::user()->company->cover_photo}}" 
                     alt="" width="100" height="300">
            @endif
        </div>
        <div class="company-desc"> 
            <br>
            {{-- <img src="{{asset('avatar/shopee.png')}}" alt="" width="100"> --}}
            @if (empty(Auth::user()->company->logo))
                <img style="border-radius: 50px; " src="{{asset('avatar')}}/{{$company->logo}}" alt="" width="200px">
            @else
                <img style="border-radius: 50px; " 
                     src="{{asset('uploads/avatar')}}/{{Auth::user()->company->logo}}" 
                     alt="" width="100" height="200">
            @endif

            <h1>{{$company->cname}}</h1>
            <p>{{$company->description}}</p>
            <p><b>Slogan :</b> &nbsp; {{$company->slogan}}</p>
            <p><b>Address :</b> &nbsp; {{$company->address}}</p>
            <p><b>Contact :</b> &nbsp; {{$company->phone}}</p>
            <p><b>Website :</b> &nbsp; {{$company->website}}</p>
            </p>
        </div>

        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            @foreach($company->jobs as $job)    
                <tr>
                    <td>
                        <img src="{{asset('avatar')}}/{{$job->job_image}}" alt="" width="80">
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
                        <button class="btn btn-success btn-sm">Apply</button>
                        </a>
                    </td>
                </tr>
            @endforeach()
            </tbody>
        </table>

    </div>
</div>
@endsection
