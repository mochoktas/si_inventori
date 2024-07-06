@extends('layout.main')

@section('title_page','Team')
@section('title','Team')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Buat Team</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('team.index2',$tempat->tempat_id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="Team" action="{{ route('team.store') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="100" required value="{{ old('nama') }}">
                                        <label class="form-label">Nama Team</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" name="user1" id="user1" required >
                                            <option value="">-- Pilih Anggota --</option>
                                            @foreach ($user as $data)
                                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control show-tick" name="user2" id="user2" required>
                                            <option value="">-- Pilih Anggota --</option>
                                            @foreach ($user as $data)
                                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="tempat_id" value="{{$tempat->tempat_id}}">
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
