@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Classificar Restaurante - {{ $restaurant->name }}</h1>
<h2>Contacto: {{ $restaurant->email }}</h2>

<form method="POST" action="{{ route('ratings.store', ['id' => $restaurant->id]) }}">
	{!! csrf_field() !!}
    <div>
        Nome
        <input type="text" name="username" value="{{ old('name') }}">
    </div>

    <div>
        Comentário
        <input type="textarea" name="comment">
    </div>

    <div>
        <select name="value">
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        	<option value="5">5</option>
        </select>
    </div>

    <div>
        <button type="submit">Classificar</button>
    </div>
</form>