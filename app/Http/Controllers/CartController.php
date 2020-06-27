<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Exceptions\InvalidConditionException;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Darryldecode\Cart\Helpers\Helpers;
use Darryldecode\Cart\Validators\CartItemValidator;
use Darryldecode\Cart\Exceptions\UnknownModelException;
use App\product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function addToCart( Request $request){
      $product = product:: find ($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => $request->qty,
            'attributes' => array( // attributes field is optional
                'image' => $product->product_image
            )

        ]);
       return redirect('/show');

    }
    public function showCart()
    {
        $CartProducts= Cart::getContent();
       // return $CartProducts;
       return view('front-end.cart.show-cart',compact('CartProducts'));

    }
    public function delete($id)
    {
        Cart::remove($id);
        return redirect('/show') ;
           }
    public function updateCart(Request $request)
    {
        Cart::update($request->id, array(
            'quantity' => $request->quantity,
        ));
        return redirect('/show') ;

    }
}
