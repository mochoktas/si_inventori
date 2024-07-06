@extends('layout.main')

@section('title_page','Team')
@section('title','Team')
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
                                Data Team
                            </h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('team.create', $tempat->tempat_id) }}">
										<i class="material-icons">add</i>
									</a>
								</li>
                                
							</ul>
                        </div>
                        
                    </div>
                </div>
            
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
                                    <a href="{{ route('team.index2', $data->team_id) }}">
                                        <i class="material-icons">add</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('team.index2', $data->team_id) }}">
                                        <i class="material-icons">add</i>
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