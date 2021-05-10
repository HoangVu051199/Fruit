<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackendProductController extends Controller
{
    public function index()
    {
        $category = Category::first();

        $product = Product::orderBy('id', 'asc')->get();

        return view('backend.product.index', compact('product','category'));
    }


    public function create()
    {
        $category = Category::all();

        $unit = Unit::all();

        return view('backend.product.create', compact('category','unit'));
    }


    public function store(BackendProductRequest $request)
    {
        $img = '';
        if ($request->has('image')) {
            $image = $request->file('image');
            $img = '/files' . '/uploads' . '/images/' . now()->format('H-i-s-m-s-d-m-Y') . '.' . $request->file('image')->extension();
            $image->move(public_path() . '/files' . '/uploads' . '/images', $img);
        }

        Product::create([
            'category_id' => $request->category_id,
            'unit_id' => $request->unit_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $img,
            'price' => $request->price,
            'origin' => $request->origin,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/product')->with('Success', 'Thêm thành công');
    }


    public function edit($id)
    {
        $category = Category::all();

        $unit = Unit::all();

        $product = Product::findOrFail($id);

        return view('backend.product.update', compact('product','category','unit'));
    }


    public function update(BackendProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $img = '';
        if ($request->has('image')) {
            $image = $request->file('image');
            $img = '/files' . '/uploads' . '/images/' . now()->format('H-i-s-m-s-d-m-Y') . '.' . $request->file('image')->extension();
            $image->move(public_path() . '/files' . '/uploads' . '/images', $img);
        }

        $product->update([
            'category_id' => $request->category_id,
            'unit_id' => $request->unit_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $img,
            'price' => $request->price,
            'origin' => $request->origin,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('/product')->with('Success', 'Sửa thành công');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/product')->with('Success', 'Xoá thành công');
    }
}
