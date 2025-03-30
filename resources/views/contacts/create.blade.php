<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <input type="text" name="name" required placeholder="Nombre">
    <input type="text" name="phone" required placeholder="Teléfono">
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('contacts.index') }}">Volver</a>
