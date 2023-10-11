<nav class="navbar navbar-expand-lg bg-info navbar-dark shadow-lg">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="navbar-dark">
            <h6 class="font-weight-bolder mb-0 text-light">{{ $title }}</h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-light active" aria-current="page">Hi {{ Auth::user()->name }}</li>
            </ol>
        </nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#6C757D; font-size:28px;"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="/dashboard">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="/data">
                        <i class="fas fa-database"></i> Data
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="/profile">
                        <i class="fas fa-user"></i> Profile
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="/register">
                        <i class="fas fa-user-plus"></i> Register
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link text-light" href="/logout">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
