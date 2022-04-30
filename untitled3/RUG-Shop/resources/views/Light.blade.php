<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>каталог игр</title>

    <style>
        img{
            border-radius: 12px ;
        }

        .card{
            border-radius: 55px 55px 55px 55px ;
        }
    </style>
</head>
<body>
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
    <h1 class="display-4"> <img style="border-radius: 120px" class="mb-4" src="https://avatars.mds.yandex.net/i?id=4f2223f642e1818687643ce302aa2b5b-5185627-images-thumbs&n=13" alt="" width="62" height="52"> Каталог игр</h1>

    <hr class="my-4">
    <p class="lead"> Приятного просмотра</p>

</div>



<div class="row">
    @foreach( $data as $el)
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$el->header}}</h3>
                <p class="card-text">
                    {{$el->description}}
                </p>
                <img src="{{$el->srcImg}}" alt="" class="img-responsive">
                <a href="{{$el->srcGame}}" class="btn btn-primary m-2 btn-success">Играть</a>

            </div>
        </div>
        <br>
    </div>
    @endforeach




















</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
