@extends('layouts.app')

@section('content')

    <div class="center jumbotron green">

        <div class="text-center text-white green">
            <h1>Bifree Application</h1>
        </div>

    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">新規ユーザー登録</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
        
            <form action="signup" accept-charset="UTF-8" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>お名前</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" name="email" class="form-control">
                </div>
                
                <label>お住まいの都道府県</label>
                <select class="form-group form-control" name="address">
                    @foreach(config('prefecture') as $pref_id => $name)
                    <option value="{{ $pref_id }}">{{ $name }}</option>
                    @endforeach
                </select>

                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

            <input type="submit" class="btn btn-green mt-2">
            </form>

        </div>
    </div>

@endsection