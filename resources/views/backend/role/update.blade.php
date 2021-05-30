@extends('layouts.app_backend')
@section('title','Cập nhật vai trò')
@section('content')
<div class="content-body" style="min-height: 788px;">
   <div class="row page-titles mx-0">
      <div class="col p-md-0">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cập nhật vai trò</a></li>
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
                     <form class="form-valide" action="{{ route('roles.update', $roles->id) }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group row is-invalid">
                           <label class="col-lg-4 col-form-label" for="val-suggestions">Tên vai trò<span class="text-danger">*</span>
                           </label>
                           <div class="col-lg-6">
                              <input name="display_name" value="{{ $roles->display_name }}" class="form-control" placeholder="Tên vai trò">
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
                              <textarea name="description" class="form-control" placeholder="Mô tả">{{ $roles->description }}</textarea>
                              <div id="val-username-error" class="invalid-feedback animated fadeInDown" style="display: block;">
                                 @if($errors->first('description'))
                                 <small id="emailHelp" class="form-text text-danger">{{ $errors->first('description') }}</small>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="cards">
                           <!-- <h4 class="card-title">
                              <label>
                              <input type="checkbox" value="" class="checkboxall ml-1 mr-2">
                              </label>
                              CheckAll</h4> -->
                        </div>
                        <input type="button" class="btn mb-1 btn-primary" id="btn1" value="Chọn tất cả"/>
                        <input type="button" class="btn mb-1 btn-danger" id="btn2" value="Huỷ tất cả"/>
                        @foreach($permissionsParent as $permissionchild)
                        <div class="cards list-group" style="margin-top: -20px;">
                           <h4 class="card-title list-group-item active">
                              <label>
                              <input type="checkbox" value="" class="checkbox_wrapper ml-1 mr-2">
                              </label>
                              {{ $permissionchild->display_name }}
                           </h4>
                           <div class="basic-form list-group-item">
                              <div class="form-group">
                                 @foreach($permissionchild->permissionChildrent as $item)
                                 <div class="form-check form-check-inline col-lg-3">
                                    <label class="form-check-label mt-3">
                                    <input type="checkbox" class="form-check-input checkbox_childrent" value="{{ $item->id }}" name="permissions[]" {{ isset($list_permission) && in_array($item->id, $list_permission) ? 'checked' : '' }}>{{ $item->display_name }}
                                    </label>
                                 </div>
                                 @endforeach
                                 <br/>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div class="form-group row">
                           <div class="col-lg-8 ml-auto">
                              <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
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
   // Check
    
               // Chức năng chọn hết
               document.getElementById("btn1").onclick = function () 
               {
                   // Lấy danh sách checkbox
                   var checkboxes = document.getElementsByName('permissions[]');
    
                   // Lặp và thiết lập checked
                   for (var i = 0; i < checkboxes.length; i++){
                       checkboxes[i].checked = true;
                   }
               };
    
               // Chức năng bỏ chọn hết
               document.getElementById("btn2").onclick = function () 
               {
                   // Lấy danh sách checkbox
                   var checkboxes = document.getElementsByName('permissions[]');
    
                   // Lặp và thiết lập Uncheck
                   for (var i = 0; i < checkboxes.length; i++){
                       checkboxes[i].checked = false;
                   }
               };
    
     
</script>
@endsection