<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href={{"css/bootstrap.min.css"}} rel="stylesheet">
    
</head>
<body>
    <form action="/create.portfolio" method="POST">
        @csrf
        <label for="">Titre</label>
        <input type="text" name="titre">

        <label for="">Text</label>
        <input type="text" name="text">
        
        <button type="submit">
            Créer un Portfolio
        </button>
    </form>
    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/blog">Blog </a>
                    </li>
                    <li>
                        <a href="/portfolio">Portfolio</a>                                
                    </li>
                    <li>
                        <a href="/backBlog">Backoffice Blog</a>                                
                    </li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>
        <div class="container">
            @foreach ($image as $item)
            <table class="table table-bordered row">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Text</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->text}}</td>
                    <td>
                        <form action="destroy-portfolio/{{$item->id}}" method="post">
                            @csrf
                            <button class="btn-danger btn" type="submit">Delete</button>
                        </form>
                  </td>
                    <td>
                        <a href="showPortfolio/{{$item->id}}"><button class="btn-primary btn" type="submit">Show</button></a>
                  </td>
                  </tr>
                </tbody>
              </table>
            @endforeach
        </div>
    </nav><!-- /.site-navigation -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>