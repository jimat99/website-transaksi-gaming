@extends('layouts.app')

@section('title', 'Dashboard Player')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('login.logout') }}" title="Logout">Logout</a>
            </div>
            <div class="pull-right alert alert-info" style="margin-right: 20px; padding-bottom: 7px; padding-top: 7px;">
                Cash: {{ $player->cash }}
            </div>
        </div>
    </div>
    @if (session()->has('username'))
        <div class="alert alert-success">
            <strong>Login Sukses</strong><br><br>
                <ul>
                    <li>Selamat datang {{ session()->get('username') }}</li>
                    <li>Selamat datang {{ session()->get('role') }}</li>
                </ul>
        </div>
    @endif
@endsection