@if ($comic->exists)
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
    @else
        <form action="{{ route('comics.store') }}" method="POST">
@endif
@csrf
<div class="mb-3">
    <label for="comics_title" class="form-label">Comic's Title</label>
    <input type="text" class="form-control" id="comics_title" placeholder="Add Comic's Title..." name="title"
        value="{{ old('title', $comic->title) }}">
</div>
<div class="mb-3">
    <label for="comics_series" class="form-label">Comic's Series</label>
    <input type="text" class="form-control" id="comics_series" placeholder="Add Comic's Series..." name="series"
        value="{{ old('series', $comic->series) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_sale_date" class="form-label">Comic's Sale Date</label>
    <input type="text" class="form-control" id="comics_sale_date" placeholder="Add Comic's Sale Date (YYY-MM-DD)..."
        name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_price" class="form-label">Comic's Price</label>
    <input type="text" class="form-control" id="comics_price" placeholder="Add Comic's Price..." name="price"
        value="{{ old('price', $comic->price) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_type" class="form-label">Comic's Type</label>
    <input type="text" class="form-control" id="comics_type" placeholder="Add Comic's Type..." name="type"
        value="{{ old('type', $comic->type) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_writers" class="form-label">Comic's Writers</label>
    <input type="text" class="form-control" id="comics_writers" placeholder="Add Comic's Writers..." name="writers"
        value="{{ old('writers', $comic->writers) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_artists" class="form-label">Comic's Artists</label>
    <input type="text" class="form-control" id="comics_artists" placeholder="Add Comic's Artists..." name="artists"
        value="{{ old('artists', $comic->artists) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_thumb" class="form-label">Comic's Thumb</label>
    <input type="text" class="form-control" id="comics_thumb" placeholder="Add Comic's Thumb..." name="thumb"
        value="{{ old('thumb', $comic->thumb) }}"></input>
</div>
<div class="mb-3">
    <label for="comics_description" class="form-label">Comic's Description</label>
    <textarea type="text" class="form-control" id="comics_description" placeholder="Add Comic's Description..."
        name="description">{{ old('description', $comic->description) }}</textarea>
</div>
<div class="justify-content-evenly d-flex">
    <button class="text-center btn btn-success" type="submit">
        Aggiorna Fumetto!
    </button>
    @if ($comic->exists)
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-secondary">Go Back!</a>
    @else
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Go Back!</a>
    @endif
</div>
</form>
