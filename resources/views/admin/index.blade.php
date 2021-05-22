@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    @if (session()->has('username'))
        <div class="alert alert-success">
            <strong>Login Sukses</strong><br><br>
                <ul>
                    <li>Selamat datang {{ session()->get('username') }}</li>
                    <li>Selamat datang {{ session()->get('role') }}</li>
                </ul>
        </div>
    @endif     

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('login.logout') }}" title="Logout">Logout</a>
            </div>
        </div>
    </div>
@endsection