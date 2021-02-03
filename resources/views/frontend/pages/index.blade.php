@extends('frontend/layout/master')

@section('content')
<img src="{{ asset('img/DA.png') }}" alt="Daniel AKONO" class="mt-12 rounded shadow-md h-32">
<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from quebec</h1>
<p class="text-lg text-gray-800">Its current {{date('h:m:A')}} PM.</p>
@endsection