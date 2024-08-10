@php
$user = auth()->user();
@endphp

@extends('main')
@section('content')
        <x-navbar nome="{{$user->name}}"/>
        <x-aside isAdmin="$user->is_admin" />
        <main class="content">
                @yield('home-content')
        </main>
@endsection
@section('scripts')
@endsection