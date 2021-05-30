<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class BackendCategoryController extends Controller
{

    public function index()
    {
        $category = Category::orderBy('id', 'asc')->get();

        return view('backend.category.index', compact('category'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(BackendCategoryRequest $request)
    {
        try{
            Category::create([
            'name' => $request->name, 
            'slug' => Str::slug($request->name), 
            'status' => $request->status
        ]);

        return redirect()
            ->route('category.index')
            ->with('message', 'Thêm thành công');
        }catch(\Exception $exception){
            return redirect()->back()
                ->with('error', 'Đã xảy ra lỗi khi lưu dữ liệu');
        }
        
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('backend.category.update', compact('category'));
    }

    public function update(BackendCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name, 
            'slug' => Str::slug($request->name),
             'status' => $request->status
         ]);

        return redirect()
            ->route('category.index')
            ->with('Success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()
            ->back()
            ->with('Success', 'Xoá thành công');
    }
}

