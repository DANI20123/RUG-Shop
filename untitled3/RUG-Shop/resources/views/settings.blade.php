<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Настройки</title>
    <style>
 body{
    background: #343a40;
 }
        .container{
            width: 500px;

        }

        .h3{
            color: #f7f7f9;
        }
    </style>
</head>
<body class="text-center " >
<nav class="navbar navbar-dark bg-dark navbar-expand-lg"><!--dark, success - цвета.
  если убрать navbar-expand-lg, то кнопка появится сразу, игнорируя размер экрана-->
    <div class="container">



        <a href="#" class="navbar-brand" ><img style="border-radius: 120px" class="" src="https://avatars.mds.yandex.net/get-yapic/40138/YE0dGQWlzN6whqMXIS9ZLFhkW0-1/islands-middle" alt="" width="32" height="32">  RUG</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <!--Toggler! Не toggle-->
            <span class="navbar-toggler-icon"></span> <!--Черточки-->
        </button>

        <div class="navbar-collapse collapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/home" class="nav-link">Домой <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="/settings" class="nav-link">Настройки</a>
                </li>

                <li class="nav-item">
                    <a href="/News" class="nav-link">Новости</a>
                </li>
                <li class="nav-item">
                    <a href="/info" class="nav-link">О нас</a>
                </li>
                <li class="nav-item">
                    <a href="/Light" class="nav-link">Каталог игр</a>
                </li>
                <li class="nav-item">
                    <a href="/help" class="nav-link">Пожелания и отзывы</a>
                </li>
            </ul>


        </div>

    </div>
</nav>
<div class="jumbotron bg-lilac">
    <h1 class="display-4 ">Настройки аккаунта</h1>
    <p class="lead">

    </p>
    <hr class="my-4">
    <p class="lead">Тут вы можете изменить свои данные,вписав в строку нужное значение</p>

</div>

<div class="container bg-dark">
    <form method="POST" action="/settings/save">
        @csrf
        <img style="border-radius: 120px" class="mb-4" src="https://cdn2.iconfinder.com/data/icons/communication-486/1000/accounts_communication___profile_account_user_maintenance_settings_preferences_options-128.png" alt="" width="92" height="92">
        <h1 class="h3 mb-3 fw-normal" style="   color: #3fc990;">Настройки</h1>
        <div class="form-floating">

            <input type="text" class="form-control" id="name" value="{{$data->name}}" name="name" placeholder="Владимир">
            <label class="h3" for="floatingInput">Новое имя</label>

        </div>
        <br>

        <div class="form-floating">
            <input type="text" class="form-control" value="{{$data->surname}}" id="surname" name="surname" placeholder="Романов">
            <label class="h3" for="floatingInput">Новая фамилия</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="text" class="form-control" value="{{$data->MiddleName}}" id="MiddleName" name="MiddleName" placeholder="Александрович">
            <label class="h3" for="floatingInput">Новое отчество</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="number" class="form-control" value="{{$data->PassportNmber}}" id="PassportNmber" name="PassportNmber" placeholder="Номер паспорта">
            <label class="h3" for="floatingPassword">Новый номер паспорта</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="number" class="form-control" value="{{$data->PassportSeries}}" id="PassportSeries" name="PassportSeries" placeholder="Серия паспорта">
            <label class="h3" for="floatingPassword">Новая серия паспорта</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="email" class="form-control" value="{{$data->email}}" id="email" name="email" placeholder="name@example.com">
            <label class="h3" for="floatingInput">Новое email</label>
        </div>
        <br>
        <div class="form-floating">
            <input  type="password" class="form-control"  id="password" name="password" placeholder="Password">
            <label class="h3" for="floatingPassword">Новый пароль</label>
        </div>
        <br>
        <div class="form-floating">
            <input  type="text" class="form-control" value="{{$data->avatar}}"  id="avatar" name="avatar" placeholder="Avatar">
            <label class="h3" for="floatingPassword">Новая аватарка</label>
        </div>


        <button class="w-100 btn btn-lg btn-success"  type="submit">сохранить</button>




    </form>

    <p class="mt-5 mb-3 text-muted">© 2022–2023</p>
</div>


<footer>
    <hr>
    <p>
        &copy; Все права защищены
    </p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
