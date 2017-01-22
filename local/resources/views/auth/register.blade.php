@extends('layouts.app')

@section('content')
<style>
body{

}
.form-group {
    margin-bottom: 5px;
}
.btn-perple {
    color: #fff;
    background-color: #9857c7;
    border-color: #7a2bb3;
}
.btn-perple:hover {
    color: #fff;
    background-color: #b787da;
    border-color: #7a2bb3;
}
.panel-body {
    padding: 10px 25px;
}
.panel-default>.panel-heading {
    background-image: url({{url('assets/image/student1.png')}});

}
.panel-heading {
    padding: 5px 5px;
}
.body-sign .line-thru {
    display: block;
    font-size: 12px;
    font-size: 1.2rem;
    position: relative;
}
.text-uppercase {
    text-transform: uppercase;
}
.ui.button {
  width: 100%;
  text-decoration: none;
    cursor: pointer;
    display: inline-block;
    min-height: 1em;
    outline: 0;
    border: none;
    background: #e0e1e2;
    color: #fff;
    margin: 0 .25em 0 0;
    padding: .78571429em 1.5em;
    text-shadow: none;
    font-weight: 700;
    line-height: 1em;
    font-style: normal;
    text-align: center;
    border-radius: .28571429rem;
    user-select: none;
    -webkit-transition: opacity .1s ease,background-color .1s ease,color .1s ease,box-shadow .1s ease,background .1s ease;
    transition: opacity .1s ease,background-color .1s ease,color .1s ease,box-shadow .1s ease,background .1s ease;
    will-change: '';
}
.ui.facebook.button {
    background-color: #3b5998;
    text-shadow: none;
}
hr {
    margin-top: 20px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default" style="box-shadow: 0 3px 3px 3px #e6f3fe; border-color: #a9c7ec;">
                <div class="panel-heading">

                  <div class="row-fluid user-row">

                  <img src="{{url('assets/image/student1.png')}}" class="img-responsive imgpicture">

                  </div>
                </div>
                <div class="panel-body">

                  <a href="#" class="ui facebook fluid button"><i class="fa fa-facebook icon-fa"></i> สมัครด้วย Facebook</a>
                  <hr>
                  OR
                  
                    <form class="form-horizontal" role="form" name="student" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class=" control-label">Username</label>


                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>


                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class=" control-label">Confirm Password</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group" style="margin-top:10px;">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Student Register
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-md-offset-1">
            <div class="panel panel-default" style="box-shadow: 0 3px 3px 3px #f4e6fe; border-color: #dabaf1;">
              <div class="panel-heading">

                <div class="row-fluid user-row">

                <img src="{{url('assets/image/teacher1.png')}}" class="img-responsive imgpicture">

                </div>
              </div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" name="teacher" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class=" control-label">Username</label>


                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>


                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>


                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class=" control-label">Confirm Password</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group" style="margin-top:10px;">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-perple">
                                    <i class="fa fa-btn fa-user"></i>Teacher Register
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
