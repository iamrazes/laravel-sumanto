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
                    <img src="{{ asset('sumanto-logo/sumanto-white2.png') }}" class="img-circle mb-2" style="height:180px;"
                        alt="">
                    <div class="pb-2 pt-3">
                        {{-- <h1 class="text-xxl text-bold">SUMANTO</h1> --}}
                        <h2 class="text-sm">Sistem untuk Manajemen dan Transaksi Offline</h2>
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
    <div class="wrapper">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 100vh; object-fit: cover; opacity: .6;"
                        src="{{ asset('sumanto-carousel/pexels-anna-shvets-3962294.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="text-shadow: 0 0 10px #000;">
                        <h2>Doing transaction like never before</h2>
                        <p>Transaction are made easy for efficieny</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 100vh; object-fit: cover; opacity: .6;"
                        src="{{ asset('sumanto-carousel/pexels-anna-tarazevich-5910951.jpg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="text-shadow: 0 0 10px #000;">
                        <h2>Superb managerial attribute</h2>
                        <p>Manage your products to the finest detail</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 100vh; object-fit: cover; opacity: .6;"
                        src="{{ asset('sumanto-carousel/pexels-jack-sparrow-4047286.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="text-shadow: 0 0 10px #000;">
                        <h2>Maximized security and Optimized product</h2>
                        <p>Theres no better feeling than secure, happy, and productive</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @endsection
