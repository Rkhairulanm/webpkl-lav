<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder mb-0">{{ $title }}</h6>
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Hi {{ Auth::user()->name }}</li>
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
                    <a class="nav-link" href="/data">
                        <i class="fas fa-link"></i> Data
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="/profile">
                        <i class="fas fa-user"></i> Profile
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a href="/register" class="nav-link text-body font-weight-bold px-2">
                        <i class="fas fa-user-plus"></i> Add User
                    </a>
                </li>
                <li class="nav-item px-2">
                    <a href="/logout" class="nav-link text-body font-weight-bold px-2">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
