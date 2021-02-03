@extends('frontend/layout/master')
<!-- Title -->
@section('title','About Us | ' . config('app.name'))
<!-- Content -->
@section('content')
<img src="{{ asset('img/consulting.png') }}" alt="Daniel AKONO" class="my-12 rounded-full shadow-md h-32">
<h2 class="text-gray-700 mb-5">Built with <span class="text-pink-500">&hearts;</span>by les teachers du net</h2>
<p><a href="{{route('app_home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection