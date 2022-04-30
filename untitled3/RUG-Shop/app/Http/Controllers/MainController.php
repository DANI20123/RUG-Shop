<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HomeModel;
use App\Models\NewsModel;
use Illuminate\Http\Request;



class MainController extends Controller
{


    //Переход на страницу с логином
    public function login()
    {
        session()->getHandler()->destroy('id');
        return view('login');
    }
//Переход на страницу регистрации
    public function register()
    {
        return view('Regizer');
    }
//Обработка логина
    public function processing(Request $request)
    {
        //Валидация
        $validator=$request->validate([
            'name'=>'required|min:4|max:10',
            'password'=>'required|min:4|max:10',
            'email'=>'required|min:4|max:100',
        ]);
        //Конец валидации
        //Обработка входа\\
        $review=new Contact();
        $name=$request->input('name');
        $email=$request->input('email');
        $password=password_hash($request->input('password') , PASSWORD_BCRYPT);

  $flag=false;
      foreach ($review->all() as $el)
        {

            if($el->name==$name&&
            $el->email==$email&&
                password_verify ($request->input('password') , $password ))
            {
                //Если прошла проверка то переходим на главную страницу
                session(['id'=>$el->id]);
$flag=true;


break;

            }
            else{
               $flag=false;
            }



        }

      if( $flag){
          return view('home',['data'=>$review->find($el->id)]);
      } else{
          echo '<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Главная страница</title>
    <style>
        .card{

        }
        .img-responsive
        {

            border-radius: 15px 15px 20px 20px;
            width: 50%;

        }
        .img-responsive:hover{
            transition: transform 700ms ease;
            transform: scale(1.05);
        }

        .btn btn-primary m-2{
            border-radius: 15px 15px 20px 20px;
        }
    </style>
</head><div class="container">
    <div class="alert alert-warning" id="main" >
       <h1 class="display-8">
           Ошибка.Проверьте еще раз свои данные
       </h1>
        <br>


        <br>
        <br>
        <form action="/"> <button class="w-100 btn btn-lg btn-primary" type="submit">Вернуться</button></form>

    </div>
</div';
      }

        }



//Обработка регистрации
    public function Registration(Request $request)
    {
        //Валидация
        $validator=$request->validate([
            'name'=>'required|min:4|max:10',
            'surname'=>'required|min:4|max:20',
            'MiddleName'=>'required|min:4|max:20',
            'PassportNmber'=>'required|min:4|max:10',
            'PassportSeries'=>'required|min:4|max:10',
            'password'=>'required|min:4|max:10',
            'email'=>'required|min:4|max:100',
        ]);
        //Конец валидации

//Создаем кеш пароля\\
        $password=password_hash($request->input('password') , PASSWORD_BCRYPT);

        //Регистрация\\
        $review=new Contact();
        $review->name=$request->input('name');
        $review->surname=$request->input('surname');
        $review->MiddleName=$request->input('MiddleName');
        $review->PassportNmber=$request->input('PassportNmber');
        $review->PassportSeries=$request->input('PassportSeries');
        $review->password=$password;
        $review->avatar=$request->input('avatar');
        //Проверяем нет ли совпадений в email\\
        foreach ($review->all() as $el)
        {
            if($el->email==$request->input('email'))
            {

               return redirect()->route('register');
            }

        }
        $review->email=$request->input('email');
        $review->save();
        //Конец Регистрации\\


        //Переход на главную страницу\\


        session(['id'=>$review->id]);

     return view('home',['data'=>$review->find($review->id)]);

       //Получение id: var_dump($review->id);
    }


    public function Light()
    {
        $homes=new HomeModel();
        return view('Light',['data'=>$homes->all()]);
    }
    //Переход на главную страницу сайта

    public function home()
    {
        $review=new Contact();
        return view('home',['data'=>$review->find(session()->get('id'))]);

    }

    //Переход на страницу новости
    public function News()
    {
        $data=new NewsModel();
        return view('News',['data'=>$data->all()]);
    }

    //Переход на страницу настройки\\
    public function settings()
    {
        $review=new Contact();
        return view('settings',['data'=>$review->find(session()->get('id'))]);
    }

    public function saveSettings(Request $request)
    {

        $password=password_hash($request->input('password') , PASSWORD_BCRYPT);


        $review=Contact::find(session()->get('id'));
        $review->name=$request->input('name');
        $review->surname=$request->input('surname');
        $review->MiddleName=$request->input('MiddleName');
        $review->PassportNmber=$request->input('PassportNmber');
        $review->PassportSeries=$request->input('PassportSeries');
        $review->password=$password;
        $review->avatar=$request->input('avatar');
        //Проверяем нет ли совпадений в email\\

        $review->email=$request->input('email');
        $review->save();
        return view('home',['data'=>$review->find($review->id)]);
    }


    public function info()
    {
        return view('info');
    }
    public function help()
    {
        return view('help');
    }


}
