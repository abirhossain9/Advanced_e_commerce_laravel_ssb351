
            <!-- Header -->
            <header class="navbar-header">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <span><img style="width: 100px;margin-top: 10px;margin-bottom: 10px;" src="https://shikhbeshobai.com/public/assets/home/assets/images/Shikhbe-shobai-logo.png" alt=""></span>
                        </a>
                        <button class="navbar-toggler" type="button" id="sidebarCollapse">
                            <span class="navbar-toggler-icon icofont-navigation-menu"></span>
                        </button>
                        <div class="navbar-collapse justify-content-center" id="sidebar">


                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link section-scroll" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link section-scroll" href="{{route('home')}}">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="">Comunity</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll="" class="nav-link section-scroll" href="">LIVE</a>
                                </li>

                            </ul>
                        </div>

                        <div class="ml-auto ml-auto-mobile top-bar">
                            @if (Auth::check())
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{Auth::user()->name}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="{{route('stdDashboard')}}">Dashboard</a>
                                      <form method="POST" action="{{route('logout') }}">
                                        @csrf
                                          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                          this.closest('form').submit();">Logout</a>
                                      </form>
                                    </div>
                                  </div>
                            @else
                            <a href="{{route('stdRegister')}}"><i class="icofont-support"></i>Register</a>
                            <a href="{{route('stdLogin')}}"><i class="icofont-ui-user"></i>Login</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </header>
            <!--Header-->
s
