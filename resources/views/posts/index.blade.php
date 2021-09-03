@extends('layouts.app')
@section('content')

<div>

    <div class="text-center mt-5">
        <h2 class="login_title text-left d-inline-block mt-2">Posts</h2>
    </div>
    <div class="text-center">
        <a href="{{ route('create') }}"><div class="btn btn-primary">記事を投稿する</div></a>
    </div>
    
    @foreach($posts as $post)
    
    <div class="col-8 test card mt-5">
        <div class="card-header text-left">{{ $post->title }}</div>
            <div class="card-body">
                <div class="text-right"><a href="{{ route('users.show') }}">{{ $post->user->name }}</a></div>
                <p>{{ $post->body }}</p>
                <div class="text-right">
                    <a href="{{ route('posts.edit') }}"><div class="btn btn-primary">編集する</div></a>
                    <a href="{{ route('posts.destroy') }}"><div class="btn btn-danger">削除する</div></a>
                </div>
                <div class="text-right flex">
                    <form action="{{ route('favorites') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">
                        <i class="far fa-thumbs-up"></i>
                        </button>
                    </form>
                    <form action="{{ route('unfavorites') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">
                        <i class="far fa-thumbs-up"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    
</div>

@endsection
