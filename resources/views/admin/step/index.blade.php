@extends('layouts.admin_app')

@section('content')
    <a href="{{ route('admin.step.create') }}" class="btn btn-primary mb-3">添加</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">产品</th>
            <th scope="col">英语</th>
            <th scope="col">德语</th>
            <th scope="col">法语</th>
            <th scope="col">意大利语</th>
            <th scope="col">西班牙语</th>
            <th scope="col">匈牙利语</th>
            <th scope="col">韩语</th>
            <th scope="col">日语</th>
            <th scope="col">简体中文</th>
            <th scope="col">繁体中文</th>
            <th scope="col">土耳其语</th>
            <th scope="col">序号</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($steps as $step)
            <tr>
                <td>{{ $step->product->name }}</td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=en" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=de" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=fr" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=it" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=es" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=hu" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=ko" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=ja" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=cn" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=tw" target="_blank">预览</a></td>
                <td><a href="{{ route('admin.step.show',$step) }}?lan=ru" target="_blank">预览</a></td>
                <td>{{ $step->sort }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-secondary"
                           href="{{ route('admin.step.edit',$step->id) }}">编辑</a>
                        <a href="javascript:alert('屏蔽危险操作，请使用编辑！')" class="btn btn-danger">删除</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $steps->links() }}
@endsection
