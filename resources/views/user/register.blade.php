@extends('pro.main')
@section('content')
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid container-md py-3">
            <form method="post" action="/register/create" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <h6 for="nik"> NIK</h6>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ Session::get('nik') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="name">Name</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ Session::get('name') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="email">Email</h6>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Session::get('email') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="password">Password</h6>
                    <input type="password" class="form-control" id="password" name="password" value="{{ Session::get('password') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="foto">Foto</h6>
                    <img class="py-3" id="imagePreview" src="#" alt="Preview" style="max-width: 100%; max-height: 200px; display: none;">
                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="emailHelp" onchange="previewImage(this)" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
