<form method="POST" action="{{ route('contacts.update', $contact) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $contact->name }}" required>
    <input type="text" name="phone" value="{{ $contact->phone }}" required>
    <input type="email" name="email" value="{{ $contact->email }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('contacts.index') }}">Volver</a>
