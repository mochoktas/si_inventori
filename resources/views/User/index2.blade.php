@extends('layout.main')

@section('title_page','User')
@section('title','User')
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
                                Data User
                            </h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('user.create', $tempat->tempat_id) }}">
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
                                        <th>Email Pribadi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($user as $data)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->email_pribadi }}</td>
                                        <td>
                                            <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('user.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

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