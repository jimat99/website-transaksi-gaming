@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    @if (Session::has('username'))
        <div class="alert alert-success">
            <strong>Login Sukses</strong><br><br>
                <ul>
                    <li>Selamat datang {{ Session::get('username') }}</li>
                    <li>Selamat datang {{ Session::get('role') }}</li>
                </ul>
        </div>
    @endif     

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="/logout" title="Logout"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
@endsection