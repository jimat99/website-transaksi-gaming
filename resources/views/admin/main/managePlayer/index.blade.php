@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="mb-0">Players</h3>
        </div>
        

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Player Name</th>
                            <th>Status</th>
                            <th>Cash</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Magnetism</td>
                            <td class="text-center">
                                <li class="btn btn-sm btn-success disabled">Active</li>
                            </td>
                            <td class="text-center">
                                0
                            </td>
                            <td class="text-center">
                                <a href="{{route('player.edit')}}" class="btn btn-sm btn-success"><i class="bi bi-pen-fill text-green"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Demit Kolor Polkadot</td>
                            <td class="text-center">
                                <li class="btn btn-sm btn-danger disabled">Inactive</li>
                            </td>
                            <td class="text-center">
                                0
                            </td>
                            <td class="text-center">
                                <a href="{{route('player.edit')}}" class="btn btn-sm btn-success"><i class="bi bi-pen-fill text-green"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection