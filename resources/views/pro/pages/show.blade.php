@extends('pro.main')
@section('content')

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
            <div class="container-fluid container-md py-5 ">
                <div class="row shadow-lg">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body justify-content-center">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Sales Order</th>
                                            <td>{{ $data->so }}</td>
                                        </tr>
                                        <tr>
                                            <th>Brand</th>
                                            <td>{{ $data->brand }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>{{ $data->total }}</td>
                                        </tr>
                                        <tr>
                                            <th>Output</th>
                                            <td>{{ $data->output }}</td>
                                        </tr>
                                        <tr>
                                            <th>Remain</th>
                                            <td>{{ $data->total - $data->output }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('foto').'/'.$data->foto }}" alt="Gambar" class="img-fluid rounded">
                    </div>
                </div>
                <div class="pt-4">
                    <a href="/data"><button class="btn btn-primary">Back</button></a>
                </div>
            </div>
        </main>
    </body>
@endsection
