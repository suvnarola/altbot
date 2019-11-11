<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Robot;
use App\User;
use Illuminate\Http\Request;
use Artme\Paysera\Facades\Paysera;

class PaymentController extends Controller
{
    public function paymentInfo(Request $request)
    {
        $request = Paysera::parsePayment($request);
        $user_id = \Auth::user()->id;
        $data = json_decode($_COOKIE['data']);
        $data = json_decode(json_encode($data), True);
        $data['user_id'] = $user_id;
        $cookie = \Cookie::forget('data');
        if ($request['requestid']) {
            if ($payment = Payment::where('transaction_id', $request['requestid'])->first()) {
                $payment_id = $payment->id;
            } else {
                $payment = new Payment;
                $payment->user_id = $user_id;
                $payment->item_number = '0';
                $payment->amount = $request['amount'];
                $payment->transaction_id = $request['requestid'];
                $payment->currency_code = $request['currency'];
                $payment->payment_status = $request['status'];
                $payment->save();
                $payment_id = $payment->id;
                Robot::create($data);
                $user = User::find($user_id);
                \Mail::send('emails.payment', $data, function ($message) use ($data, $user) {
                    $message->subject('Purchase Notification');
                    $message->to($user->email);
                });
            }
            return  redirect('/dashboard')->with('status', 'Success');
        } else {
            return 'Payment has failed';
        }
    }

    public function callback(Request $request)
    {
        $request = Paysera::parsePayment($request);
        $user_id = \Auth::user()->id;

        if ($request['requestid']) {
            echo 'OK';
        } else {
            return 'Payment has failed';
        }
    }

    public function paysera()
    {
        $call =  \Artisan::call('config:clear');
        // dd($call);
        $p = Paysera::makePayment('0', '199');
    }
}
