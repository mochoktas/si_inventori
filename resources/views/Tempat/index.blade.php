@extends('layout.main')

@section('title_page','Tempat')
@section('title','Tempat')
@section('content')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Tempat
                            </h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('tempat.create') }}">
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
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($tempat as $data)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>
                                            <form action="{{ route('tempat.destroy', $data->tempat_id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('tempat.edit', $data->tempat_id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

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