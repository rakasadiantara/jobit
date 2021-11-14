@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="card">

                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">

                    <p>
                        <h3>Description</h3>
                        {{$job->description}}
                    </p>
                    <p>
                        <h3>Duties</h3>
                        {{$job->roles}}
                    </p>
                </div>
            </div>
        </div>        
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
                    <p>Company: <a href="{{route('company.index', [$job->company->id, $job->company->slug])}}">
                        {{$job->company->cname}}
                        </a> 
                    </p>
                    <p>Adddress: {{$job->address}}</p>
                    <p>Job Position: {{$job->position}}</p>
                    <p>Type: {{$job->type}}</p>
                    <p>Estimates: {{$job->last_date}}</p>                    
                </div>
            </div>
            @if (Auth::user()->user_type== 'seeker')                    <!--Agar yang sudah login saja muncul button applynya khusus seeker--> 
            @if (!$job->checkApplication())                    {{-- Agar user hanya bisa apply 1 pekerjaan--}}
            {{-- <form action="{{route('jobs.apply', [$job->id])}}" method="POST">
                @csrf
                <button style="width: 100%" class="btn btn-warning">Apply</button>
            </form> --}}
            <div class="py-2"></div>
                <apply-component :jobid={{$job->id}}> </apply-component>
            @endif
            <div class="py-2"></div>
                <favorite-component :jobid={{$job->id}} :faborited={{$job->checkSaved() ? 'true':'false'}}> </favorite-component>
            @endif

        </div>
    </div>
</div>
@endsection