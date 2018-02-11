<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Admin-Tshop</title>
    <!-- Core CSS - Include with every page -->
    <link href="../plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="../css/style1.css" rel="stylesheet" />
      <link href="../css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="../images/logoT.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Vui lòng đăng nhập</strong></h3>
                    </div>
                    <div class="panel-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    
                    @endif @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                        <form method="POST" action "{{route('admin_login')}}">
                        {{csrf_field()}}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ đăng nhập
                                    </label>
                                </div>
                                <button class="btn btn-primary" style="height:45px;width:336px">Đăng nhập</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="../plugins/jquery-1.10.2.js"></script>
    <script src="../plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
