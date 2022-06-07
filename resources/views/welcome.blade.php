<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


    </head>
    <body class="register-page">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div class="content">

            <div class="register-bo">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="/" class="h1"><b>VINTO</b> H</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Obtener numero clinico.</p>
                        <form action="../../index.html" method="post">
                            <div class="row mb-3">
                                <div class="input-group col-6">
                                    <input type="text" class="form-control" placeholder="Nombres" name="name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group col-6">
                                    <input type="text" class="form-control" placeholder="Apellidos" name="last_name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user-friends"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="input-group col-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group col-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Telefono">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="input-group col-12">
                                    <input type="date" class="form-control" name="birthdate" placeholder="Fecha Nacimiento">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="input-group col-md-6">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group col-md-6">
                                    <input type="password" class="form-control" placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="form-group">
                                            <select class="form-control" >
                                                <option>Vinto</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="form-group">
                                            <select class="form-control" >
                                                <option>Casado</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="form-group col-12">
                                    <label for="exampleInputFile">Foto de Carnet</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile3" >
                                            <label class="custom-file-label" for="exampleInputFile3">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleInputFile">Hoja de Referencia o Hoja de Transito</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group clearfix col-12">
                                    <div class="icheck-primary d-inline col-6">
                                        <input type="radio" id="radioPrimary1" name="gender" value="hombre">
                                        <label for="radioPrimary1">
                                            Hombre
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline col-6">
                                        <input type="radio" id="radioPrimary2" name="gender" value="mujer">
                                        <label for="radioPrimary2">
                                            Mujer
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="row ml-1">
                                <div class="form-check col-12">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Algun Seguro Distinto al SUS</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8">

                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                            </div>
                        </form>
                        <div class="row align-content-around">
                            <div class="col-6 ">
                                <a href="login.html" class="text-center">Olvide mi numero de cuenta</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
