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
								<li>
									<a href="{{ route('gaji.create', $user->id) }}">
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
                                        <th>Tanggal</th>
                                        <th>Gaji</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($gaji as $data)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ date("M-Y",strtotime($data->tanggal_gaji)) }}</td>
                                        <td>{{ $data->gaji }}</td>
                                        <td>
                                            <form action="{{ route('gaji.destroy', $data->gaji_id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('gaji.edit', $data->gaji_id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

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