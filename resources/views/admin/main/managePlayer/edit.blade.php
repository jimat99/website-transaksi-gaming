@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h3 class="mb-0">Add Item</h3>
                    <a href="{{route('player.index')}}" class="btn btn-outline-success btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
            <div class="card-body p-5">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Player Name <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" required name="" placeholder="Player Name" readonly>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Status <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <select class="form-control" id="" name="">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Cash <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" required name="" placeholder="Cash">
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