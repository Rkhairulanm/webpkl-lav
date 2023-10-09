@extends('pro.main')
@section('content')

    <body class="g-sidenav-show  bg-gray-100">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


            <div class="container-fluid py-3">

                <h2 class="ms-3 py-3 text-dark">Data Produksi Terbaru</h2>
                <div class="container-lg">
                    <table border="1" id="tabel" class="table border" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Sales Order</th>
                                <th>Brand</th>
                                <th>Article</th>
                                <th>Total</th>
                                <th>Output</th>
                                <th>Remain</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($data as $i)
                            <tr>
                                <td>
                                    <img style="max-width: 100px;max-height:100px" src="{{ url('foto').'/'.$i->foto }}">
                                </td>
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
