<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <table class="table table-bordered container">
        <tbody>
          <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->titre}}</td>
            <td><img src="{{$article->image}}" alt=""></td>
            <td>{{$article->text}}</td>
            <td>
                <form action="/edit-article/{{$article->id}}" method="post">
                    @csrf
                    <label for="">Titre</label>
                    <input type="text" name="titre">
                    <label for="">Image</label>
                    <input type="text" name="image">
                    <label for="">Text</label>
                    <input type="text" name="text">
                    <button class="btn-danger btn" type="submit">Edit</button>
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