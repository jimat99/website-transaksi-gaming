@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <form action="{{ route('admin.item.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h3 class="mb-0">Add Item</h3>
                    <a href="{{ route('admin.item.index') }}" class="btn btn-outline-success btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
            <div class="card-body p-5">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Item Name <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="nama" required  placeholder="Item Name">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Item Image <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="form-group inputDnD">
                                        <label class="sr-only" for="inputFile">File Upload</label>
                                        <input type="file" class="form-control-file text-primary font-weight-bold"
                                            id="inputFile" name="gambar" accept="image/*" onchange="readUrl(this)"
                                            data-title="Drag and drop a file">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Item Desc <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" placeholder="Item Desc"></textarea>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label col-form-label-sm text-lg-end text-sm-start">
                        <h4>Price <span class="text-danger">*</span></h4>
                    </label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" name="harga" required placeholder="Price">
                    </div>
                </div>
            </div>
            <div class="card-footer mt-2">
                <div class="text-end">
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection