<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function Index(Request $request) {
        $totalCustomer = Customer::all()->count();
        $totalProduct = Product::where('parent_id', null)->get()->count();
        $totalOrder = Order::all()->count();

        return view('admin.home.index', compact('totalCustomer', 'totalProduct', 'totalOrder'));
    }
}
