@php
$user = auth()->user();
@endphp
@extends('main')
@section('content')
        <x-navbar nome="{{$user->name }}" email="{{$user->email}}" contato="{{$user->contato}}"/>
        <x-aside isAdmin="{{$user->is_admin}}" />
        <main class="content">
                @yield('home-content')
        </main>
@endsection
@section('scripts')
<script src="{{asset('js/dropdown.js')}}"></script>
@endsection