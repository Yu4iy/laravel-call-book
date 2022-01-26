@extends('loyouts.main')

@section('content')
	<section class="call-book">
		<ol class="call-book__list">
			<div class="container">
			@foreach ($numbers as $number)
			<li class="call-book__item">
					<span class="call-book__id">{{$number->id}}</span>
					<span class="call-book__name">{{$number->name}}</span>
					<span class=call-book__phone><a href="tel:{{$number->phone}}">{{$number->phone}}</a></span>
					<span class="call-book__mail">{{$number->mail}}</span>
				</li>
				@endforeach
			</div>
			</ol>
	</section>
@endsection