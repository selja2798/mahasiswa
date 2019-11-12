@extends('layout/main');

@section('header')
   @stop
@section('kepo')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-f luid">
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
                                    <img src="{{$siswa->getAvatar()}}" width="130" class="img-circle" alt="avatar">
                                    <h3 class="name">{{$siswa->nama_lengkap()}}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                            {{$siswa->makul->count()}} <span>Mata Pelajaran</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            {{$siswa->rataRataNilai()}}<span>Rata-Rata Nilai</span>
                                        </div>
                                        <div class="col-md-4 stat-item">{{$siswa->falkutas}}<span>Falkutas</span>
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
                                        <li>Jenis Kelamin <span>{{$siswa->jenis_kelamin}}</span></li>
                                        <li>Agama <span>{{$siswa->agama}}</span></li>
                                        <li>Alamat <span>{{$siswa->alamat}}</span></li>

                                    </ul>
                                </div>

                                <div class="text-center"><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Tambah Nilai
                            </button>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mata Pelajaran</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>KODE</th>
                                            <th>NAMA</th>
                                            <th>SEMESTER</th>
                                            <th>NILAI</th>
                                            <th>GURU</th>
                                            <th>AKSI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($siswa->makul as $makul)
                                            <tr>
                                                <td>{{$makul->kode}}</td>
                                                <td>{{$makul->nama}}</td>
                                                <td>{{$makul->semester}}</td>
                                                {{--                                               <td><a href="#" class="semester" data-type="text" data-pk="{{$makul->id}}" data-url="/api/siswa{{$siswa->id}}/editsemester" data-title="Enter username">{{$makul->semester}}</a></td>--}}
                                                <td><a href="#" class="nilai" data-type="text" data-pk="{{$makul->id}}" data-url="/api/siswa{{$siswa->id}}/editnilai" data-title="Enter nilai">{{$makul->pivot->nilai}}</a></td>
                                                <td><a href="/guru/{{$makul->guru_id}}/profile">{{$makul->guru->nama}}</a></td>
                                                <td><a href=#"" class="btn btn-danger btn-sm deletnilai"  siswa-id="{{$siswa->id}}">Delete</a>
                                                </td>
                                                @endforeach
                                            </tr>
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
  <script>

  </script>
@stop
