@if($temas->isEmpty() && $subtemas->isEmpty())
    <p>No se encontraron resultados.</p>
@else
    <h2>Temas encontrados:</h2>
    @foreach($temas as $tema)
        <p><a href="{{ route('tema.show', $tema->id) }}">{{ $tema->nombre }}</a></p>
    @endforeach

    <h2>Subtemas encontrados:</h2>
    @foreach($subtemas as $subtema)
        <p><a href="{{ route('subtema.show', $subtema->id) }}">{{ $subtema->nombre }}</a></p>
    @endforeach
@endif
