@extends('main')

@section('title', 'Edulevel')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Program</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Program</a></li>
                    <li class="#">Data</i></li>
                    <li class="#">Detail</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail Program</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('program')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">    
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 30%">Jenjang</th>
                                <td>{{$program->edulevel->name}}</td>
                            </tr>
                            <tr>
                                <th>Nama Sekolah</th>
                                <td>{{$program->name}}</td>
                            </tr>
                            <tr>
                                <th>Harga Uang Gedung</th>
                                <td>{{$program->student_price}}</td>
                            </tr>
                            <tr>
                                <th>Maksimal Murid </th>
                                <td>{{$program->student_max}}</td>
                            </tr>
                            <tr>
                                <th>Informasi</th>
                                <td>{{$program->info}}</td>
                            </tr>
                            <tr>
                                <th>Created at</th>
                                <td>{{$program->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection