@if($documentos->where('clasificacion', $clasif)->count() != 0)
    <li class="list-group-item">{{ $clasif }}</li>
@endif