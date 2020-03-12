<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .flex-center {
            height: 100vh;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row flex-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    后台管理员登录
                </div>
                <div class="card-body">
                    @include('layouts._validate')
                    <form action="{{ route('admin.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">邮箱</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">密码</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">确定</button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    铁威马版权所有©2020
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
