<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use App\Models\Post;
use App\Models\Posts;
use App\Models\User;
use App\Models\Users;
use Core\Controller;
use Illuminate\Database\Capsule\Manager;
use Symfony\Component\HttpFoundation\Request;

class Home extends Controller
{

    public $middlewareBefore = [
        CheckAuth::class
    ];

    public function main(Request $request)
    {
//        if ($request->getMethod() === 'POST'){
//            $this->validator->rule('required', ['username', 'password', 'password_again'])
//                ->rule('equals', 'password', 'password_again');
//            $this->validator->labels([
//                'username' => 'Kullanıcı adı',
//                'password' => 'Parola',
//                'password_again' => 'Parola Tekrarı'
//            ]);
//            if ($this->validator->validate()){
////                print_r($this->validator->data());
//            } else {
////                print_r($this->validator->errors());
//            }
//        }

        if ($request->getMethod() === 'POST') {
            $this->validator->rule('required', ['content']);
            $this->validator->labels([
                'content' => 'İçerik'
            ]);
            if ($this->validator->validate()) {
                $data = $this->validator->data();
                $data['user_id'] = 2;
                Post::create($data);
            }
        }

//        $posts = Manager::table('posts')
//            ->select(['posts.*', 'users.name as user_name'])
//            ->join('users', 'users.id', '=', 'user_id')
//            ->orderBy('posts.id', 'asc')
//            ->get();

//        $posts = Posts::all();
//        $user = User::find(2);
//        $posts = $user->posts;

        $posts = Post::all();
        return $this->view('home', compact('posts'));
    }

    public function uyelerSayfasi()
    {
        return 'deneme sayfası';
    }

}