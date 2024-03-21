@if ($errors->any())
    <div class="bg-danger text-white rounded p-3  mb-3">
        Gli errori presenti in pagina sono i seguenti:
        <ul class="m-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
