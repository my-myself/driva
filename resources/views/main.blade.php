@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{url('garage')}}">Garage</a>
            </div>
            <div class="col-md-6">
                <a href="{{url('user')}}">User</a>
            </div>
        </div>
    </div>
@endsection
