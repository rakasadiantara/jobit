@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Auth::user()->user_type=='seeker')
                <h3 class="fontrek">Saved Jobs</h3>
                @foreach ($jobs as $job)
                <div class="pt-3"></div>
                    <div class="card">
                        <div class="card-header">{{$job->title}}</div>

                        <div class="card-body">
                            {{-- @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif 
                            You are logged in! --}}
                            {{$job->description}}
                        </div>
                        
                        <div class="card-footer">
                            <span>
                                <a href="{{route('jobs.show', [$job->id, $job->slug])}}">Read More</a>
                            </span>
                            <span class="float-right">
                                {{$job->last_date}}
                            </span>
                        </div>
                    </div> 
                
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
