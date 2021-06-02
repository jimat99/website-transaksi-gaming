@extends('layouts/app')

@section('content')

<div class="donatecontainer mx-auto">
    <div class="container">
        <div class="row text-center mb-5 mt-5">
            <div class="col">
                <h1 class="serverinformation">How To Donate</h1>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col">
                <ol class="descriptionserver">
                    <li class="mb-3">Donation is not mandatory.
                        Purchasing Donation Coupons does not give you any special treatment nor any privileges as a
                        normal
                        player. You however, will be given with Donation Coupons + Supply Points. These donations will
                        help
                        us stabilize our server and for the server's needs to maintain our server we thank you in
                        advance.
                    </li>
                    <li class="mb-3">Equipment, items, and headgears
                        in the Donation Manager NPC will all be purchased using Donation Coupons, while supplies can
                        only be
                        obtained with Supply Points.
                    </li>
                    <li class="mb-3">Donators purchasing items shall
                        provide legit personal information to assure a smooth transaction. Unless otherwise, a
                        termination/breach of any transaction.</li>
                    <li class="mb-3">If you however, failed to follow
                        our server Rules and Regulations, donators have no privilege at all cost and shall be punished.
                    </li>
                    <li class="mb-3">Lending is not an option. Full
                        payment must be given before receiving the Donation Coupons and Supply Points.</li>
                    <li class="mb-3">Furthermore, there will be NO
                        REFUNDs at all cost, so please make sure to think about it before donating.
                        If you somehow lost all your purchased items, we have no obligation of returning them as your
                        items
                        are your own responsibility.</li>
                    <li class="mb-3">Lastly, keep in mind that we have the right to refuse your service depending on the
                        circumstances. So please we encourage everyone to please keep a respect for us and as we do so
                        as well.
                    </li>
                    <li class="mb-3">We only take and provide donation payment through BCA Transfer bank. you can make a
                        payment with BCA from this account number below.
                    </li>
                    </ul>
            </div>
            <div class="row text-center">
                <div class="col">
                    <img src="{{asset('images/bca.png')}}" alt="" class="herobca">
                </div>
            </div>
            <div class="row mt-3 mx-auto">
                <div class="col-8 transfer mx-auto">
                    <p class="">Rekening Account: 01238461763176376125 a/n Rudi Tabuti</p>
                    <p>Note: after you did transfer the money please
                        send us the payment slip to our Whatsapp: +62 856-0860-5432</p> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection