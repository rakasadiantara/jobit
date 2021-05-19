@extends('layouts.main')

@section('title', "Daftar Pekerjaan")
@section('container')
<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}">
<br>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Pekerjaan</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>yofikaaudrey</td>   
                          <td>yofika98</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>yofikaaudrey</td>   
                          <td>yofika98</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>yofikaaudrey</td>   
                          <td>yofika98</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>yofikaaudrey</td>   
                          <td>yofika98</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>yofikaaudrey</td>   
                          <td>yofika98</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection