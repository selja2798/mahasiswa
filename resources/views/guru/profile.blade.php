@extends('layout/main');

@section('header')
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop
@section('kepo')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                <div class="panel panel-profile">
                    <div class="clearfix">
                        <!-- LEFT COLUMN -->
                        <div class="profile-left">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="overlay"></div>
                                <div class="profile-main">
                                    <img src="{{$guru->getAvatarguru()}}" width="130" class="img-circle" alt="avatar">
                                    <h3 class="name">{{$guru->nama}}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>

                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-6 stat-item">
                                            {{$guru->makul->count()}} <span>Mata Kuliah</span>
                                        </div>
                                        <div class="col-md-6 stat-item">
                                            {{$guru->tlpn}}<span>No Tlp</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading">Data diri</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Jenis Kelamin <span>{{$guru->jenis_kelamin}}</span></li>
                                        <li>Agama <span>{{$guru->agama}}</span></li>
                                        <li>Alamat <span>{{$guru->alamat}}</span></li>

                                    </ul>
                                </div>

                                <div class="text-center"><a href="/guru/{{$guru->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mata Pelajaran yang di ajar oleh Dosen {{$guru->nama}}</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>NAMA</th>
                                            <th>SEMESTER</th>
                                            <th><AKSI></AKSI></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($guru->makul as $makul)
                                            <tr>
                                               <td>{{$makul->nama}}</td>
                                               <td>{{$makul->semester}}</td>
                                                <td>
                                                    <a href="#"  class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger btn-sm deletnilai"  siswa-id="">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel">
                                <div id="chartNilai"></div>
                            </div>
                        </div>
                        <!-- END RIGHT COLUMN -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>



    <!-- Modal -->

    @stop

@section('footer')

@stop
