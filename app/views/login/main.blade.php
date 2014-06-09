@extends('master')

@section('content')
<div class="container">
<div class="row" style="margin-top: 50px;">
<div class="col-lg-4 col-lg-offset-4">
<div class="panel panel-primary">
    <div class="panel-heading">Panel heading without title</div>
    <div class="panel-body">
        <form method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
            <fieldset>
                <div class="form-group">
                    <label for="email">E-mail ou Username</label>
                    <input class="form-control" tabindex="1" placeholder="E-mail ou Username" type="text" name="email" id="email" value="<% Input::old('email') %>">
                </div>
                <div class="form-group">
                    <label for="password">
                        Senha
                        <small>
                            <a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}">(recuperar senha)</a>
                        </small>
                    </label>
                    <input class="form-control" tabindex="2" placeholder="Senha" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="remember" class="checkbox">
                        Lembrar me
                        <input type="hidden" name="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </div>
                @if ( Session::get('error') )
                <div class="alert alert-error">{{{ Session::get('error') }}}</div>
                @endif

                @if ( Session::get('notice') )
                <div class="alert">{{{ Session::get('notice') }}}</div>
                @endif
                <div class="form-group">
                    <button tabindex="3" type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>
</div>
</div>
@stop