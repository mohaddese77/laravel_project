@extends('admin.admin_layout')

@section('custom_css')
@endsection

@section('content')
    <div class="col-9 pt-5 pr-5">
        <div class="row">
            <h3 class="float-right">مدیریت آگی</h3>
            <a href="{{ route('admin_product_create') }}" class="float-left mr-auto btn btn-outline-success btn-lg">افزودن آگهی جدید</a>
        </div>

        <div class="row pt-5">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="text-center" scope="col">نام</th>
                    <th class="text-center" scope="col">دسته بندی</th>
                    <th class="text-center" scope="col">توضیحات</th>
                    <th class="text-center" scope="col">ابزارها</th>
                </tr>
                </thead>
                <tbody>

                @foreach($pro_list as $item)
                    <tr>
                        <th class="text-center" scope="row">{{ $item['name'] }}</th>
                        <td class="text-center">{{ $item['category_id'] }}</td>
                        <td class="text-center">{{ $item['description'] }}</td>
                        <td class="text-center" style="font-size: 20px">
                            <form class="d-inline" action="{{ route('admin_product_destroy', ['products' => $item['id'] ]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn bg-transparent p-2" type="submit">
                                    <i class="fas fa-trash-alt pr-3 text-dark"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin_product_edit', ['products' => $item['id']]) }}"><i class="far fa-edit pr-3 pr-3 text-dark"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
