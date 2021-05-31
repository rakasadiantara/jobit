@extends('layouts.app')

@section('content')
<div class="container">
    <!-- jumbrotron -->
    <div class="jumbotron jumbotron-fluid ">
        <div class="container1">
            <div class="rounded bg-transparent">
                <h1 class="">Discover Your Dream Job!</h1>
            </div>
            {{-- <div class="row rounded bg-white mr-auto align-baseline">
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control text-center border-0 rounded-left" placeholder="Job Search" aria-label="Job Search" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn btn-primary rounded-right" type="button" id="button-addon2" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="rounded bg-white">
                <div class="input-group mb-3">
                    <input type="text" class="form-control text-center border-0 rounded-left" placeholder="Job Search" aria-label="Job Search" aria-describedby="button-addon2">
                    <button class="btn btn btn-primary rounded-right" type="button" id="button-addon2" style="background-color : #114386;">
                        Search
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                    <div class="input-group-append">
                        <button class="btn btn btn-primary rounded-right" type="button" id="button-addon2" style="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div> --}}
            <div>
                <search-component></search-component>
            </div>
            <div>
                <button class="btn btn-link text-center"><a class="text-light" href="{{route('alljobs')}}">Browse All Jobs</a></button>
            </div>
            {{-- <div class="input-group ">
                <search-component></search-component>
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary ">Search</button>
            </div> --}}
            {{-- <div class="row">
                <div class="col">
                    <h1>
                        Discover Your Dream Job!
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control text-center border-0 rounded-left" placeholder="Job Search" aria-label="Job Search" aria-describedby="button-addon2">
                        </div>
                        <div class="col col-lg-2 btn btn-primary">
                            <a href="" class="text-light">
                                Search
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        
    </div>
    <!-- akhir Jumbrotron -->        
    {{-- <div class="row"> --}}
        {{-- <div class="col-md-12">
            <br>
            <search-component></search-component>
            <br>
        </div> --}}
        <!-- Akhir Artikel -->
        {{-- <br><br><br>       
        <h1>Recent Jobs</h1>
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
                    <a href="{{route('jobs.show', [$job->id, $job->slug])}}">
                        <img src="{{asset('avatar/shopee.png')}}" alt="" width="80">
                    </a>
                    </td>
                    <td>
                        
                        <a class="text-decoration-none text-dark" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                            <h3>{{$job->position}}</h3>
                        </a>
                        <br>
                        <h5>
                            <i class="fa fa-map-marker"></i>&nbsp;Address : {{$job->address}}
                        </h5>
                        <br>
                        <a class="text-decoration-none text-dark" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                            <i class="fa fa-clock"></i>&nbsp;{{$job->type}}
                        </a>
                        <br>
                        <i class="fa fa-calendar-check"></i>&nbsp;Date: {{$job->created_at->diffForHumans()}} <!--fungsi melihat tanggal dibuat dari kapan-->
                    </td>
                    <td>
                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}"> <!--Mengarahkan untuk menampilkan detail dari job  -->
                            <button class="btn btn-success btn-sm btn-outline-success">Apply</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div> --}}
    {{-- <div>
        <a href="{{route('alljobs')}}">
            <button style="width:100%" class="btn btn-warning">Browse All Jobs</button>
        </a>
    </div> --}}
    <div class="row py-5">
        <div class="col">
            <h3 class="display-4 fontrek">Rekomendasi Pekerjaan</h3>
            <p class="lead fontmini">Rekomendasi pekerjaan yang mungkin cocok dengan anda?</p>
            @foreach($jobs as $job)  
                <div class="card mb-3">
                    <div class="row no-gutters">
                      <div class="col-md-3 align-self-center text-center">
                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}">
                            <img src="{{asset('avatar')}}/{{$job->job_image}}" alt="" width="200px">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">
                            <a class="text-decoration-none" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                                {{$job->position}}
                            </a>
                          </h5>
                          <p class="card-text">{{$job->address}}</p>
                          <p class="card-text"><small class="text-muted"><i class="fa fa-clock"></i>&nbsp;{{$job->type}}</small></p>
                          <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-check"></i>&nbsp;Date: {{$job->created_at->diffForHumans()}}</small></p>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
            {{-- <table class="table table-hover">
                
                

                <tbody>
                @foreach($jobs as $job)    
                    <tr>
                        <td>
                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}">
                            <img src="{{asset('avatar/shopee.png')}}" alt="" width="80">
                        </a>
                        </td>
                        <td>
                            
                            <a class="text-decoration-none text-dark" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                                <h3>{{$job->position}}</h3>
                            </a>
                            <br>
                            <h5>
                                <i class="fa fa-map-marker"></i>&nbsp;Address : {{$job->address}}
                            </h5>
                            <br>
                            <a class="text-decoration-none text-dark" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                                <i class="fa fa-clock"></i>&nbsp;{{$job->type}}
                            </a>
                            <br>
                            <i class="fa fa-calendar-check"></i>&nbsp;Date: {{$job->created_at->diffForHumans()}} <!--fungsi melihat tanggal dibuat dari kapan-->
                        </td>
                        <td>
                            <a href="{{route('jobs.show', [$job->id, $job->slug])}}"> <!--Mengarahkan untuk menampilkan detail dari job  -->
                                <button class="btn btn-success btn-sm btn-outline-success">Apply</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>           --}}
        </div>
    </div>

    {{-- <div class="row-fluid ">
        <!-- my php code which uses x-path to get results from xml query. -->
        @foreach($jobs as $job)
            <div class="col-sm-4 ">
                <div class="card-columns-fluid">
                    <div class="card  bg-light" style = "width: 22rem; " >
    
                        <div class="card-body">
                            <a href="{{route('jobs.show', [$job->id, $job->slug])}}" class="align-self-center mr-3">
                                <img src="{{asset('avatar/shopee.png')}}" alt="" width="80">
                            </a>
                            <div class="card-body">
                            <h5 class="card-title">
                                <span class="d-inline-block text-truncate" style="max-width: 200px;">
                                    <a class="text-decoration-none text-dark" href="{{route('jobs.show', [$job->id, $job->slug])}}">
                                        <p>{{$job->position}}</p>
                                    </a>
                                </span>
                                
                            </h5>
                            <p class="card-text">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                        </svg>
                                    </div>
                                    <div class="col">
                                        {{$job->address}}
                                    </div>
                                </div>
                            </p>
                            </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                        </svg>
                                    </div>
                                    <div class="col">
                                        {{$job->type}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                        </svg>
                                    </div>
                                    <div class="col">
                                        {{$job->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                            </ul>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <a href="{{route('jobs.show', [$job->id, $job->slug])}}" class="align-self-center mr-3"> <!--Mengarahkan untuk menampilkan detail dari job  -->
                                            <button class="btn btn-success btn-sm btn-outline-success">Apply</button>
                                        </a>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div> --}}

    {{-- <div class="row">
        <div class="col">
          <h3 class="display-4 fontrek">Kategori Pekerjaan</h3>
          <p class="lead fontmini">Discover jobs that best match your interest</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/system.png" style="width:100%">
                <div class="caption">
                  <br>
                  <P><B>IT SUPPORT</B></P>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/itsupport.png" style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>UI/UX DESIGNER</b></p>
                  <br>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/mobile.png"  style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>UI/UX DESIGNER</b></p>
                  <br>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/web.png"  style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>IT SUPPORT</b></p>
                  <br>
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/network.png" style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>IT SERVICE</b></p>
                  <br>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/UI.png" alt="Nature" style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>IT SUPPORT</b></p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/UX.png" alt="Fjords" style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>UI/UX DESIGNER</b></p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail img">
                <img class="imgrekomendasi" src="{{url('asset/avatar/')}}/cloud.png" alt="Fjords" style="width:100%">
                <div class="caption">
                  <br>
                  <p><b>UI/UX DESIGNER</b></p>
                </div>
              </a>
            </div>
          </div>
        </div>
    </div> --}}
    <div class="container">
        <h3 class="display-4 fontrek">Rekomendasi Perusahaan</h3>
        <p class="lead fontmini">Rekomendasi perusahaan yang mungkin cocok dengan anda?</p>
        <div class="row">
        @foreach ($companies as $company)
            <div class="col-md-3">
                <div class="card" style="width: 17rem;">
                    <a href="{{route('company.index', [$company->id, $company->slug])}}"><img class="card-img-top" src="{{asset('avatar')}}/{{$company->logo}}" alt="{{$company->cname}}"></a>
                    <div class="card-body">
                        <a href="{{route('company.index', [$company->id, $company->slug])}}"><h5 class="card-title text-truncate">{{$company->cname}}</h5></a>
                      <p class="card-text">{{str_limit($company->description, 20)}}</p>
                      <a href="{{route('company.index', [$company->id, $company->slug])}}" class="btn btn-primary" style="background-color : #114386;">Visit Company</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="container pt-5">
        <h3 class="display-4 fontrek">Artikel Terbaru</h3>
        <p class="lead fontmini">Artikel yang mungkin cocok untuk anda</p>
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="thumbnail ">
                    <img class="imgrekomendasi" src="{{asset('interest/artikel1.png')}}" style="width:100%">
                    <P><B>Rebranding guide : Cara Sukses Rebranding di Tahun 2021 dengan Mudah</B></P>
                    <div class="caption">
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail ">
                    <img class="imgrekomendasi" src="{{asset('interest/artikel2.png')}}" style="width:100%">
                    <div class="caption">
                      <p><b>Google Meet Segera Beri Opsi Baru untuk Kita Memulai Rapat</b></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail ">
                    <img class="imgrekomendasi" src="{{asset('interest/artikel3.png')}}"  style="width:100%">
                    <div class="caption">
                      <p><b>Procreate Tips : Cara Membuat dan Sesuaikan Brush Procreate</b></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
