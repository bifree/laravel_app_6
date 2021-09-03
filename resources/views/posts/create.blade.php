@extends('layouts.app')

@section('content')

<div class="center jumbotron blue">
    <div class="text-center text-white">
        <h1>Bifree Application</h1>
    </div>
</div>

<div class="text-center">
    <div>
        <div class="d-flexbox flex-column align-items-center mt-5">
            <div class="col-xl-5 col-lg-8 col-md-10 col-sm-11 post-card">
                <div class="card mb-5">
                    <div class="card-header">
                        投稿の新規作成
                    </div>
                    <div class="card-body">
                        <form class="upload" accept-charset="UTF-8" method="POST" action="/store">
                        {{ csrf_field() }}
                            <div class="md-form">
                                <label>タイトル</label>
                                <input type="text" name="title" placeholder="タイトル" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>本文</label>
                                <textarea name="body" class="form-control" id=""></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-green w-25" value="投稿する">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
