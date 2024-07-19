@extends('layout.main')

@section('title_page','STO')
@section('title','STO')
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
                            <h2>Buat STO</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('tempat.index') }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="tempat" action="{{ route('tempat.store') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="100" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" maxlength="100" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                        <label class="form-label">Foto</label>
                                        <input type="file" name="image" id="image" accept="image/*" required>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection