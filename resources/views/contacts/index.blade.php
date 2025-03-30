@foreach($contacts as $contact)
    <p>{{ $contact->name }} - {{ $contact->phone }}</p>
    <a href="{{ route('contacts.edit', $contact) }}">Editar</a>
    <form method="POST" action="{{ route('contacts.destroy', $contact) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endforeach
<a href="{{ route('contacts.create') }}">Nuevo Contacto</a>
