@extends('layouts.app')

@section('content')
    <x-navbar :profile="$profile" />
    <x-hero :profile="$profile" :stats="$stats" />
    <x-about :about="$about" />
    <x-skills :skills="$skills" />
    <x-projects :projects="$projects" />
    <x-contact :profile="$profile" />
    <x-footer :profile="$profile" />
@endsection
