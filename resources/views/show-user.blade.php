
<h1>Информация о пользователе</h1>

<br>

@if ($user)
  <p>id: {{$user->id }}</p>
  <p>Имя: {{ $user->name }}</p>
  <p>Почта: {{ $user->email}}</p>
  @else
  <p>Пользователь не зарегистрирован</p> 
@endif



<br>