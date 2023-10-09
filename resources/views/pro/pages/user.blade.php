@extends('pro.main')
@section('content')

<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container-fluid container-md py-5 ">
            <div class="row shadow-lg align-items-center py-5">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>NIK</th>
                            <td>{{ $data->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
@endsection
