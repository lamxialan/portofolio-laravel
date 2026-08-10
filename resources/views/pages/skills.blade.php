@extends('layouts.app')

@section('content')
    <x-navbar :profile="$profile" />
    
    <main class="pt-28 pb-20 bg-black min-h-screen">
        <x-skills :skills="$skills" />
    </main>
    
    <x-footer :profile="$profile" />
@endsection
