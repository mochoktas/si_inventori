@extends('layout.main')

@section('title_page','Inventori')
@section('title','Pilih Team')
@section('content')
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
            <div class="row clearfix">
                
            
                @forelse($team as $data)
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{$data->nama}}
                                <small>
                                    {{$data->tempat->nama}}
                                </small>
                            </h2>
                            <ul class="header-dropdown m-r-0">
                                <li>
                                    <a href="{{ route('inventori.index3', $data->team_id) }}">
                                        <i class="material-icons">info</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            {{$data->user1->nama}}
                            <hr>
                            {{$data->user2->nama}}
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