@extends('frontend/layout/master')

@section('content')
<img src="{{ asset('img/DA.png') }}" alt="Daniel AKONO">
<h1>Hello from quebec</h1>
<p>Its current {{date('h:m:A')}} PM.</p>
@endsection