@if ($errors->any())
    <div class="alert-danger rounded">
        <ul>
            @foreach ($errors->all() as $r)
                <li>{{ $r }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session::get('success'))
    <div class="alert-success rounded">
        {{ Session::get('success') }}
    </div>
@endif
