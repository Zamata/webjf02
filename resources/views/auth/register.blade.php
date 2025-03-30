<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" required placeholder="Nombre">
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Contraseña">
    <input type="password" name="password_confirmation" required placeholder="Confirmar Contraseña">
    <button type="submit">Registrar</button>
</form>
<a href="{{ route('login') }}">Iniciar sesión</a>
