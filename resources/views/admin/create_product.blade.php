@extends('admin.admin_layout')

@section('content')
    <div class="col-9 pt-5 pr-5">
        <h3>افزودن آگهی جدید</h3>
        <form method="post" action="{{ route('admin_product_store') }}" class="pt-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">نام آگهی</label>
                <input class="form-control" id="exampleInputEmail1" name="name">
            </div>
            <div class="w-100">
                @if ($errors->has('name'))
                    <div class="_my_error mb-5">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">انتخاب دسته بندی</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    @foreach($cat_list as $cat_item)
                        <option value="{{ $cat_item['id'] }}">{{ $cat_item['fa_name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-100">
                @if ($errors->has('category'))
                    <div class="_my_error mb-5">
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="w-100">
                @if ($errors->has('description'))
                    <div class="_my_error mb-5">
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">انتخاب عکس</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/jpeg">
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-outline-success btn-lg">ثبت</button>
                <a type="submit" class="btn btn-outline-danger btn-lg" href="{{ route('admin_product') }}">بازگشت</a>
            </div>
        </form>
    </div>
@endsection