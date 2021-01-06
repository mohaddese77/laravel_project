<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_list = Products::all();
//        return $pro_list[1]['category_id']->category;
        return view('admin.products', compact('pro_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_list = Category::all();
        return view('admin.create_product', compact('cat_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:15|min:3',
            'category' => 'required',
            'description' => 'required',
        ],[
            'name.required' => "نام  برای یک آگهی الزامی است.",
            'category.required' => "انتخاب یک دسته برای آگهی الزامی است.",
            'description.required' => "وارد کردن توضیحات برای آگهی الزامی است.",
            'name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'name.min' => "نام باید حداقل 3 کاراکتر باشد.",
        ]);

        $file = $request->all()['image'];
        $filename = time() . "-" . $file->getClientOriginalName();
        $path_ = public_path("/product_image_upload");
        $file->move($path_, $filename);

        Products::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'category_id' => $request['category'],
            'image' => $filename,
        ]);

        return redirect(route('admin_product'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        $cat_list = Category::all();
        return view('admin.edit_product', compact('products', 'cat_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Products $products
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Products $products)
    {
        $this->validate($request,[
            'name' => 'required|max:15|min:3',
            'category' => 'required',
            'description' => 'required',
        ],[
            'name.required' => "نام  برای یک آگهی الزامی است.",
            'category.required' => "انتخاب یک دسته برای آگهی الزامی است.",
            'description.required' => "وارد کردن توضیحات برای آگهی الزامی است.",
            'name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'name.min' => "نام باید حداقل 3 کاراکتر باشد.",
        ]);

        $products->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'category_id' => $request['category'],
        ]);
        return redirect(route('admin_product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products $products
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Products $products)
    {
        if (file_exists(public_path("\product_image_upload\\".$products['image']))) {
            unlink(public_path("\product_image_upload\\".$products['image']));
        }
        $products->delete();
        return redirect(route('admin_product'));
    }
}
