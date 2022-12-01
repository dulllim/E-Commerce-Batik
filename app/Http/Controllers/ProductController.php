<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Transaction;

class ProductController extends Controller
{
    Public function HomeView(){
        return view('content.home.home');
    }

    Public function ProductView(){
        $product = Product::all();
        $customer = Customer::all();
        $transaction = Transaction::all();
        // dd($transaction);
        // foreach ($transaction as $data) {
        //     echo $data;
        // };
        return view('content.product.product',
        ['product' => $product,
        'customer' => $customer,
        'transaction' => $transaction]
        );
    }

    Public function AboutView(){
        return view('content.about.about');
    }
}
