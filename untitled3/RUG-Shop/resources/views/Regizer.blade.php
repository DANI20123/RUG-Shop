<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Регистрация</title>
    <style>

        body{
            display: flex;
            align-items: center;

            background-image: url("https://phonoteka.org/uploads/posts/2021-04/1618849850_20-phonoteka_org-p-kiberbezopasnost-fon-27.jpg");
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
        <form method="post"  action="/Registration">
            @csrf
            <img style="border-radius: 120px" class="mb-4" src="https://avatars.mds.yandex.net/get-yapic/40138/YE0dGQWlzN6whqMXIS9ZLFhkW0-1/islands-middle" alt="" width="92" height="92">
            <h1 class="h3 mb-3 fw-normal" style="   color: #f7f7f9;">Регистрация</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Владимир">
                <label for="floatingInput">Имя</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Романов">
                <label for="floatingInput">Фамилия</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Александрович">
                <label for="floatingInput">Отчество</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="number" class="form-control" id="PassportNmber" name="PassportNmber" placeholder="Номер паспорта">
                <label for="floatingPassword">Номер паспорта</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="number" class="form-control" id="PassportSeries" name="PassportSeries" placeholder="Серия паспорта">
                <label for="floatingPassword">Серия паспорта</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="text" value="https://cdn4.iconfinder.com/data/icons/mosaicon-05/512/user-128.png" class="form-control" id="avatar" name="avatar" placeholder="Avatar">
                <label for="floatingPassword">avatar</label>
            </div>
            <br>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>



            <p class="mt-5 mb-3 text-muted">© 2022–2023</p>
        </form>
    </main>

</div>

</body>
</html>

