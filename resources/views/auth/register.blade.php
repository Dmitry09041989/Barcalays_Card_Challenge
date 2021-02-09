@extends('layouts.main_layout')
@section('title') Register @endsection
@section('main_content')



    <div class=" w-50 mx-auto">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input name="email" type="email" class="form-control  @error('email') border-danger border-3 @enderror" id="email"  placeholder="Your Email" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input name="name" type="text" class="form-control @error('name') border-danger border-3 @enderror" id="name" placeholder="Your Name" value="{{old('name')}}">
                @error('surname')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input name="surname" type="text" class="form-control @error('surname') border-danger border-3 @enderror" id="surname" placeholder="Your Surname" value="{{old('surname')}}">
                @error('surname')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">address</label>
                <input name="address" type="text" class="form-control @error('address') border-danger border-3 @enderror" id="address" placeholder="Your Address" value="{{old('address')}}">
                @error('address')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">City</label>
                <input name="city" type="text" class="form-control @error('city') border-danger border-3 @enderror" id="city" placeholder="Your City" value="{{old('city')}}">
                @error('city')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">County</label>
                <input name="county" type="text" class="form-control @error('county') border-danger border-3 @enderror" id="county" placeholder="County" value="{{old('county')}}">
                @error('county')
                <div class="text-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Postcode</label>
                <input name="postcode" type="text" class="form-control @error('postcode') border-danger border-3 @enderror" id="postcode" placeholder="Your Postcode IE: XX11YY" value="{{old('postcode')}}">
                @error('postcode')
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
            </div>
            <div class="mb-3">
                <label for="inputPasswordRepeat" class="form-label @error('password') border-danger border-3 @enderror">Repeat Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="inputPasswordRepeat" placeholder="Repeat password">
            </div>
            @error('password')
            <div class="text-danger my-2">
                {{ $message }}
            </div>
            @enderror
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
