@extends('layouts.admin_app')

@section('content')
    @include('layouts._validate')
    <form action="{{ route('admin.product.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">产品</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="sort">序号</label>
            <input type="text" class="form-control" id="sort" name="sort" required>
        </div>
        <button type="submit" class="btn btn-primary">确定</button>
    </form>
@endsection
