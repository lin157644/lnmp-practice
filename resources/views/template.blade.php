<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="希望透過本網站，能令各位審查委員與教授們更加認識我~">
    <meta name="author" content="SeanLin,linxs1010@gmail.com">
    <meta property="og:title" content="XiangShun's profile"/>
    <meta property="og:description" content="希望透過本網站，能令各位審查委員與教授們更加認識我~"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:image" content=""/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <script src="https://kit.fontawesome.com/bffc14945b.js" crossorigin="anonymous"></script>
    <title>XiangShun's profile</title>
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="wrapper">
        <nav id="sidebar" :class="{ active: isActive }">
            <div class="sidebarHeader">
                <p class="h3">LXS</p>
            </div>
            <ul class="list-unstyled">
                {{-- <p>Xiang-Shun</p> --}}
                <li>
                    <a class="sidebarItem" href="{{ route('index') }}">
                        <i class="fas fa-home fa-lg"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    
                    <a class="sidebarItem" href="{{ route('profile.index') }}">
                        <i class="fas fa-address-card fa-lg"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <div class="row gx-0">
                        <a class="col-10  py-2 sidebarItem" href="{{ route('projects.index') }}">
                            <i class="fas fa-terminal"></i>
                            Projects
                        </a>
                        <a class="col-2 py-2 d-flex align-items-center justify-content-center sidebarItem" data-bs-toggle="collapse" href="#projectSubmenu" role="button" >
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </div>
                    <ul class="collapse list-unstyled" id="projectSubmenu">
                        <li>
                            
                            <a class="sidebarItem" href="{{ route('projects.discordbot') }}">
                                <i class="fab fa-discord fa-lg"></i>
                                <span>Discord Bot</span>
                            </a>
                        </li>
                        <li>
                            
                            <a class="sidebarItem" href="{{ route('projects.dormnet') }}">
                                <i class="fas fa-network-wired fa-lg"></i>
                                <span>Dormnet</span>
                            </a>
                        </li>
                        <li>
                            
                            <a class="sidebarItem" href="{{ route('projects.lnmp') }}">
                                <i class="fab fa-laravel fa-lg"></i>
                                <span>LNMP</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebarItem" href="{{ route('blog.index') }}">
                        <i class="fab fa-blogger  fa-lg"></i>
                        Blog
                    </a>
                </li>
                <li>
                    <a class="sidebarItem" href="{{ route('contect') }}">
                        <i class="fas fa-link  fa-lg"></i>
                        Contect
                    </a>
                </li>
            </ul>
            <footer>
                <p>©LxS 2021 All rights reserved</p>
                <p>Last Update:20210404</p>
            </footer>
        </nav>
    
        <!-- Top Navigation Bar -->
        <div id="content">
            <nav id="topNavbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button type="button" id="sidebarToggleBtn" class="btn btn-dark" onclick="sidebarToggle()" >
                        <i class="fas fa-align-left"></i>
                        {{-- <span>Toggle Sidebar</span> --}}
                    </button>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function sidebarToggle()
        {
            let sidebar = document.getElementById("sidebar");
            let content = document.getElementById("content");

            sidebar.classList.toggle('active');
            content.classList.toggle('active');
        }
    </script>
</body>
</html>