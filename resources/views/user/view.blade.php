@extends('layouts.main')

@section('title', "Daftar User")
@section('container')
<link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}">
<br>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar User</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Location</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Yofika</td>   
                          <td>yofikaaudreyy@gmail.com</td>
                          <td>085655547877</td>
                          <td>Surabaya</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Yofika</td>   
                          <td>yofikaaudreyy@gmail.com</td>
                          <td>085655547877</td>
                          <td>Surabaya</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Yofika</td>   
                          <td>yofikaaudreyy@gmail.com</td>
                          <td>085655547877</td>
                          <td>Surabaya</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Yofika</td>   
                          <td>yofikaaudreyy@gmail.com</td>
                          <td>085655547877</td>
                          <td>Surabaya</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Yofika</td>   
                          <td>yofikaaudreyy@gmail.com</td>
                          <td>085655547877</td>
                          <td>Surabaya</td>
                          <td><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection