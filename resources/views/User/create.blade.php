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
                                        <input type="text" class="form-control" name="nama" maxlength="100" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email_pribadi" maxlength="255" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="help-info">Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" maxlength="255" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                    <div class="help-info">Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jobdesk" maxlength="100" required>
                                        <label class="form-label">Jobdesk</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="data_yang_kurang" maxlength="100" required>
                                        <label class="form-label">Data Yang Kurang</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pendidikan" maxlength="25" required>
                                        <label class="form-label">Pendidikan</label>
                                    </div>
                                    <div class="help-info">Max. 25 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nik_ta" maxlength="10" required>
                                        <label class="form-label">NIK TA</label>
                                    </div>
                                    <div class="help-info">Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempat_lahir" maxlength="100" required>
                                        <label class="form-label">Tempat Lahir</label>
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
                                <div class="row clearfix">
                                    <div class="col-xs-3">
                                        <h2 class="card-inside-title">Tanggal Lahir</h2>
                                        <div class="form-group">
                                            <div class="form-line" id="bs_datepicker_container">
                                                <input type="text" class="form-control" placeholder="Please choose a date..." name="tgl_lahir">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3"></div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_kk" maxlength="16" required>
                                        <label class="form-label">No KK</label>
                                    </div>
                                    <div class="help-info">Max. 16 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_ktp" maxlength="16" required>
                                        <label class="form-label">No KTP</label>
                                    </div>
                                    <div class="help-info">Max. 16 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_hp_teknisi" maxlength="15" required>
                                        <label class="form-label">No HP Teknisi</label>
                                    </div>
                                    <div class="help-info">Max. 15 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_hp_keluarga" maxlength="15" required>
                                        <label class="form-label">No HP Keluarga</label>
                                    </div>
                                    <div class="help-info">Max. 15 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_keluarga_yang_bisa_dihubungi" maxlength="100" required>
                                        <label class="form-label">Nama Keluarga Yang Bisa Dihubungi</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_ibu" maxlength="100" required>
                                        <label class="form-label">Nama Ibu</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-xs-3">
                                        <h2 class="card-inside-title">Tanggal Masuk</h2>
                                        <div class="form-group">
                                            <div class="form-line" id="bs_datepicker_container">
                                                <input type="text" class="form-control" placeholder="Please choose a date..." name="tgl_masuk">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3"></div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bpjs_ketenagakerjaan" maxlength="11" required>
                                        <label class="form-label">BPJS Ketenagakerjaan</label>
                                    </div>
                                    <div class="help-info">Max. 11 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bpjs_kesehatan" maxlength="13" required>
                                        <label class="form-label">BPJS Kesehatan</label>
                                    </div>
                                    <div class="help-info">Max. 13 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="merk_kendaraan" maxlength="25" required>
                                        <label class="form-label">Merk Kendaraan</label>
                                    </div>
                                    <div class="help-info">Max. 25 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nopol_kendaraan" maxlength="25" required>
                                        <label class="form-label">Nopol Kendaraan</label>
                                    </div>
                                    <div class="help-info">Max. 25 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="baju" maxlength="10" required>
                                        <label class="form-label">Baju</label>
                                    </div>
                                    <div class="help-info">Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="sepatu" required>
                                        <label class="form-label">Sepatu</label>
                                    </div>
                                    <div class="help-info">Number</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="celana" required>
                                        <label class="form-label">Celana</label>
                                    </div>
                                    <div class="help-info">Number</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="crew_id" maxlength="10" required>
                                        <label class="form-label">Crew ID</label>
                                    </div>
                                    <div class="help-info">Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="labourcode" maxlength="10" required>
                                        <label class="form-label">Labourcode</label>
                                    </div>
                                    <div class="help-info">Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="telegram_id" maxlength="15" required>
                                        <label class="form-label">Telegram ID</label>
                                    </div>
                                    <div class="help-info">Max. 15 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" maxlength="25" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                    <div class="help-info">Max. 25 characters</div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="role" id="male" class="with-gap" value="0">
                                    <label for="male">Admin</label>

                                    <input type="radio" name="role" id="female" class="with-gap" value="1">
                                    <label for="female" class="m-l-20">User</label>
                                </div>
                                <input type="hidden" name="tempat_id" value="{{$tempat->tempat_id}}">
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection