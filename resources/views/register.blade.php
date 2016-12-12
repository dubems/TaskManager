<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Manager</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=aleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <div class="panel panel-default" style="margin-top: 200px;">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form action="{{route('signup')}}" method="POST">

                        {{csrf_field()}}

                        @if($errors->all())
                        <div class="alert alert-warning">
                            @foreach($errors->all() as $error)
                                <ul>
                                    <li>{{$error}}</li>
                                </ul>
                                @endforeach
                        </div>
                        @endif

                        @if(!empty($message))
                        <div class="alert alert-success">
                          <span>{{$message}}</span>
                        </div>
                        @endif

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="">Name</label>
                                <input type="text" id="name"  name="name" class="form-control"
                                       value="{{old('name')}}">
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="email">email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                       value="{{old('email')}}">
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="">password</label>
                                <input class="form-control" type="password"   name="password" id="password">
                            </div>

                            <div class="form-group col-sm-12">
                                <label for=""> Confirm password</label>
                                <input class="form-control" type="password"
                                       name="password_confirmation" id="password">
                            </div>

                            <div class="form-group col-sm-12">
                                <a href="{{route('login')}}">Login</a>
                                <button class="btn btn-primary pull-right">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
