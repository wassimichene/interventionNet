<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-col-md-offset-6">
                <p> <h1 class="text-center">Log In</h1> </p>
                <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif

                    <div class="form-group text-center">
                        <label for="matricule">Matricule</label>
                    </div>
                    <div class="d-flex justify-content-center">
                     <div>
                        <input type="matricule" name="matricule" class="form-control">
                     </div>
                    </div>
                        <span class="text-danger">
                            @error('matricule')
                                {{$message}}
                            @enderror
                        </span>

                    <div class="form-group text-center">
                        <label for="password">Password</label></div>
                        <div class="d-flex justify-content-center">
                    <div>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                        <span class="text-danger text-center">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <br>
                    <p>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-block btn-success">Login</button>
                    </div>
</p>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>

  </body>

</html>
