@extends('layouts.welcome')

@section('title')
    <title>Welcome to SUMANTO</title>
@endsection


@section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <div class="d-flex justify-content-center vertical-center-sidebar">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />


            <div>
                <div class="text-center">
                    <img src="{{ asset('sumanto-logo/sumanto-white2.png') }}" class="img-circle mb-2" style="height:180px;" alt="">
                    <div class="pb-2 pt-3">
                        {{-- <h1 class="text-xxl text-bold">SUMANTO</h1> --}}
                        <h2 class="text-sm">Sistem Manajemen dan Transaksi Offline</h2>
                    </div>
                </div>

                </form>

                @auth
                    @if (Auth::user())
                        <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3" style="width: 195px;">Dashboard</a>
                    @endif
                @else
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-2">
                            <input id="email" type="email" name="email" type="text" style="height: 40px;"
                                class="rounded border-0 px-2 " placeholder="Email" autocomplete="off">
                        </div>
                        <div class="mt-2">
                            <input id="password" type="password" style="height: 40px;" class="rounded border-0 px-2"
                                placeholder="Password" type="password" name="password">

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-2 mt-2 text-sm" :errors="$errors" />

                            <div class="mt-3">
                                <button class="btn btn-primary" style="width: 195px;">Login</button>
                            </div>
                        @endauth

                    </div>
            </div>
    </aside>
@endsection

@section('content')
@endsection
