@extends('layout')

@section('title', 'Anasayfa')

@section('content')
    <form action="" method="post">
        <ul>
            <li>
                <input type="text" value="@getData('username')" class="@hasError('username')" placeholder="Kullanıcı adı" name="username">
                @getError('username')
            </li>
            <li>
                <input type="password" placeholder="Parola" name="password">
                @getError('password')
            </li>
            <li>
                <input type="password" placeholder="Parola (Tekrar)" name="password_again">
                @getError('password_again')
            </li>
            <li>
                <button type="submit">Gönder</button>
            </li>
        </ul>
    </form>
@endsection