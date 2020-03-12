@extends('layouts.admin_app')

@section('content')
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">添加</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">产品</th>
            <th scope="col">排序</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sort }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-secondary"
                           href="{{ route('admin.product.edit',$product->id) }}">编辑</a>
                        <a href="javascript:alert('屏蔽危险操作，请使用编辑！')" class="btn btn-danger">删除</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
