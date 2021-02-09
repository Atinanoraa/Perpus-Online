<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{asset('admin-themes/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login Page</title>
</head>
<body>

    <div style="margin-top: 15%; margin-left: 40%;">
        <div class="col-md-5 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>LOGIN</h5>
                </div>
                <div class="panel-body">
                    <form action="{{('auth-login')}}" method="POST">
                        @csrf
                        <table class="table">
                            <tr>
                                <td style="font-size: 14pt;">Email</td>
                                <td>
                                    <input type="email" class="form-control input-group input-group-sm mb-3" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 14pt;">Password &ensp;</td>
                                <td>
                                    <input type="password" class="form-control input-group input-group-sm mb-3" name="password">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" class="btn btn-primary btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
