<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendPromotion_ProductRequest;
use Illuminate\Http\Request;
use App\Models\Promotion_Product;
use App\Models\Detail_Promotion;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;

class BackendPromotion_ProductController extends Controller
{
    public function index()
    {
        $promotion = Promotion_Product::get();

        return view('backend.promotion.index', compact('promotion'));
    }


    public function create()
    {
        $category = Category::get();

        return view("backend.promotion.create", compact('category'));
    }


    public function store(BackendPromotion_ProductRequest $request)
    {
        $promotion = new Promotion_Product();

        $promotion->name = $request->name;
        $promotion->type_sale = $request->type_sale;
        $promotion->sale = $request->sale;
        $promotion->start = $request->start;
        $promotion->finish = $request->finish;

        if ($promotion->save()) {
            if(!empty($request->product_id)){
                foreach ($request->product_id as $key => $value) {
                    \DB::table('detail_promotion')
                    ->insert([
                    'product_id' => $value,
                    'promotion_id' => $promotion->id,
                ]);
                }
            }
            
        }

        return redirect()->route('promotion.index');
        
    }


    public function select_product(Request $request)
    {
        $data = $request->all();

        $output = '';
        $products = Product::where('category_id', $data['id_category'])->get();

        foreach($products as $key => $product){
                    $output.='<option value="'.$product->id.'">'.$product->name.'</option>';
                }

        echo $output;
    }

    public function show($id)
    {
        $promotion_detail = Detail_Promotion::where('promotion_id', $id)->get();

        return view('backend.promotion.promotion_detail', compact('promotion_detail'));
    }

    public function edit($id)
    {
        $category = Category::get();
        $promotion = Promotion_Product::find($id);
        $promotion_detail = Detail_Promotion::where('promotion_id', $id)
        ->get();

        return view('backend.promotion.update', compact('category','promotion', 'promotion_detail'));
    }


    public function update(BackendPromotion_ProductRequest $request, $id)
    {

        $promotion = Promotion_Product::find($id);

        $promotion->name = $request->name;
        $promotion->type_sale = $request->type_sale;
        $promotion->sale = $request->sale;
        $promotion->start = $request->start;
        $promotion->finish = $request->finish;

        if ($promotion->save()) {
            if(!empty($request->product_id)){
                \DB::table('detail_promotion')
                    ->where('promotion_id', $id)->delete();
                foreach ($request->product_id as $key => $value) {
                    \DB::table('detail_promotion')
                    ->insert([
                    'product_id' => $value,
                    'promotion_id' => $promotion->id,
                ]);
                }
            }
            
        }

        return redirect()->route('promotion.index');
    }


    public function promotion_detail($id)
    {
        $promotion_detail = Detail_Promotion::findOrFail($id);

        $promotion_detail->delete();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $promotion = Promotion_Product::findOrFail($id);

        $promotion->delete();

        return redirect()->route('promotion.index');
    }
}
