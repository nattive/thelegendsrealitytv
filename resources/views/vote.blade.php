@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($contestants as $contestant)
        <div class="col-md-4">
            <div class="card shadow contestant-card">
                <a class="cardlink" href="{{ route('Contestant.index',$contestant -> id)}}">
                    <img class=" card-img-top " src="/storage/{{ $contestant -> image }}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title border-bottom pb-3"> <span class="text-dark"> Name:
                        </span><br>{{ $contestant -> name }}
                        {{-- <a href="#"
                            class="float-right d-inline-flex share"><i class="fa fa-share-alt text-primary"></i></a> --}}
                    </h5>
                    <p>
                        <span class="card-text">{{ $contestant -> Ocupation ?? $contestant -> gender }}</span> |
                        <span class="card-text"> {{ $contestant -> location }}.</span>
                    </p>
                    <input type="hidden" name="id" value="{{ $contestant -> id }}">
                    <button data-toggle="modal" data-target="#exampleModalCenter"
                        class="btn btn-lg btn-info btn-block">Vote</button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Vote for
                                        {{ $contestant -> name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    @csrf
                                    @method('POST')
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">contestant Name: </label>
                                        <input id="cc-pament" name="cc-payment" type="text" class="form-control"
                                            disabled value="{{ $contestant -> name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="vote" class="control-label mb-1">Number of Votes: </label>
                                        <select name="cc-vote" id="cc-vote" class="form-control"> Number of Votes
                                            <option value="none" selected disabled> Select</option>
                                            <option value="50">1 Vote for ₦50</option>
                                            <option value="3000">20 Votes for ₦3000</option>
                                            <option value="5000">40 Votes for ₦5000</option>
                                            <option value="10000">100 Votes for ₦10,000</option>
                                            <option value="20000">250 Votes for ₦20,000</option>
                                            <option value="40000">550 Votes for ₦40,000</option>
                                            <option value="100000">1,200 Votes for ₦100,000</option>
                                            <option value="200000">2,500 Votes for ₦200,000</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Name</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                            data-valmsg-replace="true"></span>
                                    </div>
                                    <div>
                                        <form action="{{ route('pay') }}" method="post" novalidate="novalidate">
                                            <input type="hidden" name="email" value="otemuyiwca@gmail.com">
                                            {{-- required --}}
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" id="amount" name="amount" value="">
                                            <input type="hidden" name="metadata"
                                                value="{{ json_encode($array = ['id' => $contestant -> id,]) }}">
                                            <input type="hidden" name="reference"
                                                value="{{ Unicodeveloper\Paystack\Facades\Paystack::genTranxRef() }}">
                                            {{-- required --}}
                                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                                            {{-- required --}}
                                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                                            <button id="payment-button" type="submit"
                                                class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Pay</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endsection