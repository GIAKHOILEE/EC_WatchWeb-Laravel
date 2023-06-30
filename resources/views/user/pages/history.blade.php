@extends('user.main')


@section('history')

<div class="container__history">
    <h1 class="container__history__title">History</h1>
    <div class="history__item">
        <table class="table table-borderless">
            <thead>
                <tr class="history__thead">
                    <th scope="col">STT</th>
                    <th scope="col">Sản Phẩm</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                {{-- @csrf --}}
                <tr>
                    <td>1</td>
                    <td><img src="{{ asset('/imgproduct/' . $product->imgsp) }}" class="img_history" alt="product"></td>
                    <td>{{ $product->namesp }}</td>
                    <td>{{ $product->soluong }}</td>
                    <td>{{ $product->giasp }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
