@extends('layout.main')

@section('title_page','Gaji')
@section('title','Gaji')
@section('content')
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Gaji
                            </h2>
                            <ul class="header-dropdown m-r-0">
								
							</ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Gaji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($gaji as $data)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ date("M-Y",strtotime($data->tanggal_gaji)) }}</td>
                                        <td>{{ $data->gaji }}</td>
                                        
                                    </tr>
                                    @empty
                    	                <div class="alert alert-danger">
                       		                Data belum Tersedia.
                    	                </div>
                	                @endforelse  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection