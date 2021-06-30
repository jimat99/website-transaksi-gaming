@extends('admin/layouts/app')
@section('content')
<div class="container-fluid mt--6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="mb-0">Items</h3>
            <a href="{{route('item.create')}}" class="btn btn-primary btn-sm">Add Item</a>
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
                        <tr>
                            <td>Valk Manteau</td>
                            <td class="text-center">
                                <img src="{{asset('images/item/manteau.png')}}" class="custompicture" alt="">
                            </td>
                            <td>A set of shining white armor worn by Valkyries, the battle maidens that serve the god
                                Odin.
                                All Stats + 1
                                Indestructible (except in upgrade attempts).
                                [Mage, Archer, Acolyte Class]
                                Increase resistance to Silence status by 50%.
                                [Swordman, Merchant, Thief Class]
                                Increase resistance to Stun status by 50%.
                                [Valkyrie Helm & Valkyrja's Armor & Valkyrja's Manteau & Valkyrja's Shoes Equip Set]

                                More Information on Combo:
                                Valkyrian Armor[1] , Valkyrian Shoes[1] , Valkyrian Manteau[1] & Valkyrie Helm[1]
                            </td>
                            <td class="text-center">
                                40.000
                            </td>
                            <td class="text-center  ">
                                <a href="#" class="btn btn-sm btn-success"><i class="bi bi-pen-fill text-green"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash2-fill text-red"></i></a>
                            </td>

                        </tr>

                        <tr>
                            <td>Valk Armor</td>
                            <td class="text-center">
                                <img src="{{asset('images/item/armor.png')}}" class="custompicture" alt="">
                            </td>
                            <td>A manteau that is worn by the Valkyries, Odin's battle maidens.
                                Indestructible (except in upgrade attempts).

                                [Mage, Archer, Acolyte Class]
                                Perfect Dodge + 5
                                Increases Perfect Dodge by (upgrade level*2).

                                [Swordman, Merchant, Thief Class]
                                Reflect 5% melee damage back to enemies.
                                Increases percentage reflect damage by (upgrade level*2).

                                [Valkyrie Helm & Valkyrja's Armor & Valkyrja's Manteau & Valkyrja's Shoes Equip Set]

                                More Information on Combo:
                                Valkyrian Armor[1] , Valkyrian Shoes[1] , Valkyrian Manteau[1] & Valkyrie Helm[1]
                            </td>
                            <td class="text-center">
                                50.000
                            </td>
                            <td class="text-center">
                                <a href="{{route('item.edit')}}" class="btn btn-sm btn-success"><i
                                        class="bi bi-pen-fill text-green"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash2-fill text-red"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection