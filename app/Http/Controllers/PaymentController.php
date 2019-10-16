<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contestant;
use App\Http\Controllers\Controller;
//use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $vote = 0;
        $paymentDetails = Paystack::getPaymentData();
        $pay = $paymentDetails['data']['amount'];
        $pay /= 100;
        switch ($pay){
            case 50:
            $vote = 1;
            break;
        }
        switch ($pay){
            case 3000:
            $vote = 20;
            break;
        }
        switch ($pay){
            case 5000:
            $vote = 40;
            break;
        }
        switch ($pay){
            case 10000:
            $vote = 100;
            break;
        }
        switch ($pay){
            case 20000:
            $vote = 250;
            break;
        }
        switch ($pay){
            case 40000:
            $vote = 550;
            break;
        }
        switch ($pay){
            case 100000:
            $vote = 1200;
            break;
        }
        switch ($pay){
            case 200000:
            $vote = 2500;
            break;
        }

        $contestant_id = $paymentDetails['data']['metadata']['id'];
        $contestant = Contestant::find($contestant_id);
        $contestant-> votes += $vote;
        $contestant->save();
        return redirect()->route('Contestant.index', $contestant_id);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
