@extends('scroller')

@section('checkpoint')
	<div class="row no-gutters checkpoint">
		<div class="col">
			<div class="left-image">
				<!--<img src="http://lorempixel.com/500/500">-->
				<img src="{{ $leftImage }}">
				
			</div>
		</div>
		<div class="col-6 col-xs-12">
			<div class="content">
				<div class="title">
					<!--Title-->
					{{ $title }}
					
				</div>
				<div class="description">
					<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.-->
					{{ $description }}
					
				</div>
			</div>
		</div>
		<div class="col">
			<div class="right-image">
				<!--<img src="http://lorempixel.com/500/500">-->
				<img src="http://lorempixel.com/500/500">
			</div>
		</div>
	</div>
@endsection