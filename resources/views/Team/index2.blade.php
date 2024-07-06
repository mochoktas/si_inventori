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
                        <div class="body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Nama Anggota</th>
                                        <th>Nama Tempat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($team as $data)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>
                                            - {{ $data->user1->nama }}
                                            <br>
                                            - {{ $data->user2->nama }}
                                        </td>
                                        <td>{{ $data->tempat->nama }}</td>
                                        <td>
                                            <form action="{{ route('team.destroy', $data->team_id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('team.edit', $data->team_id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                            </form>
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
@endsection