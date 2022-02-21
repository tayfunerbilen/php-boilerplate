<?php

namespace App\Controllers;

use App\Middlewares\CheckAuth;
use App\Models\Post;
use App\Models\Posts;
use App\Models\User;
use App\Models\Users;
use Carbon\Carbon;
use Core\Controller;
use Illuminate\Database\Capsule\Manager;
use Symfony\Component\HttpFoundation\Request;

class Home extends Controller
{

//    public $middlewareBefore = [
//        CheckAuth::class
//    ];

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

            $upload = upload('image')->onlyImages();
            if ($error = $upload->error()){
                $this->validator->error('image', $error);
            }

            if ($this->validator->validate()) {

                $original = $upload->to('upload/posts');
                $small = $upload->resize(500)->prefix('small')->to('upload/posts');

                $data = $this->validator->data();
                $data['user_id'] = auth()->getId();
                $data['image'] = json_encode([
                    'small' => $small->getFileWithPath(),
                    'original' => $original->getFile()
                ]);

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

    public function tarihler()
    {

        echo Carbon::parse('2021-05-02 11:10:32')->add(1, 'year')->diffForHumans();

        $periods = Carbon::parse('2021-05-01')->daysUntil('2021-05-23', 5);
        foreach ($periods as $period) {
            echo $period->toIso8601String() . '<br>';
        }

    }

}