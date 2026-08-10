@extends('layouts.app')

@section('content')
    <x-navbar :profile="$profile" />
    
    <!-- Hero Section -->
    <x-hero :profile="$profile" :stats="$stats" />
    
    <!-- About Section -->
    <x-about :about="$about" :stats="$stats" />
    
    <x-footer :profile="$profile" />
@endsection
