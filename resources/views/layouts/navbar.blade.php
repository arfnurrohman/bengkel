
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </li>
                    <li class="nav-item">
                    @auth
             
                @if(Auth::user()->role == 'admin')
              
              
                <li class="nav-item">
                    <a class="nav-link" href="/datauser">data user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/databengkel">data bengkel</a>
                </li>
                @endif
                @if(in_array(Auth::user()->role, ['admin','user']))
                <li class="nav-item">
                    <a class="nav-link" href="/halaman1">SHOP</a>
                </li>
                <li class="nav-item">
                    <?php
                     $pesanan_utama = App\Models\pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                     if(!empty($pesanan_utama))
                        {
                         $notif = App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
                        }
                    ?>
                    <a class="nav-link" href="{{ url('check-out') }}">
                        <i class="fa fa-shopping-cart"></i>
                        @if(!empty($notif))
                        <span class="badge badge-danger">{{ $notif }}</span>
                        @endif
                    </a>
                </li>
                @endif
                @endauth

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                              
                              
                            
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    {{ Auth::user()->role }}
                                   
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('profile') }}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>