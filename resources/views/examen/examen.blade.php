<h1>Exámenes</h1>
@if (!empty($areas) && count($areas) > 0)
    <ul>
        @foreach ($areas as $area)
            <li>
                <a href="{{ route('examen.show', ['id' => $area['id']]) }}">
                    {{ $area['nombre'] }}
                </a>
            </li>
        @endforeach
    </ul>
@else
    <p>No hay áreas disponibles.</p>
@endif
