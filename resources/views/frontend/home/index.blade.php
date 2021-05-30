@extends('layouts.app_frontend')
@section('content')
    <!--slider area start-->
    <section class="slider_section slider_s_five mb-70">
        <div class="slider_area owl-carousel">
            @foreach($slider as $item)
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ $item->image }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1>Vegetables Big Sale</h1>
                                <h2>Fresh Farm Products</h2>
                                <p>
                                    10% certifled-organic mix of fruit and veggies. Perfect for weekly cooking and snacking!
                                </p>
                                <a href="shop.html">Read more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--slider area end-->
    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="row">
                <div class="section_title">
                    <h2>3 LÝ DO MUA HOA QUẢ TẠI FRUIT</h2>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="shipping_icone pb-3">
                        <img src="frontend/assets/img/about/shipping1.png" alt="">
                    </div>
                    <div class="single_shipping">
                        <div class="shipping_content">
                            <h3>HOA QUẢ TƯƠI SẠCH</h3>
                            <p>Quy trình nhập hàng, vận chuyển, bảo quản chuyên nghiệp</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="shipping_icone pb-3">
                            <img src="frontend/assets/img/about/shipping2.png" alt="">
                        </div>
                    <div class="single_shipping col_3">
                        <div class="shipping_content">
                            <h3>ĐỔI TRẢ MIỄN PHÍ</h3>
                            <p>Đổi trả miễn phí trong 24h khi khách hàng không hài lòng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="shipping_icone pb-3">
                            <img src="frontend/assets/img/about/shipping3.png" alt="">
                        </div>
                    <div class="single_shipping col_3">
                        <div class="shipping_content">
                            <h3>GIÁ CẢ CẠNH TRANH</h3>
                            <p>Fruit luôn đặt lợi ích cho người tiêu dùng lên hàng đầu</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--product area start-->
    <div class="product_area mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Sản Phẩm Nổi Bật</h2>
                    </div>
                </div>
            </div>
             <div class="product_container">
               <div class="row">
                   <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            @foreach($product as $item)
                                @if($item->hot == 1 && $item->status == 1)
                            <article class="single_product">
                                <form>
                                    @csrf
                                <figure>
                                    <input type="hidden" value="{{ $item->id }}" class="cart_id_{{ $item->id }}">
                                    <input type="hidden" value="{{ $item->name }}" class="cart_name_{{ $item->id }}">
                                    <input type="hidden" value="{{ $item->image }}" class="cart_image_{{ $item->id }}">
                                    <input type="hidden" value="{{ $item->price }}" class="cart_price_{{ $item->id }}">
                                    <input type="hidden" value="1" class="cart_quantity_{{ $item->id }}">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ URL::to('product-detail', $item->slug) }}"><img src="{{ $item->image }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart" name="add_to_cart" data-id ="{{ $item->id }}"><a><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="{{ URL::to('product-detail', $item->id) }}">{{ $item->name }}</a></h4>
                                        <div class="price_box">
                                            <span class="current_price">{{ number_format($item->price) }}
                                                <sup>đ</sup></span>
                                            <span class="old_price">20.000đ</span>
                                        </div>
                                    </figcaption>
                                </figure>
                                </form>
                            </article>
                                @else
                                    {{ NULL }}
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/assets/img/bg/banner1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/assets/img/bg/banner2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <div class="product_area product_deals mb-65">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Sản Phẩm Khuyến Mãi</h2>
                    </div>
                </div>
            </div>
             <div class="product_container">
               <div class="row">
                   <div class="col-12">
                        <div class="product_carousel product_column5 owl-carousel">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product14.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product15.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$48.00</span>
                                            <span class="old_price">$257.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product16.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product17.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$35.00</span>
                                            <span class="old_price">$245.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product18.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product19.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$26.00</span>
                                            <span class="old_price">$362.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product20.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product21.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$55.00</span>
                                            <span class="old_price">$235.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$26.00</span>
                                            <span class="old_price">$362.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product16.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="product_timing">
                                            <div data-countdown="2021/12/15"></div>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                 <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                        <p><a href="#">Fruits</a></p>
                                        <div class="price_box">
                                            <span class="current_price">$26.00</span>
                                            <span class="old_price">$362.00</span>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner fullwidth area satrt-->
    <div class="banner_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_full_content">
                        <p>Black Fridays !</p>
                        <h2>Sale 50% OFf <span>all vegetable products</span></h2>
                        <a href="shop.html">discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth area end-->

    <!--product banner area satrt-->
    <div class="product_banner_area mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Sản Phẩm Bán Chạy</h2>
                    </div>
                </div>
            </div>
            <div class="product_banner_container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="frontend/assets/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="small_product_area product_column2 owl-carousel">
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product2.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$26.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product4.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product6.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$56.00</span>
                                                <span class="old_price">$362.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product8.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Quisque In Arcu</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$20.00</span>
                                                <span class="old_price">$352.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product10.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$72.00</span>
                                                <span class="old_price">$352.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product12.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$36.00</span>
                                                <span class="old_price">$282.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="product_items">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product1.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$45.00</span>
                                                <span class="old_price">$162.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product10.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product3.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="frontend/assets/img/product/product8.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="frontend/assets/img/product/product5.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                            <p><a href="#">Fruits</a></p>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                     <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$46.00</span>
                                                <span class="old_price">$382.00</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product banner area end-->

    <!--blog area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Tin Tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    @foreach($recent_posts as $item)
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{ URL::to('new-detail',$item->id) }}"><img src="{{ $item->image }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <div class="articles_date">
                                         <p>{{ $item->created_at }} | <a href="#">Hoàng vũ</a> </p>
                                    </div>
                                    <h4 class="post_title"><a href="{{ URL::to('new-detail',$item->id) }}">{{ $item->title }}</a></h4>
                                    <footer class="blog_footer">
                                        <a href="{{ URL::to('new-detail',$item->id) }}">Chi tiết</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->
@endsection
