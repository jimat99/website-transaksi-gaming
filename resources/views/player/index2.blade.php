@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Laravel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customer.create') }}" title="Create a project"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $customer->nama }}</td>
                <td>
                    <form action="{{ route('customer.destroy', $customer->id_customer) }}" method="POST">

                        <a href="{{ route('customer.show', $customer->id_customer) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('customer.edit', $customer->id_customer) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection