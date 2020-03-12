@extends('layouts.admin_app')

@section('content')
    @include('layouts._validate')
    <form action="{{ route('admin.product.update',$product->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">产品</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="sort">序号</label>
            <input type="text" class="form-control" id="sort" name="sort" required value="{{ $product->sort }}">
        </div>
        <button type="submit" class="btn btn-primary">确定</button>
    </form>
@endsection
