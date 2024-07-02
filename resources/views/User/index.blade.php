@extends('layout.main')

@section('title_page','User')
@section('title','Pilih Tempat')
@section('content')
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
            <div class="row clearfix">
                @forelse($tempat as $data)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{$data->nama}}
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="{{ route('user.index2', $data->tempat_id) }}">
                                        <i class="material-icons">add</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            {{$data->alamat}}
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                       	Data belum Tersedia.
                    </div>
                @endforelse  
            </div>
@endsection