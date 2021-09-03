@section('commons.sidebar')

<div class="mainbox">
        <nav class="navigation d-flex flex-column text-center navbar navbar-light hide-scrollbar">
            <ul class="d-flex nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center" role="tablist">
                <li class="nav-item"><a href="{{ route('users.show') }}" class="nav-link py-0 py-lg-8"><i class="fas fa-user-alt fa-2x"></i></a></li>
                <li class="nav-item"><a href="{{ route('posts') }}" class="nav-link py-0 py-lg-8"><i class="fas fa-comments fa-2x"></i></a></li>
                <li class="nav-item"><a href="{{ route('users.search') }}" class="nav-link py-0 py-lg-8"><i class="fas fa-search fa-2x"></i></a></li>
                <li class="nav-item"><a href="{{ route('users.show') }}" class="nav-link py-0 py-lg-8"><i class="fas fa-cog fa-2x"></i></a></li>
                <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link py-0 py-lg-8"><i class="fas fa-question-circle fa-2x"></i></a></li>
            </ul>
        </nav>
            
        <aside class="sidebar bg-light">
                <div class="tab-content h-100" role="tablist">
                    
                    <!--Friends-->
                    <div class="tab-pane fade h-100">
                        
                    </div>
                    <!--Chats-->
                    <div class="tab-pane fade h-100 show active">
                    <div class="d-flex flex-column h-100 position-relative">
                        <div class="hide-scrollbar">
                            <div class="container py-8">
                                <div class="mb-6">
                                    <h2>Chats</h2>
                                </div>
                                <div class="mb-6">
                                    <form action="">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-list">
                                    <a class="card border-0 text-right">
                                    <div class="card-body">
                                        <div class="row gx-5">
                                            
                                            <!--Card-->
                                            <a class="card border-0 text-reset" href="{{ route('message') }}">
                                                <div class="card-body">
                                                    <div class="row gx-5">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-online">
                                                                <img class="avatar-img" src="https://images.rollingstonejapan.com/articles/34000/34460/415x850/15cd1debb9aaf0eb62d2fde0f5bb7f77.jpg">
                                                            </div>
                                                            <div class="col">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h5 class="me-auto mb-0">Syun Details</h5>
                                                                    <span class="text-muted extra-small ms-2">
                                                                        8:45 pm
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="line-clamp me-auto message-body">
                                                                        "Hi. Ofcourse I know her details. Syun is sometime like a beautiful summer girl, she likes sun."
                                                                    </div>
                                                                    <div class="badge badge-circle bg-primary ms-5">
                                                                        <span>0</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <!--Card-->
                                            <a class="card border-0 text-reset" href="#">
                                                <div class="card-body">
                                                    <div class="row gx-5">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-online">
                                                                <img class="avatar-img" src="https://pbs.twimg.com/profile_images/1078678861909417985/zGab98bo_400x400.jpg">
                                                            </div>
                                                            <div class="col">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h5 class="me-auto mb-0">Maru Chan</h5>
                                                                    <span class="text-muted extra-small ms-2">
                                                                        8:45 pm
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="line-clamp me-auto message-body">
                                                                        "Hello! I am Yuko, who is mizu mizu c. Mizu mizu c means juicy."
                                                                    </div>
                                                                    <div class="badge badge-circle bg-primary ms-5">
                                                                        <span>3</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <!--Card-->
                                            <a class="card border-0 text-reset" href="#">
                                                <div class="card-body">
                                                    <div class="row gx-5">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-online">
                                                                <img class="avatar-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRZpjjMkaU_EMfnPEZx_kgOns21wsmFKtHmw&usqp=CAU">
                                                            </div>
                                                            <div class="col">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h5 class="me-auto mb-0">Mizu mizu C Yuko</h5>
                                                                    <span class="text-muted extra-small ms-2">
                                                                        8:45 pm
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="line-clamp me-auto message-body">
                                                                        "Hello! I am Masaki, I am from Tokyo. I love ramen a lot. Do you? Let us eat togerther."
                                                                    </div>
                                                                    <div class="badge badge-circle bg-primary ms-5">
                                                                        <span>3</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <!--Card-->
                                            <a class="card border-0 text-reset" href="#">
                                                <div class="card-body">
                                                    <div class="row gx-5">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-online">
                                                                <img class="avatar-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRZpjjMkaU_EMfnPEZx_kgOns21wsmFKtHmw&usqp=CAU">
                                                            </div>
                                                            <div class="col">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <h5 class="me-auto mb-0">f-on Coffee</h5>
                                                                    <span class="text-muted extra-small ms-2">
                                                                        8:45 pm
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="line-clamp me-auto message-body">
                                                                        "How could you achieve 500 subscribers in your YouTube?"
                                                                    </div>
                                                                    <div class="badge badge-circle bg-primary ms-5">
                                                                        <span>3</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
            
    </div>
@show
