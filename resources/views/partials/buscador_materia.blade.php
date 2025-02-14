<form class="form-inline" method="POST" action="{{ route('home.buscar') }}">
    @csrf
    <input 
        id="clavemat" 
        type="text" 
        class="form-control{{ $errors->has('clavemat') ? ' is-invalid' : '' }}" 
        name="clavemat" 
        value="{{ old('clavemat') }}" 
        placeholder="Clave de la materia" 
        required autofocus>
    @if ($errors->has('clavemat'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('clavemat') }}</strong>
        </span>
    @endif
    <button type="submit" class="btn btn-primary">{{ __("Buscar") }}</button>
</form>