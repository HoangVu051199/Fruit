<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BackendHomeController extends Controller
{
    public function index()
    {

        $countProduct = Product::select('id')->count();

        $countUser = User::select('id')->count();

        $countOrder0 = Order::select('id')->where('status', 0)->count();
        $countOrder1 = Order::select('id')->where('status', 1)->count();
        $countOrder2 = Order::select('id')->where('status', 2)->count();
        $countOrder3 = Order::select('id')->where('status', 3)->count();


        $countNew = News::select('id')->count();

        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        return view('backend.dashboard.index', compact('countProduct','countUser','countOrder0', 'countOrder1', 'countOrder2', 'countOrder3', 'countNew', 'dt'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
