@extends('layouts/app')
@section('content')
<div class="container mx-auto">
    <div class="d-flex justify-content-between">
        <div class="row row-cols-3 mt-5 mb-5 mx-auto">
            @foreach ($listItem as $item)
            <div class="col-lg">
                <form action="{{ route('home.buy-item.buy-item') }}" method="post">
                    @csrf

                    <input type="hidden" name="id_item" value="{{ $item->id_item }}">
                    <div class="card mt-5" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $item->path_gambar) }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">{{ $item->harga }}</p>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Buy</button>
                                <!-- <a href="{{ route('home.buy-item.buy-item') }}" class="btn btn-primary">Buy</a> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

@if (Session::has('message'))
    <script>alert("{{ Session::get('message') }}");</script>
@endif
@endsection