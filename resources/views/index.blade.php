@extends('layouts.master')

@section('content')

	@foreach($recipies as $recipe)

	<article class="p-10 mb-3 max-w-md mx-auto bg-white rounded-xl shadow-lg">

		<a href="/recipe/{{ $recipe->id }}"><h3 class="hover:underline text-lg no-underline mb-2 font-bold underline"> {{ $recipe->title }} </h3></a>

		<p class="text-gray-700 mb-4"> {{ $recipe->body }} </p>

		<p class="text-sm"><b>Category: </b> <a class="text-blue-500" href="">{{ $recipe->category->title }}</a></p>

	</article>

	@endforeach

@endsection