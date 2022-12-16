<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function Index(Request $request) {
        $listTotalReport = [
            [
                'title' => 'customer total',
                'value' => Customer::all()->count(),
                'icon' => 'fa-user-alt'
            ],
            [
                'title' => 'product total',
                'value' => Product::where('parent_id', null)->get()->count(),
                'icon' => 'fa-book'
            ],
            [
                'title' => 'order total',
                'value' => Order::all()->count(),
                'icon' => 'fa-book'
            ]
        ];

        return view('admin.home.index', compact('listTotalReport'));
    }
}
