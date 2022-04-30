<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Вход</title>
    <style>

        body{
            display: flex;
            align-items: center;
            padding-bottom: 200px;
            padding-top: 200px;
            background-image: url("https://www.wealthmanagement.com/sites/wealthmanagement.com/files/UnitedPlanners_Cybersecurity_WhitePaper_iStock-614137876-3_1.jpg");
        }
        .form-signin{
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        form{
            display: block;
            margin-top: 0em;
        }
        *, ::after, ::before{
            box-sizing: border-box;
        }
        main{
            display: block;
        }

        .text-center{
            text-align: center!important;

        }
    </style>
</head>
<body class="text-center">

<div class="container mt-4" id="block">

    <main class="form-signin">
        <!--Вывод ошибок с валидации-->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="/home/page">
            @csrf
            <img style="border-radius: 120px" class="mb-4" src="https://deadlylaugh.ru/group/id-111111149/photo/l/d4e72688a146fca69b33f015b22d384a.png" alt="" width="92" height="92">
            <h1 class="h3 mb-3 fw-cursiv" style="   color: #f7f7f9;">Войдите пожалуйста</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                <label for="floatingInput">Имя</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Bойти</button>



            <h1 class="h5 mb-3 fw-bold" style="color:#f7f7f9;"><a class="nav-link" style="color:#f7f7f9;"href="/register">Зарегистрироваться</a></h1>
            <p class="mt-5 mb-3 text-muted">© 2022–2023</p>
        </form>
    </main>

</div>

</body>
</html>
