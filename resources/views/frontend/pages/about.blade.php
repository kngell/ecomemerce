@extends('frontend/layout/master')
<!-- Title -->
@section('title','About Us | ' . config('app.name'))
<!-- Content -->
@section('content')
<img src="{{ asset('img/consulting.png') }}" alt="Daniel AKONO">
<p>Built with &hearts;by les teachers du net</p>
<p><a href="{{route('app_home')}}">Revenir à la page d'accueil</a></p>
@endsection