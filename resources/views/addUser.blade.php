<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
    <h1> Add User</h1>
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
<li style="color:red">{{$error}}</li>


    @endforeach
</ul>
@endif

<form action="#" method="POST">
    @csrf
  <p> <label for="titre">Matricule :</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"></p>

    <p>
        <label for="contenu">Password :</label>
        <input type="text" name="password" class="form-control @error('auteur_id') is-invalid @enderror">
    </p>

    <p>
        <label for="contenu">Email :</label>
        <input type="text" name="email" class="form-control @error('auteur_id') is-invalid @enderror">
    </p>

    <p>
        <label for="contenu">Roles :</label>
        <select name="Role" id="">
            @foreach ($Roles as $Role )

            <option value="">{{$Role}}</option>
              @endforeach
        </select>
    </p>

    <input type="submit" value="Add">

</form>
</body>
</html>
