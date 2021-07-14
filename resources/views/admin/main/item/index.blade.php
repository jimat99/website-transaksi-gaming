@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="mb-0">Items</h3>
            <a href="{{route('admin.item.create')}}" class="btn btn-primary btn-sm">Add Item</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Picture</th>
                            <th>Desc</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listItem as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/' . $item->path_gambar) }}" class="custompicture" alt="">
                                </td>
                                <td>{{ $item->deskripsi }}</td>
                                <td class="text-center">{{ $item->harga }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.item.edit', ['id' => $item->id_item]) }}" class="btn btn-sm btn-success"><i class="bi bi-pen-fill text-green"></i></a>

                                    <form action="{{ route('admin.item.destroy', ['id' => $item->id_item]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash2-fill text-red"></i></button>
                                    </form>
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