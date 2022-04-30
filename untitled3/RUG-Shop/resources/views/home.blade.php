<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Главная страница</title>
    <style>



.jumbotron{
    background-image: url("https://avatars.mds.yandex.net/get-games/2977039/2a0000017fbca61d37eddf247d8727cd25d8/cover1");
    background-repeat: no-repeat;
    background-size: cover;
    color: #f7f7f9;
   text-align: center;
text-shadow: #1a202c 5px 5px;
    width: 100%;
    height: 100%;
}

.card{
    margin: 1px;
    border-radius: 52px;
  box-shadow: #1a202c 2px 2px;
}

.card:hover{
    background-color: #a5daa7;
    transition: transform 700ms ease;
    transform: scale(1.05);
}



h5:hover{
   color: #2f1b1b;

}

        .img-responsive
        {

            border-radius: 15px 15px 20px 20px;
            width: 50%;

        }

           h5{
               margin-left: 10px;
           }
        .btn btn-primary m-2{
            border-radius: 15px 15px 20px 20px;
        }
    </style>
</head>
<body >
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
                    <a href="/" class="nav-link">Выйти <span class="sr-only">(current)</span></a>
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

<div class="jumbotron">
    <h1 class="display-4" style="font-weight: bold"> <img class="img-res" style="border-radius: 120px;background-size: cover;" class="mb-4" src="{{$data->avatar}}" alt="" width="52" height="52"> Привет, <i>{{$data->name}}!</i></h1>
    <p style="font-weight: bold" class="lead">
        Привет, {{$data->name}}.Рады вас видеть на нашем сайте,здесь вы сможете поиграть в новые игры от RUG и DVC,а также узнать многое интересное из сферы программирование)
    </p>
    <hr class="my-4">
    <p style="font-weight: bold" class="lead"> Приятного просмотра</p>

</div>
<h5 class="display-4" >  Главные игры этой недели</h5>
<br>
<div class="row bg-silver">

    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Archery-Game</h5>
                <p class="card-text">
                    Думаю каждый играл в игры, где надо стрелять из лука и попадать в мишени,представляю к вашему вниманию новую игру, где вам предстоит стрелять в мишени
                </p>
                <img src="https://avatars.mds.yandex.net/get-games/2977039/2a0000017fbca78de1584339acce7cff856b/icon1" alt="" class="img-responsive">
                <a href="https://yandex.ru/games/play/186362" class="btn btn-primary m-2 btn-success">Играть</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Birdy Bird</h5>
                <p class="card-text">Birdy-Bird - это "дочь" игры Flappy Bird.
                    Тут есть около 9 разных птичек, плюс за каждый достигнутый вами рекорд открывается новая локация.</p>
                <img src="https://avatars.mds.yandex.net/get-games/1892995/2a0000017f2064b3734029753dfeaf1291e0/icon1" alt="" class="img-responsive" class="img-fuid">
                <a href="https://yandex.ru/games/play/184787" class="btn btn-primary m-2">Играть</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">White Square</h5>
                <p class="card-text">Привет, дорогие игроки! Возможно вы видели аналоги такой игры. Игра очень простая и пойдет для времяпрепровождения, к примеру, в автобусе.</p>
                <img src="https://avatars.mds.yandex.net/get-games/1881957/2a00000180195305c6fb8114fa00dd74d78e/icon1" alt="" class="img-responsive" class="img-fuid">
                <a href="https://falconline.net/LightHtml5.php" class="btn btn-primary m-2">Играть</a>
            </div>
        </div>
    </div>

</div>


</div>

<br>
<hr>



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
