@php
$user = auth()->user();
@endphp
@extends('main')
@section('content')
        <x-navbar :user="$user"/>
        <x-aside isAdmin="{{$user->is_admin}}" />
        <main class="content">
                @yield('home-content')
        </main>
@endsection
@section('scripts')
<script src="{{asset('js/dropdown.js')}}"></script>
<script src="{{asset('js/modal.js')}}"></script>
<script src="{{asset('js/login.js')}}"></script>
@endsection