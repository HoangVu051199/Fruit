@extends('layouts.app_backend')
@section('title','Thêm vai trò')
@section('content')
<div class="content-body" style="min-height: 788px;">
   <div class="row page-titles mx-0">
      <div class="col p-md-0">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm vai trò</a></li>
         </ol>
      </div>
   </div>
   <!-- row -->
   <div class="container-fluid">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="form-validation">
                     <form class="form-valide" action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group row is-invalid">
                           <label class="col-lg-4 col-form-label" for="val-suggestions">Tên vai trò <span class="text-danger">*</span>
                           </label>
                           <div class="col-lg-6">
                              <input name="display_name" class="form-control" placeholder="Tên vai trò">
                              <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">
                                 @if($errors->first('display_name'))
                                 <small id="emailHelp" class="form-text text-danger">{{ $errors->first('display_name') }}</small>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="form-group row is-invalid">
                           <label class="col-lg-4 col-form-label" for="val-suggestions">Mô tả <span class="text-danger">*</span>
                           </label>
                           <div class="col-lg-6">
                              <input name="description" class="form-control" placeholder="Mô tả">
                              <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">
                                 @if($errors->first('description'))
                                 <small id="emailHelp" class="form-text text-danger">{{ $errors->first('description') }}</small>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="cards">
                           <h4 class="card-title">
                              <label>
                              <input type="checkbox" value="" class="checkbox_wrapper ml-1 mr-2">
                              </label>
                              CheckAll
                           </h4>
                        </div>
                        @foreach($permissionsParent as $permissionchild)
                        <div class="cards border-danger">
                           <h4 class="card-title">
                              <label>
                              <input type="checkbox" value="" class="checkbox_wrapper ml-1 mr-2">
                              </label>
                              {{ $permissionchild->display_name }}
                           </h4>
                           <div class="basic-form">
                              <div class="form-group">
                                 @foreach($permissionchild->permissionChildrent as $item)
                                 <div class="form-check form-check-inline col-lg-3">
                                    <label class="form-check-label">
                                    <input type="checkbox" name="permissions[]" class="form-check-input checkbox_childrent" value="{{ $item->id }}">{{ $item->display_name }}</label>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div class="form-group row">
                           <div class="col-lg-8 ml-auto">
                              <button type="submit" class="btn btn-primary">Lưu</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- #/ container -->
</div>
@endsection
@section('js')
<script type="text/javascript">
   $('.checkbox_wrapper').on('click', function(){
       $(this).parents('.cards').find('.checkbox_childrent').prop('checked', $(this).prop('checked'));
   });
   $('.checkboxall').on('click', function(){
       $(this).parents().find('.checkbox_wrapper').prop('checked', $(this).prop('checked'));
       $(this).parents().find('.checkbox_childrent').prop('checked', $(this).prop('checked'));
   });
</script>
@endsection