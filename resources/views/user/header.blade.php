<header id="header" class="header">
    
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="https://cf.shopee.co.id/file/1b1f2baddc8bb4c47e4c71cc0b3d861d" style="width: 30px" alt="Logos"></a>
            <a class="navbar-brand hidden" href="./"><img src="" alt="Logo"> <i class="fa fa-book"></i></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    
    <div class="top-right">
        
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-book"></i></button>
                        <h1>catatan</h1>
                    </form>
                </div>

                

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">3</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="count bg-primary">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                <p>Hello, this is an example msg</p>
                            </div>
                        </a>
                        <a class="dropdown-item media" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                            <div class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle" src="{{Auth::user()->foto_user}}" style="max-width: 30px;" alt="">
                </a>

                <div class="user-menu dropdown-menu">
                   
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li><a class="nav-link" href="#">My Profile</a></li>
                        <li>
                            <a class="nav-link" href="#">Notifications <span class="count">13</span></a>
                        </li>
                        @if(Auth::check())
                        @if(Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                        </li>
                        @endif
                   
                        @if(Auth::user()->role == 'agent')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('agent')}}">Halaman agent</a>
                        </li>
                        @endif
                           
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user')}}">Halaman user</a>
                        </li>
                
                        @endif

                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                               
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>