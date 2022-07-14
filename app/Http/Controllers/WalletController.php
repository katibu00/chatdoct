<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack;




class WalletController extends Controller
{
    public function index(){
        return view('finance.wallet');
    }


    public function redirectToGateway(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'phone' => 'required'
        ]);


        try {
            $paystack = new Paystack();

            // $keep = new PurchasePin();
            // $keep->first_name = $request->first_name;
            // $keep->last_name = $request->last_name;
            // $keep->phone = $request->phone;
            // $keep->email = $request->email;
            // $keep->save();

            $request->email = $request->email;
            $request->amount = $request->amount * 100;
            $request->reference = $paystack->genTranxRef();
            $request->key = config('paystack.secretKey');



            return $paystack->getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            Toastr::error('Something went wrong. Please try again', 'warning');
            return redirect()->back();
        }
    }





    public function handleGatewayCallback()

    {
        $paystack = new Paystack();

        $paymentDetails = $paystack->getPaymentData();

        
// dd($paymentDetails);

        if ($paymentDetails['data']['status'] == 'success') {

           

            // $data['email'] = $paymentDetails['data']['customer']['email'];
            // $data['ref'] = $paymentDetails['data']['reference'];
            // $data['amount'] = $paymentDetails['data']['amount'];
            // $data['status'] = $paymentDetails['data']['status'];
            // $data['paid_at'] = $paymentDetails['data']['paid_at'];

       
            $user_id = Auth::user()->id;
            $amount = $paymentDetails['data']['amount']/100;

            $payment = new Payment();
            $payment->user_id = $user_id;
            $payment->amount = $amount;
            $payment->ref = $paymentDetails['data']['reference'];
            $payment->save();

            $user = User::findorFail($user_id);
            $user->balance = $user->balance + $amount;
            $user->update();

            Toastr::success('Payment made Successfully', 'Done');
            return redirect()->route('wallet');


        }
    }
}
