@extends('layouts.main_layout')

@section('main_content')

    <div class=" w-50 mx-auto">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Your Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input name="surname" type="text" class="form-control" id="surname" placeholder="Your Surname">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label" >Password</label>
                <input name="password"  type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="inputPasswordRepeat" class="form-label">Repeat Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="inputPasswordRepeat" placeholder="Repeat password">
            </div>
{{--            <div class="mb-3 form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--            </div>--}}
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
