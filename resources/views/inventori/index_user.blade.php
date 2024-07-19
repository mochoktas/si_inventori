@extends('layout.main')

@section('title_page','Inventori')
@section('title','')
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
                                Data Inventori {{ $team->nama }}
                            </h2>
                            <ul class="header-dropdown m-r-0">
								
                                
							</ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Kondisi</th>
                                        <th>Serial Number</th>
                                        <th>Merk</th>
                                        <th>Tahun Pembelian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($inventori as $data2)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $data2->barang->nama }}</td>
                                        <td bgcolor="{{ ($data2->kondisi == "Rusak") ? "Red" : "" }}" >{{ $data2->kondisi }}</td>
                                        <td>{{ $data2->sn }}</td>
                                        <td>{{ $data2->merk }}</td>
                                        <td>{{ $data2->tahun_pembelian }}</td>
                                        
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
