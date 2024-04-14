<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    ///Get function
    public function getByAccountId($accountId)
    {
        try {

            $cart = Cart::where('accountId', $accountId)->get();
            $data = [];
            //Check cart có dữ liệu hay không
            if (isset($cart)) {
                $data = $cart;
                
                return response()->json($data);
            }
            $data =  [
                'errCode' => 0,
                'errMessage' => 'Cart null',
            ];
            return response()->json($data);
        } catch (\Exception $th) {
            //throw $th;
            return response()->json($th->getMessage());
        }
    }

    public function addToCart(Request $request)
    {
        $cart = new Cart();
        $cart->accountId = $request->accountId;
        $cart->courseId = $request->courseId;
        $cart->amount = $request->amount;
        $cart->note = $request->note;
        $cart->save();
        return response()->json($cart);
    }

    public function deleteCart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        $cart->save();
        return response()->json("Success");
    }
}
