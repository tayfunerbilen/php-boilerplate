@extends('layout')

@section('content')
    <form action="" method="post">
        <input type="text" class="@hasError('name')" value="@getData('name')" name="name" placeholder="Kullanıcı adı"> <br>
        @getError('name')
        <input type="password" name="password" class="@hasError('password')" placeholder="Şifre"> <br>
        @getError('password')
        <button type="submit">Giriş yap</button>
    </form>
@endsection