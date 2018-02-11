@extends('layout') @section('register') {{--
<html> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">

<div class="logmod__wrapper">
  <span class="logmod__close">Close</span>
  <div class="logmod__container">
    <ul class="logmod__tabs">
      <li data-tabtar="lgm-2">
        <a href="#">Đăng nhập</a>
      </li>
      <li data-tabtar="lgm-1">
        <a href="#">Đăng ký</a>
      </li>
    </ul>
    <div class="logmod__tab-wrapper">
      @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $err) {{$err}}
        <br> @endforeach
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
      <form method="POST" action "{{route('user_login')}}" class="simform">
        {{csrf_field()}}
        <div class="logmod__tab lgm-2">
          <div class="logmod__heading">
            <span class="logmod__heading-subtitle">Điền tên đăng nhập và mật khẩu để
              <strong> đăng nhập</strong>
            </span>
          </div>
          <div class="logmod__form">
            <form accept-charset="utf-8" action="#" class="simform">
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-name">Tên đăng nhập</label>
                  <input class="string optional" maxlength="255" name="username" placeholder="Tên đăng nhập" type="text" size="50" autocomplete="off"
                  />
                </div>
              </div>
              <div class="sminputs">
                <div class="input full">
                  <label class="string optional" for="user-pw">Mật khẩu</label>
                  <input class="string optional" maxlength="255" name="password" placeholder="Password" type="password" size="50" autocomplete="off"
                  />
                  <span class="hide-password">Hiện mật khẩu</span>
                </div>
              </div>
              <div class="simform__actions">
                {{--
                <input class="sumbit" name="commit" type="sumbit" value="Log In" /> --}}
                <div>
                  <button class="btn btn-primary" type="submit" name "btndn" name="dn">Đăng nhập</button>
                </div>
                <span class="simform__actions-sidetext">
                  <a class="special" role="link" href="#">Quên mật khẩu ?
                    <br>Nhấn vào đây để lấy lại mật khẩu</a>
                </span>
              </div>
            </form>
          </div>
          <div class="logmod__alter">
            <div class="logmod__alter-container">
              <a href="#" class="connect facebook">
                <div class="connect__icon">
                  <i class="fa fa-facebook"></i>
                </div>
                <div class="connect__context">
                  <span>Đăng nhập với
                    <strong>Facebook</strong>
                  </span>
                </div>
              </a>
              <a href="#" class="connect googleplus">
                <div class="connect__icon">
                  <i class="fa fa-google-plus"></i>
                </div>
                <div class="connect__context">
                  <span>Đăng nhập với
                    <strong>Google+</strong>
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="logmod__tab lgm-1">
      <div class="logmod__heading">
        <span class="logmod__heading-subtitle">Đăng ký thành viên</span>
      </div>
      <div class="logmod__form">
        <form accept-charset="utf-8" action="#" class="simform">
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-name">Tên đăng nhập</label>
              <input class="string optional" maxlength="255" name="username" placeholder="Tên đăng nhập" type="text" size="50" autocomplete="off"
              />
            </div>
          </div>
          <div class="sminputs">
            <div class="input string optional">
              <label class="string optional" for="user-pw">Mật khẩu</label>
              <input class="string optional" maxlength="255" name="password" placeholder="Mật khẩu" type="password" size="50" autocomplete="off"
              />
            </div>
            <div class="input string optional">
              <label class="string optional" for="user-pw-repeat">Xác nhận mật khẩu</label>
              <input class="string optional" maxlength="255" name="confirm_password" placeholder="Nhập lại mật khẩu" type="password" size="50"
                autocomplete="off" />
            </div>
          </div>
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-pw-repeat">Họ và tên</label>
              <input class="string optional" maxlength="255" name="fullname" placeholder="Họ và tên" type="text" size="50" value="" autocomplete="off"
              />
            </div>
          </div>
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-pw-repeat">Địa chỉ</label>
              <input class="string optional" maxlength="255" name="address" placeholder="Địa chỉ" type="text" size="50" value="" autocomplete="off"
              />
            </div>
          </div>
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-pw-repeat">Số điện thoại</label>
              <input class="string optional" maxlength="255" name="phone" placeholder="Số điện thoại" type="text" size="100" value="" autocomplete="off"
              />
            </div>
          </div>
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-pw-repeat">Giới tính</label>
              <select class="string optional" for="user-pw-repeat" name="gender">
                <option>Nam</option>
                <option>Nữ</option>
              </select>
            </div>
          </div>
          <div class="sminputs">
            <div class="input full">
              <label class="string optional" for="user-pw-repeat">Email</label>
              <input class="string optional" maxlength="255" name="email" placeholder="name@example.com" type="email" size="100" autocomplete="off"
              />
            </div>
          </div>
          <div class="simform__actions">
            <input type="checkbox" class="string optional" name="check" value="1">
            <label class="string optional" for="user-pw-repeat">Đồng ý điều khoản</label>
            <span class="simform__actions-snameetext">Điều khoản sử dụng
              <a class="special" href="#" target="_blank" role="link"> Xem tại đây</a>
            </span>
          </div>
          <div>
            <button class="btn btn-primary" type="submit" name "btndk" name="dk">Đăng ký</button>
          </div>
        </form>
      </div>
      {{--
      <div class="logmod__alter">
        <div class="logmod__alter-container">
          <a href="#" class="connect facebook">
            <div class="connect__icon">
              <i class="fa fa-facebook"></i>
            </div>
            <div class="connect__context">
              <span>Create an account with
                <strong>Facebook</strong>
              </span>
            </div>
          </a>

          <a href="#" class="connect googleplus">
            <div class="connect__icon">
              <i class="fa fa-google-plus"></i>
            </div>
            <div class="connect__context">
              <span>Create an account with
                <strong>Google+</strong>
              </span>
            </div>
          </a>
        </div>
      </div> --}}
    </div>

  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</div>
<script src="js/index.js"></script> {{--

</html> --}} @endsection