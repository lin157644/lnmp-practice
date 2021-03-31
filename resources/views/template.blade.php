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
    <title>XiangShun's profile</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="wrapper">
        <nav id="sidebar" :class="{ active: isActive }">
            <div class="sidebarHeader">
                <p class="h3">Navigation</p>
            </div>
            <ul class="list-unstyled">
                <p>Xiang-Shun</p>
                <li>
                    <a href="/index.html">Home</a>
                </li>
                <li>
                    <a href="/index.html">Profile</a>
                </li>
                <li>
                    <a data-bs-toggle="collapse" href="#projectSubmenu" role="button" aria-expanded="false" aria-controls="projectSubmenu">Projects</a>
                    <ul class="collapse list-unstyled" id="projectSubmenu">
                        <li>
                            <a href="#">Discord Bot</a>
                        </li>
                        <li>
                            <a href="#">RPI</a>
                        </li>
                        <li>
                            <a href="#">Web</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/index.html">Contect</a>
                </li>
            </ul>
            <footer>
                <p>©LxS 2021 All rights reserved</p>
                <p>Last Update:20210309</p>
            </footer>
        </nav>
    
        <!-- Top Navigation Bar -->
        <div id="content">
            <nav id="topNavbar" class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarToggleBtn" class="btn btn-info" onclick="sidebarToggle()">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script> --}}
</body>
</html>