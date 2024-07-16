@extends('layout.main')

@section('title_page','Tempat')
@section('title','Tempat')
@section('content')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Tempat</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('tempat.index') }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="tempat" action="{{ route('tempat.update',$tempat->tempat_id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" maxlength="100" required value="{{ $tempat->nama }}">
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" maxlength="100" required value="{{ $tempat->alamat }}">
                                        <label class="form-label">Alamat</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                        <label class="form-label">Foto</label>
                                        <img src="{{ asset($tempat->image) }}" height="100" width="100"  alt="{{ $tempat->nama }}">
                                        <input type="file" name="image" id="image" accept="image/*">
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>          
@endsection