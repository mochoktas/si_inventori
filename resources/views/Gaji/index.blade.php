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
                                Data Gaji {{$user->nama}}
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
                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">
                                <i class="material-icons">print</i>
                            </button>
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
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Print Gaji {{$user->nama}}</h4>
                        </div>
                        <div class="modal-body">
                            <form id="Gaji" action="{{ route('gaji.print') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="">Start : </label>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        
                                        <select class="form-control show-tick" name="bulan1" id="bulan" required >
                                            <option value="01" {{ (date("m") == "01" ) ? "selected" : "" }}>Januari</option>
                                            <option value="02" {{ (date("m") == "02" ) ? "selected" : "" }}>Februari</option>
                                            <option value="03" {{ (date("m") == "03" ) ? "selected" : "" }}>Maret</option>
                                            <option value="04" {{ (date("m") == "04" ) ? "selected" : "" }}>April</option>
                                            <option value="05" {{ (date("m") == "05" ) ? "selected" : "" }}>Mei</option>
                                            <option value="06" {{ (date("m") == "06" ) ? "selected" : "" }}>Juni</option>
                                            <option value="07" {{ (date("m") == "07" ) ? "selected" : "" }}>Juli</option>
                                            <option value="08" {{ (date("m") == "08" ) ? "selected" : "" }}>Agustus</option>
                                            <option value="09" {{ (date("m") == "09" ) ? "selected" : "" }}>September</option>
                                            <option value="10" {{ (date("m") == "10" ) ? "selected" : "" }}>Oktober</option>
                                            <option value="11" {{ (date("m") == "11" ) ? "selected" : "" }}>November</option>
                                            <option value="12" {{ (date("m") == "12" ) ? "selected" : "" }}>Desember</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="tahun1" maxlength="4" required value="{{ date('Y') }}">
                                                <label class="form-label">Tahun</label>
                                            </div>
                                            <div class="help-info">Max. 4 characters</div>
                                        </div>
                                    </div>
                                </div>
                                <label for="">End : </label>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        
                                        <select class="form-control show-tick" name="bulan2" id="bulan" required >
                                            <option value="01" {{ (date("m") == "01" ) ? "selected" : "" }}>Januari</option>
                                            <option value="02" {{ (date("m") == "02" ) ? "selected" : "" }}>Februari</option>
                                            <option value="03" {{ (date("m") == "03" ) ? "selected" : "" }}>Maret</option>
                                            <option value="04" {{ (date("m") == "04" ) ? "selected" : "" }}>April</option>
                                            <option value="05" {{ (date("m") == "05" ) ? "selected" : "" }}>Mei</option>
                                            <option value="06" {{ (date("m") == "06" ) ? "selected" : "" }}>Juni</option>
                                            <option value="07" {{ (date("m") == "07" ) ? "selected" : "" }}>Juli</option>
                                            <option value="08" {{ (date("m") == "08" ) ? "selected" : "" }}>Agustus</option>
                                            <option value="09" {{ (date("m") == "09" ) ? "selected" : "" }}>September</option>
                                            <option value="10" {{ (date("m") == "10" ) ? "selected" : "" }}>Oktober</option>
                                            <option value="11" {{ (date("m") == "11" ) ? "selected" : "" }}>November</option>
                                            <option value="12" {{ (date("m") == "12" ) ? "selected" : "" }}>Desember</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="tahun2" maxlength="4" required value="{{ date('Y') }}">
                                                <label class="form-label">Tahun</label>
                                            </div>
                                            <div class="help-info">Max. 4 characters</div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                
                            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">Print</button>
                            </form>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection