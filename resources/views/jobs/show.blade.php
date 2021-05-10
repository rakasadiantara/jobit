@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <p>Company: {{$job->company->cname}}</p>
                    <p>Adddress: {{$job->address}}</p>
                    <p>Job Position: {{$job->position}}</p>
                    <p>Estimates: {{$job->last_date}}</p>                    
                </div>
            </div>
            @if (Auth::check()) <!--Agar yang sudah login saja muncul button applynya --> 
            <button style="width: 100%" class="btn btn-warning">Apply</button>
            @endif
        </div>
    </div>
</div>
@endsection