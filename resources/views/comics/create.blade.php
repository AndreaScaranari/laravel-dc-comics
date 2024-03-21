<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>

<body>

    @include('includes.header')

    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="comics_title" class="form-label">Comic's Title</label>
                <input type="text" class="form-control" id="comics_title" placeholder="Add Comic's Title..."
                    name="title">
            </div>
            <div class="mb-3">
                <label for="comics_series" class="form-label">Comic's Series</label>
                <input type="text" class="form-control" id="comics_series" placeholder="Add Comic's Series..."
                    name="series"></input>
            </div>
            <div class="mb-3">
                <label for="comics_sale_date" class="form-label">Comic's Sale Date</label>
                <input type="text" class="form-control" id="comics_sale_date"
                    placeholder="Add Comic's Sale Date (YYY-MM-DD)..." name="sale_date"></input>
            </div>
            <div class="mb-3">
                <label for="comics_price" class="form-label">Comic's Price</label>
                <input type="text" class="form-control" id="comics_price" placeholder="Add Comic's Price..."
                    name="price"></input>
            </div>
            <div class="mb-3">
                <label for="comics_type" class="form-label">Comic's Type</label>
                <input type="text" class="form-control" id="comics_type" placeholder="Add Comic's Type..."
                    name="type"></input>
            </div>
            <div class="mb-3">
                <label for="comics_writers" class="form-label">Comic's Writers</label>
                <input type="text" class="form-control" id="comics_writers" placeholder="Add Comic's Writers..."
                    name="writers"></input>
            </div>
            <div class="mb-3">
                <label for="comics_artists" class="form-label">Comic's Artists</label>
                <input type="text" class="form-control" id="comics_artists" placeholder="Add Comic's Artists..."
                    name="artists"></input>
            </div>
            <div class="mb-3">
                <label for="comics_thumb" class="form-label">Comic's Thumb</label>
                <input type="text" class="form-control" id="comics_thumb" placeholder="Add Comic's Thumb..."
                    name="thumb"></input>
            </div>
            <div class="mb-3">
                <label for="comics_description" class="form-label">Comic's Description</label>
                <textarea type="text" class="form-control" id="comics_description" placeholder="Add Comic's Description..."
                    name="description"></textarea>
            </div>
            <button class="text-center btn btn-success" type="submit">
                Aggiungi Fumetto!
            </button>
        </form>
    </div>
</body>

</html>