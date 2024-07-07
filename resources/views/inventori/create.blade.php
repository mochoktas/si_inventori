@extends('layout.main')

@section('title_page','Inventori')
@section('title','Inventori')
@section('content')

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Buat Inventori {{ $team->nama }}</h2>
                            <ul class="header-dropdown m-r-0">
								<li>
									<a href="{{ route('inventori.index3', $team->team_id) }}">
										<i class="material-icons">close</i>
									</a>
								</li>
							</ul>
                        </div>
                        <div class="body">
                            <form id="inventori" action="{{ route('inventori.store') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label for="barang">Nama Barang</label>
                                        <select class="form-control show-tick" name="barang_id" id="barang_id" required >
                                            <option value="">-- Pilih Barang --</option>
                                            @foreach ($barang as $data)
                                            <option value="{{$data->barang_id}}">{{$data->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label for="kondisi">Kondisi</label>
                                        <select class="form-control show-tick" name="kondisi" id="kondisi" required >
                                            <option value="">-- Pilih Kondisi --</option>
                                            <option value="Baru">Baru</option>
                                            <option value="Aman">Aman</option>
                                            <option value="Rusak">Rusak</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sn" maxlength="100" >
                                        <label class="form-label">Serial Number</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="merk" maxlength="100" >
                                        <label class="form-label">Merk</label>
                                    </div>
                                    <div class="help-info">Max. 100 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tahun_pembelian" maxlength="4" >
                                        <label class="form-label">Tahun Pembelian</label>
                                    </div>
                                    <div class="help-info">Max. 4 characters</div>
                                </div>
                                <input type="hidden" name="team_id" value="{{$team->team_id}}">
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection