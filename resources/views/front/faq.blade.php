@extends('layouts.front')

@section('title', (($leng == 'eng') ? "FAQS" : "Preguntas Frecuentes"))

@section('content')
	<section>
		<section>
			<div class="bg-global">
				<div class="col-12 p-4" style="background-color: black; color: white;">
					<div class="d-inline" style="font-size:24px;color: white;">Preguntas Frecuentes</div>
				</div>
			</div>
		</section>

		<div class="container my-4 p-5" style="min-height:55vh">
	    	<div class="container">
	        	<div class="row">
	            	<div class="col-xxl-11 col-xl-11 col-lg-11 col-md-11 col-sm-12 col-xl-12 col-12 mx-auto rounded">
	                	@foreach($preguntas as $faq)
	                    	<div class="row bg-dark rounded">
	                        	<div class="col">
	                            	<h2 class="text-white text-center">
	                                	{{ $faq->pregunta }}
		                            </h2>
		                        </div>
	    	                </div>
	        	            <div class="row">
	            	            <div class="col text-white py-2" style="background-color: #3378C6;">
	                	            <strong>{!! $faq->respuesta !!}</strong>
	                    	    </div>
	                	    </div>
	            	    @endforeach
	        	    </div>
	    	    </div>
		    </div>
	
		</div>
	</section>				

@endsection

@section('jsLibExtras2')
@endsection

@section('jqueryExtra')
<script type="text/javascript">
</script>
@endsection
