@extends('admin.admin_layout')

@section('custom_css')
@endsection

@section('content')
    <div class="col-9 pt-5 pr-5">
        <div class="row">
            <h3 class="float-right">مدیریت دسته بندی ها</h3>
            <a href="{{ route('category_create') }}" class="float-left mr-auto btn btn-outline-success btn-lg">افزودن دسته جدید</a>
        </div>

        <div class="row pt-5">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="text-center" scope="col">ردیف</th>
                    <th class="text-center" scope="col">نام فارسی</th>
                    <th class="text-center" scope="col">نام لاتین</th>
                    <th class="text-center" scope="col">ابزارها</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data_list as $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                        <td class="text-center">{{ $item['fa_name'] }}</td>
                        <td class="text-center">{{ $item['en_name'] }}</td>
                        <td class="text-center" style="font-size: 20px">
                            <form class="d-inline" action="{{ route('category_destroy', ['category'=>$item['id']]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn bg-transparent p-2" type="submit">
                                    <i class="fas fa-trash-alt pr-3 text-dark"></i>
                                </button>
                            </form>
                            <a href="{{ route('category_edit', ['category' => $item['id'] ]) }}"><i class="far fa-edit pr-3 pr-3 text-dark"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
