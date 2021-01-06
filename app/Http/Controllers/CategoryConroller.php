<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class CategoryConroller extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_list = Category::all();
        return view('admin.category', compact('data_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_category');
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
            'fa_name' => 'required|max:15|min:3',
            'en_name' => 'required|max:15|min:3',
        ],[
            'fa_name.required' => "نام فارسی برای یک دسته الزامی است.",
            'en_name.required' => "نام لاتین برای یک دسته الزامی است.",
            'fa_name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'fa_name.min' => "نام باید حداقل 3 کاراکتر باشد.",
            'en_name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'en_name.min' => "نام باید حداقل 3 کاراکتر باشد.",
        ]);

        Category::create([
            'fa_name' => $request['fa_name'],
            'en_name' => $request['en_name'],
        ]);

        return redirect(route('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'fa_name' => 'required|max:15|min:3',
            'en_name' => 'required|max:15|min:3',
        ],[
            'fa_name.required' => "نام فارسی برای یک دسته الزامی است.",
            'en_name.required' => "نام لاتین برای یک دسته الزامی است.",
            'fa_name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'fa_name.min' => "نام باید حداقل 3 کاراکتر باشد.",
            'en_name.max' => "نام باید کمتر از 15 کاراکتر باشد.",
            'en_name.min' => "نام باید حداقل 3 کاراکتر باشد.",
        ]);

        $category->update([
            'fa_name' => $request['fa_name'],
            'en_name' => $request['en_name'],
        ]);

        return redirect(route('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('category'));
    }
}
