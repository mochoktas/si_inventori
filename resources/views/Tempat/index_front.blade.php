@extends('layout.main_front')

@section('title_page','Monitoring Inventori')

@section('content')
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>INFO</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Team</th>
                                            <th>Status Peralatan</th>
                                            <th>Total Peralatan</th>
                                            <th>Persentase Kerusakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($arr as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td><span class="label {{ ($data->total == $data->saat_ini) ? "bg-green" : "bg-red" }}">{{ ($data->total == $data->saat_ini) ? "Aman" : "Ada Yang Rusak" }}</span></td>
                                            <td>{{$data->total}}</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar {{ ($data->total == $data->saat_ini) ? "bg-green" : "bg-red" }}" role="progressbar" aria-valuenow="{{$data->saat_ini}}" aria-valuemin="0" aria-valuemax="{{$data->total}}" style="width: {{($data->saat_ini)/($data->total)*100}}%"></div>
                                                </div>
                                            </td>
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
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-blue">
                            <div class="font-bold m-b--35">Top Peralatan Yang Rusak</div>
                            <ul class="dashboard-stat-list">
                                @forelse($barang as $data)
                                <li>
                                    {{$data->barang->nama}}
                                    <span class="pull-right"><b>{{$data->total}}</b> <small>Rusak</small></span>
                                </li>
                                @empty
                    	            <div class="alert alert-danger">
                       		            Data belum Tersedia.
                                    </div>
                	            @endforelse  
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
@endsection