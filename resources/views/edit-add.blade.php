@extends('voyager::master')


@section('content')

	<div id="app">
		<?php dd($poll->questions->first()->answers); ?>
		<poll-creator url="{{ url('/') }}" edit_poll="{{ json_encode($poll) }}"></poll-creator>
	</div>
	
@endsection

@section('javascript')
	<script>
		<?php include(base_path('hooks/voyager-polls/app.js')); ?>
	</script>
@endsection