@extends('pro.main')
@section('content')

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


            <div class="container-fluid py-3">

                <h2 class="ms-3 py-3 text-dark">Pendataan Produksi</h2>
                <div class="container-lg">
                    <a href="/data/create" class="btn btn-primary">Tambah</a>
                    <table border="1" id="tabel" class="table border" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Sales Order</th>
                                <th>Brand</th>
                                <th>Article</th>
                                <th>Total</th>
                                <th>Output</th>
                                <th>Remain</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($data as $i)
                            <tr>
                                <td>
                                    {{ $i->so }}
                                </td>
                                <td>
                                    {{ $i->brand }}
                                </td>
                                <td>
                                    {{ $i->artikel }}
                                </td>
                                <td>
                                    {{ $i->total }}
                                </td>
                                <td>
                                    {{ $i->output }}
                                </td>
                                <td>
                                    {{ $i->total - $i->output }}
                                </td>
                                <td>
                                    <a class="btn btn-info btn-md" href="{{ url('/data/' . $i->so) }}">Detail</a>
                                    <a class="btn btn-warning btn-md"
                                        href="{{ url('/data/' . $i->so . '/edit') }}">Edit</a>
                                    <form onsubmit="return confirm('Rill Delete?')" class="d-inline"
                                        action="/data/{{ $i->so }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Del</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </main>
    </body>
@endsection
