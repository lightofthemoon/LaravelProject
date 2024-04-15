<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
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
                return CartResource::collection($cart)->map(function ($resource) {
                    return $resource->toArray(request());
                })->all();
            }
            $data =  [
                'errCode' => 0,
                'errMessage' => 'Cart empty',
            ];
            return response()->json($data);
        } catch (\Exception $th) {
            //throw $th;
            return response()->json($th->getMessage());
        }
    }

    public function addToCart(Request $request)
    {
        $existingCart= Cart::where('accountId', $request->accountId)
                              ->where('courseId', $request->courseId)
                              ->exists();
        if($existingCart) {
            return response()->json([
                'errCode' => 1,
                'message' => 'Khoá học đã tồn tại trong giỏ hàng'
            ], 400);
        }
        $cart = new Cart();
        $cart->accountId = $request->accountId;
        $cart->courseId = $request->courseId;
        $cart->amount = $request->amount;
        $cart->note = $request->note;
        $cart->save();
        return response()->json([
            'errCode' => 0,
            'message' => 'Thêm vào giỏ hàng thành công'
        ], 200);
    }

    public function deleteCart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return response()->json([
            'errCode' => 0,
            'message' => 'Xoá thành công'
        ], 200);
    }
}
