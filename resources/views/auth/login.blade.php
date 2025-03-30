<form method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Contraseña">
    <button type="submit">Ingresar</button>
</form>
<a href="{{ route('register') }}">Registrarse</a>
