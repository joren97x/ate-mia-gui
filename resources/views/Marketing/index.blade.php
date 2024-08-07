<div>
    @foreach ($marketings as $marketing)
        <div>
            {{ $marketing }}
        </div>
        <br>
    @endforeach
    wala pa
    <a href="/marketings/create">Pag Create</a>
    <a href="/marketings/export">
        <button>Export these mfs to excel</button>
    </a>
</div>