@extends('layouts.app')

@section('content')

    <div class="center jumbotron blue">

        <div class="text-center text-white">
            <h1>Bifree Application</h1>
        </div>
    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">Sample</h3>
        <div class="profile-image mt-2 mb-4">
            <img src="https://d1uzk9o9cg136f.cloudfront.net/f/16783100/rc/2018/04/05/23df4ecafe20eacd37b35ab7470d9432fb2e215d.jpg">
        </div>
        <div class="profile-box">
            <div>
                <p>出身地：秋田県</p>
                <p>秋田県から来ました。とてもお米が美味しく、毎日バクバク食べています。</p>

                                <div>
                    <form action="{{ route('favorites') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">
                            <i class="far fa-thumbs-up"></i> フォローする
                        </button>
                    </form>
                </div>
                <div>
                    <form action="{{ route('unfavorites') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">
                            <i class="far fa-thumbs-up"></i> フォロー外す
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs nav-justified mt-5 mb-2">
        <li class="nav-item nav-link"><a href="" class="">フォロワー<br><div class="badge badge-secondary"></div></a></li>
        <li class="nav-item nav-link"><a href="" class="">フォロー中<br><div class="badge badge-secondary"></div></a></li>
        </ul>
    </div>
    
@endsection
