<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow align-items-center">

    <!-- Sidebar Toggle (Topbar) -->
    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button> -->

    <!-- Topbar Search -->
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search shadow-lg border border-5"
        action="search_products.php" method="post">
        <div class="input-group">
            <input name="search_item" type="text" class="form-control bg-white border-0 small px-4"
                placeholder="Search for Products..." aria-label="Search" aria-describedby="basic-addon2" required autocomplete="off">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <!-- <i class="fas fa-search fa-sm"></i> -->
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ms-auto my-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link btn btn-outline-danger border-danger mt-1" href="logout.php"
                onclick="return confirm('Are you sure to logout?')" role="button" style="height: 40px">
                <i class="fa-solid fa-right-from-bracket text-dark"></i>
            </a>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->