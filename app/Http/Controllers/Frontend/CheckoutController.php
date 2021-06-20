<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Cate_New;
use App\Models\Provinces;
use App\Models\Districts;
use App\Models\Wards;
use App\Models\Feeship;
use App\Models\Order;
use App\Models\Order_Detail;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
    	$cate_product = Category::all();
    	$cate_new = Cate_New::all();
    	$provinces = Provinces::orderBy('matp', 'ASC')->get();
        $order_detail = Order_Detail::orderBy('id', 'ASC')->get();

    	return view('frontend.checkout.checkout', compact('cate_product','cate_new','provinces','order_detail'));
    }

    public function home_select_delivery(Request $request)
    {
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="provinces"){
                $select_province = Districts::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output.='<option>__Chọn Quận / Huyện__</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->maqh.'">'.$province->name.'</option>';
                }

            }else{

                $select_wards = Wards::where('maqh',$data['ma_id'])->orderby('xaid','ASC')->get();
                $output.='<option>__Chọn Phường / Xã__</option>';
                foreach($select_wards as $key => $ward){
                    $output.='<option value="'.$ward->xaid.'">'.$ward->name.'</option>';
                }
            }
            echo $output;
        }
    }

    public function calculate_delivery(Request $request)
    {
    	$data = $request->all();
    	if($data['matp']){
    		$feeship = Feeship::where('matp', $data['matp'])
    		->where('maqh', $data['maqh'])
    		->where('xaid', $data['xaid'])->get();
    		foreach ($feeship as $key => $fee) {
    			Session::put('fee', $fee->feeship);
    			Session::save();
    		}
    	}
    }

    public function select_feeship(){
        $feeship = Session::get('fee');
        $output = '';
        if($feeship==true){
        $output.='<th><span><strong>Phí vận chuyển :</strong></span></th>';
            
        $output.='<td class="feeship" style="padding-left: 100px;">'.number_format($feeship, 0,',','.').'đ'.'</td>';
		}
            echo $output;       
    }

    public function home_total_feeship()
    {
        $feeship = Session::get('fee');
        $output = '';
        if($feeship==true){

            $total = 0;
                foreach(Session::get('cart') as $key => $value){
                $subtotal = $value['product_price']*$value['product_quantity'];
                $total+=$subtotal;
                }
                                            
        $output.='<th><span><strong>Tổng tiền :</strong></span></th>';  
        $output.='<td><strong style="color: #ff9600;padding-left: 100px;">'.
                    number_format($total += Session::get('fee'),0,',','.').'đ'.'
                </strong></td>';
        }
            echo $output;
    }

    public function order_confirm(Request $request)
    {
        
        $data = $request->all();

        $order = new Order();
        
        if (Auth::user()) {
            $order->user_id = Auth::user()->id;
        }else{
            $order->user_id = NULL;
        }

        $order->customer_name = $data['customer_name'];
        $order->customer_phone = $data['customer_phone'];
        $order->customer_email = $data['customer_email'];
        $order->customer_address = $data['customer_address'];
        $order->provinces_id = $data['provinces_id'];
        $order->districts_id = $data['districts_id'];
        $order->wards_id = $data['wards_id'];
        $order->customer_note = $data['customer_note'];
        $order->payment_method = $data['payment_method'];

        $order->save();

        $order_code = substr(md5(microtime()),rand(0,26),5);

        foreach (Session::get('cart') as $key => $cart) {
            $order_detail = new Order_Detail();
            $order_detail->order_id = $order->id;
            $order_detail->order_code = $order_code;
            $order_detail->product_id = $cart['product_id'];
            $order_detail->product_name = $cart['product_name'];
            $order_detail->product_price = $cart['product_price'];
            $order_detail->product_quantity = $cart['product_quantity'];
            $order_detail->product_feeship = $data['feeship'];

            $order_detail->save();
        }
        Session::forget('fee');
        Session::forget('cart');
    }
}
