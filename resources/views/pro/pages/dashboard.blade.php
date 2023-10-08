@extends('pro.main')
@section('content')
<body class="g-sidenav-show  bg-gray-100">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @extends('component.message')
        <div class="container-fluid">
            <a href="/siswa/create" class="btn btn-primary">Tambah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i)
                        <tr>
                            <td>
                                @if ($i->foto)
                                    <img style="max-width: 50px" class="rounded-bottom" src="{{ url('foto').'/'.$i->foto }}" alt="">
                                @endif
                            </td>
                            <td>
                                {{ $i->NIK }}
                            </td>
                            <td>
                                {{ $i->nama }}
                            </td>
                            <td>
                                {{ $i->alamat }}
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-md" href="{{ url('/siswa/' . $i->NIK) }}">Detail</a>
                                <a class="btn btn-secondary btn-md" href="{{ url('/siswa/' . $i->NIK . '/edit') }}">Edit</a>
                                <form onsubmit="return confirm('Rill Delete?')" class="d-inline" action="/siswa/{{ $i->NIK }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Del</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
