@extends('layouts.main_layout')
@section('title') Sign-in @endsection
@section('main_content')

    <div class=" w-50 mx-auto">
        @if(session('status'))
            <div class="text-danger ">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input name="email" type="email" class="form-control  @error('email') border-danger border-3 @enderror" id="email" aria-describedby="email" placeholder="Your Email" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputPassword" class="form-label @error('password') border-danger border-3 @enderror" >Password</label>
                <input name="password"  type="password" class="form-control" id="inputPassword" placeholder="Password">
                @error('password')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <button name="login" type="submit" class="btn btn-primary mt-3">Log In</button>
            </div>



@endsection
