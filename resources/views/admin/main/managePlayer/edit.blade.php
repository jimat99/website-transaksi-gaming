@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <form action="{{ route('admin.player.update', ['id' => $player->id_player]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h3 class="mb-0">Edit Player</h3>
                    <a href="{{ route('admin.player.index') }}" class="btn btn-outline-success btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
            <div class="card-body p-5">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Player Name <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="username" required placeholder="Player Name" readonly value="{{ $player->username }}">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Status <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <select class="form-control" id="" name="status">
                            <option value="1" @if ($player->status == 1) {{ 'selected' }} @endif>Active</option>
                            <option value="0" @if ($player->status == 0) {{ 'selected' }} @endif>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Cash <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="cash" required placeholder="Cash" value="{{ $player->cash }}">
                    </div>

                </div>
            </div>

            <div class="card-footer mt-2">
                <div class="text-end">
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Edit</button>
                </div>
            </div>

        </div>

    </form>
</div>
@endsection