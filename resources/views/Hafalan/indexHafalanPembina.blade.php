@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Hafalan Al-Qur'an</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a>Hafalan Al-Qur'an dan Hadist</a></li>
                                        <li><a>Record Hafalan Siswa</a></li>
                                        <li class="active">Data table</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>    
    <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tabel Nama Siswa</strong>
                            </div>
                            <div class="card-body">
                                <br>
                                <!-- DATA AMALAN -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="table-tengah">
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_user as $user)
                                        <tr>
                                        <td>{{$user->siswa['NIS']}}</td>
                                        <td>
                                                <a href="/profile/{{$user->id}}/view">{{$user->nama}}</a> 
                                        </td>
                                        <td>{{$user->siswa['kelas']}}</td>
                                        <td>
                                            <a href="hafalan-pembina/{{$user->id}}">
                                                <button type="button" class="btn btn-primary">View</button>
                                            </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- END OF DATA SISWA -->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- ./animated -->
    <!-- ./content -->
    <div class="clearfix">
        
    </div>
@endsection