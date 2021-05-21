@extends('layouts.app')

@section('title', 'Dashboard Player')

@section('content')
    @if (Session::has('username'))
        <div class="alert alert-success">
            <strong>Login Sukses</strong><br><br>
                <ul>
                    <li>Selamat datang {{ Session::get('username') }}</li>
                    <li>Selamat datang {{ Session::get('role') }}</li>
                </ul>
        </div>
    @else
        
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="/logout" title="Logout">Logout</a>
            </div>
        </div>
    </div>
@endsection