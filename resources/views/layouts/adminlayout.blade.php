<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rehan | Admin Panel</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #222;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================
           ADMIN LAYOUT
        ========================= */

        .admin-container {
            display: flex;
            min-height: 100vh;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #111827;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: 0.3s ease;
        }


        /* =========================
           LOGO
        ========================= */

        .logo-section {
            height: 80px;
            display: flex;
            align-items: center;
            padding: 0 22px;
            border-bottom: 1px solid #273244;
        }

        .logo-section img {
            width: 100px;
            height: 100%px;
            object-fit: contain;
            margin-right: 5px;
        }

        .logo-text h2 {
            font-size: 20px;
            color: white;
        }

        .logo-text span {
            font-size: 12px;
            color: #9ca3af;
        }


        /* =========================
           SIDEBAR MENU
        ========================= */

        .sidebar-menu {
            padding: 25px 15px;
            flex: 1;
        }

        .menu-title {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            margin: 0 10px 12px;
            letter-spacing: 1px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 13px 15px;
            margin-bottom: 7px;
            border-radius: 8px;
            color: #cbd5e1;
            font-size: 15px;
            transition: 0.2s;
        }

        .menu-item i {
            width: 20px;
            text-align: center;
        }

        .menu-item:hover {
            background: #1f2937;
            color: white;
        }

        .menu-item.active {
            background: #2563eb;
            color: white;
        }


        /* =========================
           SIDEBAR BOTTOM
        ========================= */

        .sidebar-bottom {
            padding: 15px;
            border-top: 1px solid #273244;
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        .main-area {
            margin-left: 250px;
            width: calc(100% - 250px);
            min-height: 100vh;
        }


        /* =========================
           TOP BAR
        ========================= */

        .topbar {
            height: 80px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .menu-btn {
            display: none;
            border: none;
            background: #f3f4f6;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        .topbar h3 {
            font-size: 20px;
        }

        .admin-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }


        /* =========================
           PAGE CONTENT
        ========================= */

        .content {
            padding: 30px;
        }


        /* =========================
           OVERLAY
        ========================= */

        .sidebar-overlay {
            display: none;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .sidebar {
                left: -250px;
            }

            .sidebar.open {
                left: 0;
            }

            .main-area {
                margin-left: 0;
                width: 100%;
            }

            .menu-btn {
                display: block;
            }

            .sidebar-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 999;
            }

            .sidebar-overlay.show {
                display: block;
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 20px;
            }

            .admin-user span {
                display: none;
            }
        }

    </style>
</head>


<body>

    <div class="admin-container">

        <!-- =========================
             SIDEBAR
        ========================== -->

        <aside class="sidebar" id="sidebar">

            <!-- LOGO -->

            <div class="logo-section">

                <!-- Change this image path to your logo -->
                <img src="projectimages\1789371078.png" alt="Rehan Logo">

                <div class="logo-text">
                    <h2>Rehan</h2>
                    <span>full stack developer</span>
                </div>

            </div>


            <!-- MENU -->

            <div class="sidebar-menu">

                <div class="menu-title">
                    Main Menu
                </div>


                <!-- Dashboard -->

                <a href="{{ url('/admin') }}" class="menu-item">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>


                <!-- Add Project -->

                <a href="{{ route('addproject') }}" class="menu-item">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add Project</span>
                </a>


                <!-- Projects -->

                <a href="{{ route('projectlist') }}" class="menu-item">
                    <i class="fa-solid fa-folder"></i>
                    <span>Projects</span>
                </a>


                <!-- Enquiries -->

                <a href="{{ route('enquiries') }}" class="menu-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Enquiries</span>
                </a>





<!--add user-->


 <a href="/adminRegister" class="menu-item">
                    <i class="fa-solid fa-user"></i>
                    <span>Add user</span>
                </a>



            </div>


            <!-- BOTTOM -->

            <div class="sidebar-bottom">
                <form action="/logout" method="post">
    @csrf
   
    <button type="submit" class="menu-item" id="logoutBtn"> <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
</form>

            </div>

        </aside>


        <!-- OVERLAY -->

        <div class="sidebar-overlay" id="sidebarOverlay"></div>


        <!-- =========================
             MAIN AREA
        ========================== -->

        <div class="main-area">


            <!-- TOP BAR -->

            <header class="topbar">

                <div class="topbar-left">

                    <button class="menu-btn" id="menuBtn">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <h3>Admin Panel</h3>

                </div>


                <div class="admin-user">

                    <div class="admin-avatar">
                        {{ Auth::user()->name[0] }}
                    </div>

                    <span>{{ Auth::user()->name }}</span>

                </div>

            </header>


            <!-- =========================
                 PAGE CONTENT
            ========================== -->

            <main class="content">

                @yield('pageContent')

            </main>

        </div>

    </div>


    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const sidebar = document.getElementById("sidebar");
            const menuBtn = document.getElementById("menuBtn");
            const overlay = document.getElementById("sidebarOverlay");


            /* =========================
               MOBILE MENU
            ========================== */

            if (menuBtn) {

                menuBtn.addEventListener("click", function () {

                    sidebar.classList.toggle("open");
                    overlay.classList.toggle("show");

                });

            }


            /* =========================
               CLOSE SIDEBAR
            ========================== */

            if (overlay) {

                overlay.addEventListener("click", function () {

                    sidebar.classList.remove("open");
                    overlay.classList.remove("show");

                });

            }


            /* =========================
               ACTIVE MENU
            ========================== */

            const currentPath = window.location.pathname;

            const menuItems = document.querySelectorAll(".menu-item");

            menuItems.forEach(function (item) {

                const link = item.getAttribute("href");

                if (link && link !== "#") {

                    const linkPath = new URL(link, window.location.origin).pathname;

                    if (linkPath === currentPath) {
                        item.classList.add("active");
                    }

                }

            });


            /* =========================
               CLOSE MOBILE MENU
            ========================== */

            menuItems.forEach(function (item) {

                item.addEventListener("click", function () {

                    if (window.innerWidth <= 768) {

                        sidebar.classList.remove("open");
                        overlay.classList.remove("show");

                    }

                });

            });


            
              
    </script>

</body>

</html>