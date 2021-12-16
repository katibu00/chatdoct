<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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

dd(123);

        if ($paymentDetails['data']['status'] == 'success') {

            $check = Card::where('email', $paymentDetails['data']['customer']['email'])->where('status','1')->get()->count();
            if($check == 0){

                $check = Card::where('status', 0)->first();
                $check->status = '1';
                $check->email = $paymentDetails['data']['customer']['email'];
                $check->update();

            }




            $card = Card::where('email', $paymentDetails['data']['customer']['email'])->where('status','1')->latest()->first();

            $data['pin'] = $card->PIN;
            $data['serial'] = $card->serial;
            $data['email'] = $paymentDetails['data']['customer']['email'];
            $data['ref'] = $paymentDetails['data']['reference'];
            $data['amount'] = $paymentDetails['data']['amount'];
            $data['status'] = $paymentDetails['data']['status'];
            $data['paid_at'] = $paymentDetails['data']['paid_at'];


            return view('payment.success',$data);
        }
    }
}
