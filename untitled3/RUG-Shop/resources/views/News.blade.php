<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Новости</title>
</head>
<body class="text-center ">
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
                    <a href="home" class="nav-link">Домой <span class="sr-only">(current)</span></a>
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
    <h1 class="display-4 ">  <img style="border-radius: 120px" class="mb-4" src="https://www.pngitem.com/pimgs/m/274-2740721_kale-transparent-telugu-name-news-and-information-png.png" alt="" width="52" height="52">
        Новости</h1>
    <p class="lead">

    </p>
    <hr class="my-4">
    <p class="lead"> Приятного просмотра</p>

</div>
<div class="row">
@for($i=count($data)-1;$i>0;$i--)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$data[$i]->header}}</h5>
                    <p class="card-text">
                        {{$data[$i]->description}}
                    </p>
                    <img src="{{$data[$i]->src}}" alt="" class="img-fuid" width="250px" height="250px">
                </div>
            </div>
        </div>
        <br>
    @endfor

</div>
<footer>
    <hr>
    <p>
        &copy; Все права защищены
    </p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</footer>
</body>
</html>
