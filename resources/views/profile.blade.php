@extends('layouts.app')

@section('content')

<div class="container">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle pull-right">
                                    <img alt="Image placeholder" src="{{asset('img/logo.jpg')}}">
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
            style="min-height: 600px; background-image: url(/storage/{{ $contestant -> image }}); background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
            <div class="container-fluid d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <h1 class="display-4 text-white">Vote {{ $contestant['name'] }}</h1>
                        <p class="text-white mt-0 mb-5">{{ $contestant['location'] }} | {{ $contestant['Occupation']  }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="/storage/{{ $contestant -> image }}" class="rounded-circle"
                                            width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            {{-- <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                            </div> --}}
                        </div>
                        <div class="card-body pt-0 pt-md-4">
                            <div class="row">
                                <div class="col">
                                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        <div>
                                            <span class="heading">{{ $contestant -> votes }}</span>
                                            <span class="description">Vote(s)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3>
                                    {{ $contestant -> name }}<span
                                        class="font-weight-light">{{ $contestant -> DOB }}</span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ $contestant -> location }}
                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{ $contestant -> occupation }}
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>{{ $contestant -> hobbies }}
                                </div>
                                <hr class="my-4" />
                                <p>{{ $contestant -> about }}</p>
                                <button data-toggle="modal" data-target="#exampleModalCenter"
                                    class="btn btn-lg btn-info btn-block">Vote</button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Vote for
                                                    {{ $contestant -> name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                @csrf
                                                @method('POST')
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">contestant Name:
                                                    </label>
                                                    <input id="cc-pament" name="cc-payment" type="text"
                                                        class="form-control" disabled value="{{ $contestant -> name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="vote" class="control-label mb-1">Number of Votes:
                                                    </label>
                                                    <select name="cc-vote" id="cc-vote" class="form-control"> Number of
                                                        Votes
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
                                                    <input id="cc-name" name="cc-name" type="text"
                                                        class="form-control cc-name">
                                                    <span class="help-block field-validation-valid"
                                                        data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div>
                                                    <form action="{{ route('pay') }}" method="post"
                                                        novalidate="novalidate">
                                                        <input type="hidden" name="email" value="otemuyiwca@gmail.com">
                                                        {{-- required --}}
                                                        <input type="hidden" name="orderID" value="345">
                                                        <input type="hidden" id="amount" name="amount" value="">
                                                        <input type="hidden" name="metadata"
                                                            value="{{ json_encode($array = ['id' => $contestant -> id,]) }}">
                                                        <input type="hidden" name="reference"
                                                            value="{{ Unicodeveloper\Paystack\Facades\Paystack::genTranxRef() }}">
                                                        {{-- required --}}
                                                        <input type="hidden" name="key"
                                                            value="{{ config('paystack.secretKey') }}">
                                                        {{-- required --}}
                                                        {{ csrf_field() }}
                                                        {{-- works only when using laravel 5.1, 5.2 --}}
                                                        <button id="payment-button" type="submit"
                                                            class="btn btn-lg btn-info btn-block">
                                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                            <span id="payment-button-amount">Pay</span>
                                                            <span id="payment-button-sending"
                                                                style="display:none;">Sending…</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-light shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">HOW TO VOTE</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        {{-- step one --}}
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-title border border-success p-2 m-4 text-center">
                                                    <h4>step one</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p>SELECT AMOUNT OF VOTE AND CURRENCY</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- step Two --}}
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-title border border-success p-2 m-4 text-center">
                                                    <h4>step two</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p>TRANSFER AMOUNT OF VOTE IN THE CURRENCY TO ANY OF THESE ACCOUNTS
                                                        LISTED BELOW</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- step three --}}
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-title border border-success p-2 m-4 text-center">
                                                    <h4>step three</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p>TEXT/WHATSAPP AMOUNT VOTED/NAME OF HOUSEMATE TO 07059097704</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                    </div>
                                </div>
                        </div>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-8">
                                    <div class="row align-items-center">
                                        <h3 class="mb-0 ml-3">VOTE CATEGORIES</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-6 m-2">
                                        <label class="form-control-label p-3"> Votes in Nigerian Naira</label>
                                        <select class="form-control m-2" name="" id="">
                                            <option value="">NGN50 FOR 1 VOTES</option>
                                            <option value="">NGN3000 FOR 20 VOTES</option>
                                            <option value="">NGN5000 FOR 40 VOTES</option>
                                            <option value="">NGN10,000 FOR 100 VOTES</option>
                                            <option value="">NGN20,000 FOR 250 VOTES</option>
                                            <option value="">NGN40,000 FOR 550 VOTES</option>
                                            <option value="">NGN100,000 FOR 1200 VOTES</option>
                                            <option value="">NGN200,000 FOR 2,500 VOTES</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 m-2">
                                        <label class="form-control-label p-3">Votes in United State Dollar</label>
                                        <select class="form-control" name="" id="">
                                            <option value=""> USD20 FOR 150 VOTES</option>
                                            <option value=""> USD50 FOR 450 VOTES</option>
                                            <option value="">USD100 FOR 750 VOTES</option>
                                            <option value="">USD300 FOR 2000 VOTES</option>
                                            <option value="">USD500 FOR 5000 VOTES</option>
                                            <option value="">USD1000 FOR 10,000 VOTES</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 m-2">
                                <label class="form-control-label p-3">Votes in United State Dollar</label>
                                <select class="form-control" name="" id="">
                                    <option value=""> EUR1 FOR 12 VOTES</option>
                                    <option value=""> EUR10 FOR 85 VOTES</option>
                                    <option value="">EUR20 FOR 175 VOTES</option>
                                    <option value="">EUR50 FOR 500 VOTES</option>
                                    <option value="">EUR100 FOR 800 VOTES</option>
                                    <option value="">EUR300 FOR 22O0 VOTES</option>
                                    <option value="">EUR500 FOR 5200 VOTES</option>
                                    <option value="">EUR1000 FOR 12,000 VOTES</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4 mb-4">
                                <label class="form-control-label p-3">Votes in United State Dollar</label>
                                <select class="form-control" name="" id="">
                                    <option value=""> £1 FOR 15 VOTES</option>
                                    <option value=""> £10 FOR 100 VOTES</option>
                                    <option value="">£20 FOR 200 VOTES</option>
                                    <option value="">£50 FOR 550 VOTES</option>
                                    <option value="">£100 FOR 900 VOTES</option>
                                    <option value="">£300 FOR 3000 VOTES</option>
                                    <option value="">£500 FOR 6000 VOTES</option>
                                    <option value="">£1000 FOR 15,000 VOTES</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection