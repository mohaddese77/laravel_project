@extends('admin.admin_layout')

@section('content')
    <div class="col-9 pt-5 pr-5">
        <h3>افزودن دسته جدید</h3>
        <form method="post" action="{{ route('category_store') }}" class="pt-5">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">نام فارسی دسته</label>
                <input class="form-control" id="exampleInputEmail1" name="fa_name">
            </div>
            <div class="w-100">
                @if ($errors->has('fa_name'))
                    <div class="_my_error mb-5">
                        <span class="text-danger">{{ $errors->first('fa_name') }}</span>
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">نام لاتین دسته</label>
                <input class="form-control" id="exampleInputPassword1" name="en_name">
            </div>
            <div class="w-100">
                @if ($errors->has('en_name'))
                    <div class="_my_error">
                        <span class="text-danger">{{ $errors->first('en_name') }}</span>
                    </div>
                @endif
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-outline-success btn-lg">ثبت</button>
                <a type="submit" class="btn btn-outline-danger btn-lg" href="{{ route('category') }}">بازگشت</a>
            </div>
        </form>
    </div>
@endsection