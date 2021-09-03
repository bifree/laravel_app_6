<header class="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">Bifree Application</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            @if(Auth::check())
            ようこそ<?php $user = Auth::user (); ?>{{ $user->name }}さん
            @endif
            <ul class="navbar-nav">
                @if(Auth::check())
                
                <li class="nav-item">{!! link_to_route('logout', 'Log Out', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item"><a href="#"></a></li>
                
                @else

                <li class="nav-item">{!! link_to_route('signup', 'Sign Up', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('login', 'Log In', [], ['class' => 'nav-link']) !!}</li>
                
                @endif
            </ul>
        </div>

    </nav>

</header>