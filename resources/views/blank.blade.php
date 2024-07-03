@extends('layout.main_front')

@section('title_page','SI Inventori')

@section('content')
				
                
							<div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
									@forelse($tempat as $data)
                                    <div class="item {{($loop->iteration==1)? 'active':''}}">
										<div class="align-center">
											<a href="/backend">
                                        	<img src="{{asset($data->image)}}" height="800px"/>
											</a>
										</div>
                                        <div class="carousel-caption">
                                            <h3>{{$data->nama}}</h3>
                                            <p>{{$data->alamat}}</p>
                                        </div>
                                    </div>
                                    
									@empty
                    	                <div class="alert alert-danger">
                       		                Data belum Tersedia.
                    	                </div>
                	                @endforelse  
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
							
				
            
@endsection