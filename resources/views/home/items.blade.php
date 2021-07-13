@extends('layouts/app')
@section('content')
<div class="container mx-auto">
    <div class="d-flex justify-content-between">
        <div class="row row-cols-3 mt-5 mb-5 mx-auto">
            <div class="col-sm">
                <div class="card mt-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/item/armor.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Valkyrie Armor</h5>
                        <p class="card-text">Rp. 20.000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card mt-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/item/armor.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Valkyrie Armor</h5>
                        <p class="card-text">Rp. 20.000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card mt-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/item/armor.png')}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Valkyrie Armor</h5>
                        <p class="card-text">Rp. 20.000</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection