@extends('pro.main')

@section('content')
<body class="g-sidenav-show bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid py-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ url('foto') . '/' . $user->foto }}" alt="Gambar" class="rounded-circle img-fluid shadow-lg" style="max-width: 200px;">
                        <h3 class="mt-3"><b>User Profile</b></h3>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 offset-md-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="fw-bold">NIK:</span> {{ $user->nik }}
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Nama:</span> {{ $user->name }}
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Email:</span> {{ $user->email }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection
