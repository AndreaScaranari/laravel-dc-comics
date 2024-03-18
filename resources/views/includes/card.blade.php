<a href="{{ route('comics.show', $comic->id) }}">
    <div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->series }} cover">
        <div class="card-body">
            <ul class="list-unstyled">
                <li><b>{{ $comic->title }}</b></li>
                <li>{{ $comic->series }}</li>
                <li>{{ $comic->sale_date }}</li>
                <li>{{ $comic->price }}</li>
            </ul>
        </div>
    </div>
</a>
