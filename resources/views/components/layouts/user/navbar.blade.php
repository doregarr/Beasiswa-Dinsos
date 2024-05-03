
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index1.php" class="logo d-flex align-items-center">
                <img src="assets/img/logopol.png" alt="">
                <span class="d-none d-lg-block">Beasiswa Dinsos User</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle"></i>
                        <span class="d-none d-md-block ps-2" >{{ session('name') }}</span>
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/biodata">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="/biodata/data-pribadi">
                    <i class="bi bi-person"></i>
                    <span>Formulir Pendaftran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="index1.php">
                    <i class="bi bi-person"></i>
                    <span>My View Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ route('logout') }}">
                    <i class="bi bi-grid"></i>
                    <span>Log-Out</span>
                </a>
            </li>

    </aside>
