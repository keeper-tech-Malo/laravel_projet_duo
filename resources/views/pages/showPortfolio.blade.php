<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet">
</head>
<body>
    <table class="table table-bordered container">
        <tbody>
          <tr>
            <th scope="row">{{$image->id}}</th>
            <td>{{$image->titre}}</td>
            <td><img src="{{$image->image}}" alt=""></td>
            <td>{{$image->text}}</td>
            <td>
                <form action="/edit-portfolio/{{$image->id}}" method="post">
                    @csrf
                    <label for="">Titre</label>
                    <input type="text" name="titre">
                    <label for="">Text</label>
                    <input type="text" name="text">
                    <button class="btn-succes btn" type="submit">Edit</button>
                </form>
                <br>
                <br>
                <br>
                <a href="/backBlog"><button class="btn-danger btn" type="submit">Retour Vers Le BackOffice</button></a>
            </td>
            <td>
          </td>
          </tr>
        </tbody>
      </table>
</body>
</html>