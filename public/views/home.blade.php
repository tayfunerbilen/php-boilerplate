@extends('layout')

@section('title', 'Anasayfa')

@section('content')

    @auth
        <h3>
            Hoşgeldin, {{ auth()->getName() }}
            <a href="http://localhost/boilerplate/logout">[Çıkış yap]</a>
        </h3>
    @endauth

    @guest
        <h3>
            Hoşgeldin ziyaretçi!
            <a href="http://localhost/boilerplate/login">[Giriş yap]</a>
            <a href="http://localhost/boilerplate/register">[Kayıt ol]</a>
        </h3>
    @endguest

    <form style="display: none" action="" method="post">
        <ul>
            <li>
                <input type="text" value="@getData('username')" class="@hasError('username')"
                       placeholder="Kullanıcı adı" name="username">
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

    @auth
        <form action="" method="post" enctype="multipart/form-data">
            <textarea name="content" cols="30" class="@hasError('content')" rows="5"></textarea> <br>
            @getError('content') <br>
            <input type="file" name="image" class="@hasError('image')"> <br>
            @getError('image') <br>
            <button type="submit">Kaydet</button>
        </form>
    @endauth

    <button type="button" id="fetch-posts">Konuları Getir</button>
    <ul id="result"></ul>

@endsection