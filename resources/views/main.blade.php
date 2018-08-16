@extends('layouts.header')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 garage">
                <a href="{{url('garage')}}">Garage</a>
            </div>
            <div class="col-md-6 user">
                <a href="{{url('user')}}">User</a>
            </div>
        </div>
    </div>
@endsection
