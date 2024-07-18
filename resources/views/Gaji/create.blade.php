@extends('layout.main')

@section('title_page','Gaji')
@section('title','Gaji')
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
                            <h2>Buat Gaji</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('gaji.index',$user->id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="Gaji" action="{{ route('gaji.store') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gaji" maxlength="100" required value="{{$gaji->gaji}}">
                                        <label class="form-label">Nominal</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        
                                        <select class="form-control show-tick" name="bulan" id="bulan" required >
                                            <option value="">-- Pilih Bulan --</option>
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
                                                <input type="number" class="form-control" name="tahun" maxlength="4" required value="{{ date('Y') }}">
                                                <label class="form-label">Tahun</label>
                                            </div>
                                            <div class="help-info">Max. 4 characters</div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
