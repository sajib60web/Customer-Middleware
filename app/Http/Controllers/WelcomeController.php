<?php

namespace App\Http\Controllers;

use App\Demo;
use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.home', compact('products'));
    }

    public function cart()
    {
        $cart = session()->get('cart');
        $total_price = array_sum(array_column($cart, 'total_price'));
        return view('pages.cart', ['cart' => $cart, 'total_price' => $total_price]);
    }

    public function addToCart(Request $request)
    {
        $id = $request->product_id;
        $product = Product::find($id);
        if ($product == null) {
            return redirect()->back();
        }

        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['total_price'] = $cart[$id]['quantity'] * $cart[$id]['price'];
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        $cart[$id] = [
            "title" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            "total_price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect('/cart');
    }

    public function demo()
    {
        $demos = Demo::all();
        return view('pages.demo', compact('demos'));
    }

    public function demoSave(Request $request)
    {
        $demo = new Demo();
        $demo->name = $request->name;
        if ($request->checkboxOk == 'on') {
            $demo->checkboxOk = '1';
        }
        $demo->save();
        return redirect()->back();
    }

    public function demoEdit($id)
    {
        $data = Demo::find($id);
        if ($data->checkboxOk == '1') {
            echo 'checked';
        } else {
            echo null;
        }
        return view('pages.demo-edit', compact('data'));
    }

    public function demoUpdate(Request $request)
    {
//        return $request;
        $demo = Demo::find($request->id);
        $demo->name = $request->name;

        if ($request->checkboxOk == 'on') {
            $demo->checkboxOk = '1';
        } else {
            $demo->checkboxOk = null;
        }
        $demo->save();
        return redirect()->back();
    }


}
