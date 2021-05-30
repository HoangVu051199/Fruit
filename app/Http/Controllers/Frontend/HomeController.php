<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cate_New;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\News;

class HomeController extends Controller
{
    public function index(){

        $cate_new = Cate_New::all();

        $cate_product = Category::all();

        $slider = Slider::all();

        $product = Product::all();

        $recent_posts = News::orderByDesc('created_at')->paginate(3);

        return view('frontend.home.index', compact('cate_new','cate_product','slider','product', 'recent_posts'));
    }
}
