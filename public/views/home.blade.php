@extends('layout')

@section('title', 'Anasayfa')

@section('content')
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

    <form action="" method="post">
        <textarea name="content" cols="30" class="@hasError('content')" rows="5"></textarea> <br>
        @getError('content')
        <button type="submit">Kaydet</button>
    </form>

    <ul>
        @foreach($posts as $post)
            <li>
                #{{ $post->id }} <br>
                {{ $post->content }} <br>
                Ekleyen: {{ $post->user->name }}
            </li>
        @endforeach
    </ul>

@endsection