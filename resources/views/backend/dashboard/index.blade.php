@extends('layouts.app_backend')
@section('title','Dashboard')
@section('content')
<div class="content-body">
   <div class="container-fluid mt-3">
      <div class="row">
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
               <div class="card-body">
                  <h3 class="card-title text-white">Sản Phẩm</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countProduct }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-8">
               <div class="card-body">
                  <h3 class="card-title text-white">Khuyến Mãi</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white"></h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-gift"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
               <div class="card-body">
                  <h3 class="card-title text-white">Thành Viên</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countUser }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
               <div class="card-body">
                  <h3 class="card-title text-white">Bài Viết</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countNew }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-7">
               <div class="card-body">
                  <h3 class="card-title text-white">Chờ Xác Nhận</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countOrder0 }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-check"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-6">
               <div class="card-body">
                  <h3 class="card-title text-white">Đang Giao</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countOrder1 }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-truck"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
               <div class="card-body">
                  <h3 class="card-title text-white">Đơn Hàng</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countOrder2 }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="card gradient-9">
               <div class="card-body">
                  <h3 class="card-title text-white">Đơn Hàng Huỷ</h3>
                  <div class="d-inline-block">
                     <h2 class="text-white">{{ $countOrder3 }}</h2>
                     <p class="text-white mb-0">{{ $dt }}</p>
                  </div>
                  <span class="float-right display-5 opacity-5"><i class="fa fa-times"></i></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #/ container -->
</div>
@endsection