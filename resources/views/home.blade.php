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
                         <form action="" method="POST">
                             <div class="row">

                                 <div class="form-group col-sm-12">
                                     <label for="email">email</label>
                                     <input type="email" id="email" class="form-control">
                                 </div>


                                 <div class="form-group col-sm-12">
                                     <label for="">password</label>
                                     <input class="form-control" type="password" id="password">
                                 </div>


                                 <div class="form-group col-sm-12">
                                         <a href=""> Forgot Your Password?</a>
                                 </div>


                             <div class="form-group col-sm-12">
                                 <a href="{{route('register')}}">Sign Up</a>
                                 <button class="btn btn-primary pull-right">Login</button>
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
