<?php

namespace Controller;

use Model\Adress_book;
use Model\Post;
use Model\News;
use Model\Adressbook;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{

    public function news(Request $request): string
    {
        $news = News::all();
        return new View('site.news', ['news' => $news]);
    }
    public function newsview(Request $request): string
    {
        $news = News::where('id', $request->id)->first();
        //var_dump($room[0]->name); die();
        return (new View())->render('site.newsview', ['news' => $news]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function Subdivisions(): string
    {
        $room = Adress_book::all();
        return new View('site.Subdivisions', ['room' => $room]);
    }

    public function AddUser(Request $request): string
    {
        if ($request->method === 'POST') {

            if($address_book = Adress_book::create($request->all())){
                $address_book->save();
                app()->route->redirect('/Subdivisions');
            }
        }
        return new View('site.addAdressBook');
    }

    public function signup(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required', 'cyrillic'],
                'login' => ['required', 'unique:users,login', 'latinNumber'],
                'password' => ['required', 'latinNumber']
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'Поле :field может состоять из кириллицы и латиницы',
                'number' => 'Поле :field должно состоять из цифр',
                'latinNumber' => 'Поле :field должно состоять из латинских букв или цифр',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup', ['message' => $validator->errors()]);
            }   else{

            $address_book = User::create($request->all());
            app()->route->redirect('/login');
             }
        }

        return new View('site.signup');
    }

    public function roomView(Request $request): string
    {
       $room = Adress_book::where('id', $request->id)->first();
        //var_dump($room[0]->name); die();
        return (new View())->render('site.roomView', ['room' => $room]);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }

        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }

        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function searchdb(Request $request): string
    {
       // var_dump($request->search); die();
        $room = Adress_book::where('adress','LIKE',"%{$request->search}%")->get();

        //var_dump($room[0]); die();
        return (new View())->render('site.searchdb', ['room' => $room]);
    }

    public function newsCreate(Request $request): string
    {

        if ($request->method === 'POST') {

                $project = News::create($request->all());
                $project->photo($_FILES['photo']);
                $project->save();
                app()->route->redirect('/news');


        }
        return new View('site.newsCreate');

    }
    public function newsUpdate(Request $request): string
    {
        $news = News::where('id', $request->id)->get();

        if ($request->method === 'POST') {
                $news[0]->discription = $request->discription;
                $news[0]->title = $request->title;
                $news[0]->photo($_FILES['photo']);
                $news[0]->save();
                app()->route->redirect('/news');

        }
        return new View('site.newsUpdate', [ 'news' => $news ]);

    }
    public function destroy(Request $request): string
    {
        if ($request->method === 'POST') {

            $news = News::where('id', $request->id)->get();
            $news->each->delete();
            app()->route->redirect('/news');

        }
        return new View('site.newsDestroy', [ 'news' => $news ]);
    }





}
