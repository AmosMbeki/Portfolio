@extends('layout')

@section('content')

  <!--  Home -->
  <x-home-collapse :skills="$skills" />

  <!--  Projects -->
  <x-projects-collapse :projects="$projects" />

  <!--  Experiences -->
  <x-experience-collapse :experiences="$experiences" />

  <!--  Contact -->
  <x-contact-collapse />
    
@endsection