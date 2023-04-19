<?php

namespace Controller;

use Model\Post;
use Model\Room;
use Model\Subvision;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
    public function Subdivisions(): string
    {
        $room = Room::all();
        return new View('site.Subdivisions', ['room' => $room]);
    }
    public function Subdivisions2(): string
    {
        $room = Room::all();
        return new View('site.Subdivisions2', ['room' => $room]);
    }

    public function Subdivisions3(): string
    {
        $room = Room::all();
        return new View('site.Subdivisions3', ['room' => $room]);
    }

    public function Calculations(): string
    {
        return new View('site.Calculations',);
    }
    public function CalculationsAnswer1(): string
    {
        $subvision = Subvision::all();
        return new View('site.CalculationsAnswer1', ['subvision' => $subvision]);
    }
    public function CalculationsAnswer2(): string
    {
        $subvision = Subvision::all();
        return new View('site.CalculationsAnswer2', ['subvision' => $subvision]);
    }
    public function SubdivisionsAnswer(): string
    {
        return new View('site.SubdivisionsAnswer', ['message' => 'SubdivisionsAnswer']);
    }
    public function AddUser(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.AddUser');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
    }

    public function roomView(Request $request): string
    {
       $room = Room::where('id', $request->id)->first();
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




}
