<?php

namespace App\Http\Controllers;

use App\shipping;
use Illuminate\Http\Request;
use DB;
use App\customer;
use Mail;
use Session;
class CheckoutController extends Controller
{
    public function index(){
        return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
        $customer = new customer();
        $customer ->first_name = $request->first_name;
        $customer ->last_name = $request->last_name;
        $customer ->email_address = $request->email_address;
        $customer ->password =bcrypt($request->password);
        $customer ->phone_number = $request->phone_number;
        $customer ->address = $request->address;
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->frist_name.''.$customer->last_name);

        $data = $customer->toArray();

        Mail ::send('front-end.mail.confirmation-mail',$data,function ($message) use($data){
            $message->to($data['email_address']);
            $message->subject('Confirmation  mail');
        } );

        return redirect('/checkout/shipping');

    }
    public  function shippingForm(){

        return view ('front-end.checkout.shipping');
    }
    public  function saveShippingInfo(Request $request){
        $shipping =new shipping();
        $shipping->full_name=$request->full_name;
        $shipping->email_address=$request->email_address;
        $shipping->phone_number=$request->phone_number;
        $shipping->address=$request->address;
        $shipping->save();
        Session::put('shippingId',$shipping->id);
        return redirect('/chechout/payment');
    }
    public function paymentForm(){
        return view('front-end.checkout.payment');
    }
}
