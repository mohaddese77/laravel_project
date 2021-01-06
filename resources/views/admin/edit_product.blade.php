@extends('admin.admin_layout')

@section('content')
    <div class="col-9 pt-5 pr-5">
        <h3>ویرایش آگهی جدید</h3>
        <form method="post" action="{{ route('admin_product_update', ['products' => $products['id']]) }}" class="pt-5">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleInputEmail1">نام آگهی</label>
                <input class="form-control" id="exampleInputEmail1" name="name" value="{{ $products['name'] }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">انتخاب دسته بندی</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    @foreach($cat_list as $cat_item)
                        @if ($cat_item['id'] == $products['category_id'])
                            <option value="{{ $cat_item['id'] }}" selected>{{ $cat_item['fa_name'] }}</option>
                        @else
                            <option value="{{ $cat_item['id'] }}">{{ $cat_item['fa_name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">توضیحات</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $products['description'] }}</textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">انتخاب عکس</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-outline-success btn-lg">ویرایش</button>
                <a type="submit" class="btn btn-outline-danger btn-lg" href="{{ route('admin_product') }}">بازگشت</a>
            </div>
        </form>
    </div>
@endsection