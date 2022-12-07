<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product_check($product_key)
    {
        $product = Product::where('product_key', $product_key)->first();
        if ($product){
            $subscribed = Subscription::where('product_id', $product->id )->first();
                if($subscribed){
                    $status = true;
                    $response = ['status' => $status, "message" => 'Token received'];
                    return response($response);

                } else {
                    $status = false;
                    $response = ['status' => $status, "message" => 'Product is not subscribed.'];
                    return response($response);
                }
        } else {
            $status = false;
            $response = ['status' => $status, "message" => 'Product does not exist'];
            return response($response);
        }
    }
}
