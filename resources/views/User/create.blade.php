@extends('layout.main')

@section('title_page','User')
@section('title','User')
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
                            <h2>Buat User</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('user.index2',$tempat->tempat_id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="User" action="{{ route('user.store') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" max="100" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email_pribadi" max="255" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="help-info">Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" max="255" required>
                                        <label class="form-label">Passwrod</label>
                                    </div>
                                    <div class="help-info">Max. 255 characters</div>
                                </div>
                                <input type="hidden" name="tempat_id" value="{{$tempat->tempat_id}}">
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection