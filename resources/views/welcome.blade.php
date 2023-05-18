@extends('layouts.welcome')

@section('title')
<title>Welcome to SUMANTO</title>
@endsection


@section('sidebar')

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="d-flex justify-content-center vertical-center-sidebar">

        <div>
            <div class="text-center">
                <img src="{{asset('sumantologo.jpg')}}" class="img-circle mb-2" style="height:150px;" alt="">
                <!-- <span class="text-xl">SUMANTO</span> -->
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-2">
                    <input id="email" type="email" name="email" type="text" style="height: 40px;" class="rounded border-0 px-2 " placeholder="Email" autocomplete="off">
                </div>
                <div class="mt-2">
                    <input id="password" type="password" style="height: 40px;" class="rounded border-0 px-2" placeholder="Password" type="password" name="password">

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="mt-3">
                    <button class="btn btn-primary" style="width: 195px;">Login</button>
                </div>
            </form>


            <!-- <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3" style="width: 195px;">Dashboard</a> -->

        </div>
    </div>
</aside>
@endsection

@section('content')
@endsection
