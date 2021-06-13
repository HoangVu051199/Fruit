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
         <!-- <div class="col-lg-3 col-sm-6">
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
         </div> -->
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <div>
                     <h4 class="card-title">
                        <span class="mr-1">Đơn hàng mới</span>
                        <!-- <a href="{{ route('permissions.create') }}" class="btn mb-1 btn-primary"><span class="btn-icon ml-2"><i class="fa fa-plus"></i></span>
                        </a> -->
                        <div class="col-lg-3 float-right">
                           <input type="search" class="form-control rounded" placeholder="Tìm kiếm theo vị trí..." wire:model="searchTerm"
                              aria-label="Search Dashboard">
                        </div>
                     </h4>
                     <div class="table-responsive">
                        <table class="table header-border table-hover verticle-middle">
                           <thead>
                              <tr>
                                 <th scope="col">STT</th>
                                 <th scope="col">Tên Khách Hàng</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Số điện thoại</th>
                                 <th scope="col">Trạng thái</th>
                                 <th scope="col">Thao tác</th>
                              </tr>
                           </thead>
                           <tbody>
                             
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Nguyễn Văn Nam</td>
                                 <td>nguyenvannam123@gmail.com</td>
                                 <td>0903745488</td>
                                 <td>Chờ xử lý</td>
                                 <td>
                                    <span>
                                    <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa">
                                    <i class="fa fa-pencil color-muted m-r-5"></i>
                                    </a>
                                    <!-- <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                    <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xoá">
                                    <!-- <i class="fa fa-close color-danger ml-3"></i> -->
                                    <i class="fa fa-eye ml-3" aria-hidden="true"></i>
                                    </a>
                                    </span>
                                 </td>
                              </tr>
                              
                           </tbody>
                        </table>
                     </div>
                  
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <!-- #/ container -->
</div>
@endsection