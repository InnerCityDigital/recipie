@extends('layouts.master')

@section('content')


		<h2 class="text-xl">{{ $recipe->title }}</h2>
		<p> {{ $recipe->body }} </p>

		<a class="mt-5 block" href="/">Go Back</a>


@endsection