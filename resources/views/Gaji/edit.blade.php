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
                            <h2>Edit Gaji</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('gaji.index',$gaji->user_id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="Gaji" action="{{ route('gaji.update',$gaji->gaji_id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
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
                                            <option value="01" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "01" ) ? "selected" : "" }}>Januari</option>
                                            <option value="02" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "02" ) ? "selected" : "" }}>Februari</option>
                                            <option value="03" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "03" ) ? "selected" : "" }}>Maret</option>
                                            <option value="04" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "04" ) ? "selected" : "" }}>April</option>
                                            <option value="05" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "05" ) ? "selected" : "" }}>Mei</option>
                                            <option value="06" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "06" ) ? "selected" : "" }}>Juni</option>
                                            <option value="07" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "07" ) ? "selected" : "" }}>Juli</option>
                                            <option value="08" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "08" ) ? "selected" : "" }}>Agustus</option>
                                            <option value="09" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "09" ) ? "selected" : "" }}>September</option>
                                            <option value="10" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "10" ) ? "selected" : "" }}>Oktober</option>
                                            <option value="11" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "11" ) ? "selected" : "" }}>November</option>
                                            <option value="12" {{ (date("m",strtotime($gaji->tanggal_gaji)) == "12" ) ? "selected" : "" }}>Desember</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="tahun" maxlength="4" required value="{{ date('Y',strtotime($gaji->tanggal_gaji)) }}">
                                                <label class="form-label">Tahun</label>
                                            </div>
                                            <div class="help-info">Max. 4 characters</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
