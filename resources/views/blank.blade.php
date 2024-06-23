@extends('layout.main_front')

@section('title_page','SI Inventori')
@section('title','Tempat')
@section('content')
                <div class="row clearfix">
					@forelse($tempat as $data)
                  
                
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="card">
							<div class="header bg-red">
								<h2>
									{{ $data->nama }} <small>{{ $data->alamat }}</small>
								</h2>
								<ul class="header-dropdown m-r-0">
									<li>
										<a href="/backend">
											<i class="material-icons">arrow_forward</i>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
					@empty
                    	<div class="alert alert-danger">
                       		Data belum Tersedia.
                    	</div>
                	@endforelse  
				</div>
            
@endsection