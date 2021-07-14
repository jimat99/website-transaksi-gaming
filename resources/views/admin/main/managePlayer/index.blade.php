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
                        @foreach ($listPlayer as $player)
                            <tr>
                                <td>{{ $player->username }}</td>
                                <td class="text-center">
                                    @if ($player->status == 1)
                                        <li class="btn btn-sm btn-success disabled">Active</li>
                                    @else
                                        <li class="btn btn-sm btn-danger disabled">Inactive</li>
                                    @endif                                    
                                </td>
                                <td class="text-center">
                                    {{ $player->cash }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.player.edit', ['id' => $player->id_player]) }}" class="btn btn-sm btn-success"><i class="bi bi-pen-fill text-green"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection