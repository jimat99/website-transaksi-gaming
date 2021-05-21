@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="/register" title="Register">Register</a>
            </div>
            <div class="pull-right" style="margin-right: 20px;">
                <a class="btn btn-primary" href="/login" title="Login">Login</a>
            </div>
        </div>
    </div>

    <div class="alert alert-success" style="font-size: 20pt; text-align:center;">
        <strong>Selamat datang di RO</strong><br><br>
    </div> 
@endsection