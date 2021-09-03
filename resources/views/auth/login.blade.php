@extends('layouts.app')

@section('content')

    <div class="center jumbotron green">

        <div class="text-center text-white green">
            <h1>Bifree Application</h1>
        </div>

    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">ログイン</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            
            <form action="/login" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>

            <input type="submit" class="btn btn-green mt-2">
            </form>

            <p class="mt-3">{!! link_to_route('signup', '新規ユーザ登録する？') !!}</p>
            
        </div>
    </div>
    
@endsection
