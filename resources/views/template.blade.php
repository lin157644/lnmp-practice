<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="希望透過本網站，能令各位更加認識我~">
    <meta name="author" content="SeanLin,linxs1010@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:title" content="XiangShun's profile"/>
    <meta property="og:description" content="希望透過本網站，能令各位更加認識我~"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:image" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <script src="https://kit.fontawesome.com/bffc14945b.js" crossorigin="anonymous"></script>
    <title>XiangShun's profile</title>
    @yield('styles')
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app" class="container-fluid d-flex g-0">
        <!-- Sidebar -->
        <div id="sideBarWrapper" class="d-flex">
            <nav id="sidebar" class="d-flex flex-column">
                <div class="sidebarHeader d-flex align-items-center justify-content-center">
                    <span>XSLin</span>
                </div>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('index') }}">
                            <i class="fas fa-home fa-lg"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        
                        <a href="{{ route('profile.index') }}">
                            <i class="fas fa-address-card fa-lg"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <div class="row gx-0">
                            <a class="col-10  py-2" href="{{ route('projects.index') }}">
                                <i class="fas fa-terminal"></i>
                                <span>Projects</span>
                            </a>
                            <a class="col-2 py-2 d-flex align-items-center justify-content-center" data-bs-toggle="collapse" href="#projectSubmenu" role="button" >
                                <i class="fas fa-caret-down"></i>
                            </a>
                        </div>
                        <ul class="collapse list-unstyled" id="projectSubmenu">
                            <li>
                                
                                <a href="{{ route('projects.discordbot') }}">
                                    <i class="fab fa-discord fa-lg"></i>
                                    <span>Discord Bot</span>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ route('projects.dormnet') }}">
                                    <i class="fas fa-network-wired fa-lg"></i>
                                    <span>Dormnet</span>
                                </a>
                            </li>
                            <li>
                                
                                <a href="{{ route('projects.lnmp') }}">
                                    <i class="fab fa-laravel fa-lg"></i>
                                    <span>LNMP</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}">
                            <i class="fab fa-blogger  fa-lg"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">
                            <i class="fas fa-link  fa-lg"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
                <footer>
                    <p>©LxS 2021 All rights reserved</p>
                    <p>Last Update:20210522</p>
                </footer>
            </nav>
        </div>
        <section id="section" class="g-0">
            <button id="btn-back-to-top" type="button" class="btn btn-floating btn-lg">
                <i class="fas fa-arrow-up"></i>
            </button>
            <!-- Top Navigation Bar -->
            <div class="container-fluid">
                <button type="button" id="sidebarToggleBtn" onclick="sidebarToggle()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
                @yield('content')
            </div>
            {{-- Bakcground Effect --}}
            <div id="particles-js"></div>
        </section>
    </div>
    <!-- Script -->
    <script>
        const particlesJS = window.particlesJS;
        particlesJS.load('particles-js', '{{asset('js/particles.json')}}', function() {
            console.log('callback - particles.js config loaded');
        });
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>