@extends('index')
@section('title', 'Add - Pre-Qualification')

@section('main_container')
@include('components.header')
@include('components.sidebar')
    @vite(['resources/js/prequalification/prequalification.js'])

    <div class="container-style">
        <header>
            Pre-Qualification Add
        </header>



        <div class="card" style="height: 100vh">
            <div class="card-body" style="height: 100vh">
                {{-- <iframe src="https://tumbler.tracon.co.id/form-answer/pre-qualification-update/{{ $crypt_email }}/{{ $crypt_last_login }}" name="iframe" style="width: 100%; height: 100%"></iframe> --}}
                <iframe src="http://localhost:5174/form-answer/pre-qualification-update/{{ $crypt_email }}/{{ $crypt_last_login }}" name="iframe" style="width: 100%; height: 100%"></iframe>
            </div>
        </div>

    </div>
@endsection