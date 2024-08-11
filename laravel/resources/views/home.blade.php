@php
$user = auth()->user();
@endphp
@extends('main')
@section('content')
        <x-navbar :user="$user"/>
        <x-aside isAdmin="{{$user->is_admin}}" />
        <main class="w-full mt-[100px] ml-52 p-5 z-0">
                @yield('home-content')
        </main>
@endsection
@section('scripts')
<script src="{{asset('js/dropdown.js')}}"></script>
<script src="{{asset('js/modal.js')}}"></script>
@endsection