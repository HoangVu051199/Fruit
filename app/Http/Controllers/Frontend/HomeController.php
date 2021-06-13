<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cate_New;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\News;
use DB;

class HomeController extends Controller
{
    public function index(){

        $cate_new = Cate_New::all();

        $cate_product = Category::all();

        $slider = Slider::all();

        $product = Product::all();

        $recent_posts = News::orderByDesc('created_at')->paginate(3);

        

        return view('frontend.home.index', compact('cate_new','cate_product','slider','product', 'recent_posts', ));
    }


    public function home_select_Modal(Request $request)
    {

    	$data = $request->all();
    	$output='';
    	if($data){
    	$product_detail = DB::table('product')
        ->where('id',$data['cart_id'])->first();
       
            $output.='
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="'.$product_detail->image.'" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="'.$product_detail->image.'" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel owl-loaded owl-drag" role="tablist">
 									<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-383px, 0px, 0px); transition: all 0s ease 0s; width: 1151px;"><div class="owl-item cloned" style="width: 95.875px;"><li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li></div><div class="owl-item active" style="width: 95.875px;"><li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li></div><div class="owl-item active" style="width: 95.875px;"><li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li></div><div class="owl-item active" style="width: 95.875px;"><li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li></div><div class="owl-item active" style="width: 95.875px;"><li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li></div><div class="owl-item cloned" style="width: 95.875px;"><li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price">$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option" style="display: none;">
                                               <option selected="" value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select><div class="nice-select select_option" tabindex="0"><span class="current">s</span><ul class="list"><li data-value="1" class="option selected">s</li><li data-value="1" class="option">m</li><li data-value="1" class="option">l</li><li data-value="1" class="option">xl</li><li data-value="1" class="option">xxl</li></ul></div>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option" style="display: none;">
                                               <option selected="" value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select><div class="nice-select select_option" tabindex="0"><span class="current">purple</span><ul class="list"><li data-value="1" class="option selected">purple</li><li data-value="1" class="option">violet</li><li data-value="1" class="option">black</li><li data-value="1" class="option">pink</li><li data-value="1" class="option">orange</li></ul></div>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                
    
';
            }
            echo $output;
        }
    }

