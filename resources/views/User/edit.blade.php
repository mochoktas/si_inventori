@extends('layout.main')

@section('title_page','User')
@section('title','User')
@section('content')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit User</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('user.index2',$user->tempat_id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="user" action="{{ route('user.update',$user->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" max="100" required value="{{ $user->nama }}">
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" max="255" >
                                        <label class="form-label">password</label>
                                    </div>
                                    <div class="help-info">Max. 255 characters</div>
                                </div>
                                
                                
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>          
@endsection