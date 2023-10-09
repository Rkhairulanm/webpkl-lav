@extends('pro.main')
@section('content')
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid container-md py-3">
            <form method="post" action="{{ '/data/'.$data->so}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <h3>Sales Order : {{ $data->so }}</h3>
                </div>
                <div class="mb-3">
                    <h6 for="brand">Brand</h6>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{ $data->brand }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="artikel">Artikel</h6>
                    <input type="text" class="form-control" id="artikel" name="artikel" value="{{ $data->artikel }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="total">Total</h6>
                    <input type="text" class="form-control" id="total" name="total" value="{{ $data->total }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="output">Output</h6>
                    <input type="text" class="form-control" id="output" name="output" value="{{ $data->output }}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <h6 for="foto">Foto</h6>
                    <img id="preview-image" class="py-3" style="max-width: 250px; max-height: 250px" src="{{ url('foto').'/'.$data->foto }}">
                    <input type="file" class="form-control" id="foto" name="foto" aria-describedby="emailHelp" onchange="previewImage(this)">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
