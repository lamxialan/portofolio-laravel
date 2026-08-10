@extends('layouts.app')

@section('content')
    <x-navbar :profile="$profile" />
    
    <main class="pt-36 sm:pt-40 pb-20 bg-black min-h-screen">
        <x-projects :projects="$projects" />
    </main>
    
    <x-footer :profile="$profile" />
@endsection
