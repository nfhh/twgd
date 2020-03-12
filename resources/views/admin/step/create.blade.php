@extends('layouts.admin_app')

@section('content')
    @include('layouts._validate')
    <form action="{{ route('admin.step.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="product_id">选择产品</label>
            <select class="form-control" name="product_id" id="product_id">
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name  }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="en">英语</label>
            <script id="en" name="en" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="de">德语</label>
            <script id="de" name="de" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="fr">法语</label>
            <script id="fr" name="fr" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="it">意大利语</label>
            <script id="it" name="it" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="es">西班牙语</label>
            <script id="es" name="es" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="hu">匈牙利语</label>
            <script id="hu" name="hu" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="ko">韩语</label>
            <script id="ko" name="ko" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="ja">日语</label>
            <script id="ja" name="ja" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="cn">简体中文</label>
            <script id="cn" name="cn" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="tw">繁体中文</label>
            <script id="tw" name="tw" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="ru">俄语</label>
            <script id="ru" name="ru" type="text/plain"></script>
        </div>
        <div class="form-group">
            <label for="sort">序号</label>
            <input type="text" class="form-control" id="sort" name="sort" required>
        </div>
        <button type="submit" class="btn btn-primary">确定</button>
    </form>
@endsection
@section('js')
    <script>
        var en = UE.getEditor('en');
        en.ready(function () {
            en.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var de = UE.getEditor('de');
        de.ready(function () {
            de.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var fr = UE.getEditor('fr');
        fr.ready(function () {
            fr.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var it = UE.getEditor('it');
        it.ready(function () {
            it.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var es = UE.getEditor('es');
        es.ready(function () {
            es.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var hu = UE.getEditor('hu');
        hu.ready(function () {
            hu.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var ko = UE.getEditor('ko');
        ko.ready(function () {
            ko.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var ja = UE.getEditor('ja');
        ja.ready(function () {
            ja.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var cn = UE.getEditor('cn');
        cn.ready(function () {
            cn.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var tw = UE.getEditor('tw');
        tw.ready(function () {
            tw.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

        var ru = UE.getEditor('ru');
        ru.ready(function () {
            ru.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });
    </script>
@endsection
