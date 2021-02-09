@extends('layouts.main_layout')
@section('title') Home @endsection
@section('main_content')

    @guest
        <h1 class="text-muted text-center">Please login to book one of our services</h1>
    @endguest

    <table class="table table-secondary table-hover">
        <thead>
        <tr>
            <th scope="col">Service</th>
            <th scope="col">Price</th>
            @auth
            <th scope="col"> </th>
            @endauth
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
        <tr>
            <td>{{$service->name}}</td>
            <td>£{{$service->price}}</td>
            @auth
            <div class="align-content-between">
                <td><a class="btn btn-outline-primary fw-bold float-end mx-3" href="{{ route('book') }}?id={{$service->id}}">Book</a></td>
            </div>
            @endauth
        @endforeach

        </tbody>
    </table>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus consequuntur doloremque eos est excepturi expedita explicabo fugiat harum itaque mollitia, obcaecati optio quasi quidem quis recusandae soluta veniam veritatis?</p>

@endsection


