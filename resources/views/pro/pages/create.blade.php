@extends('pro.main')
@section('content')
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid container-md py-3">
            <form method="post" action="/data" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <h6 for="so"> SO</h6>
                    <input type="text" class="form-control" id="so" name="so" value="{{ Session::get('so') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="brand">Brand</h6>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ Session::get('brand') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="artikel">Artikel</h6>
                    <input type="text" class="form-control" id="artikel" name="artikel" value="{{ Session::get('artikel') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="total">Total</h6>
                    <input type="text" class="form-control" id="total" name="total" value="{{ Session::get('total') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="output">Output</h6>
                    <input type="text" class="form-control" id="output" name="output" value="{{ Session::get('output') }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="foto">Foto</h6>
                    <img class="py-3" id="imagePreview" src="#" alt="Preview" style="max-width: 100%; max-height: 200px; display: none;">
                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="emailHelp" onchange="previewImage(this)">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
