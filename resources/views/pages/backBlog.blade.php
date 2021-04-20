<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <form action="/create.blog" method="POST">
        @csrf
        <label for="">Titre</label>
        <input type="text" name="titre">

        
        <label for="">Image</label>
        <input type="text" name="image">
        
        <label for="">Text</label>
        <input type="text" name="text">
        
        <button type="submit">
            Créer un blog
        </button>
    </form>
    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                        <a href="/blog">Blog </a>
                    </li>
                    <li>
                        <a href="/portfolio">Portfolio</a>                                
                    </li>
                    <li>
                        <a href="/backPortfolio">Back Portfolio</a>                                
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>
        <div class="row">
            @foreach ($article as $item)
            <div class="col-3">
                <img style="width: 60%" src="{{$item->image}}" alt="">
                <h1>{{$item->titre}}</h1>
                <p>{{$item->text}}</p>
            </div>
            @endforeach
        </div>
    </nav><!-- /.site-navigation -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>