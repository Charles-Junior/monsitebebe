@extends('mytemplate')
 
@section('content')
 
<div class="container">
<div class="page-header">
  <h1>Se connecter à monsitepourbebe</h1>
</div>
@if (Session::has('error'))
    <div class="row">
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    </div>
@endif
<div class="row">
  <div class="span6 offset3">
    <h4 class="widget-header"><i class="icon-lock"></i> Connexion</h4>
    <div class="widget-body">
      <div class="center-align">
      	{{ Form::open(array('url' => 'guest/login', 'method' => 'POST', 'class' => 'form-horizontal form-signin-signup')) }}
          {{ Form::text('username', null, array('placeholder' => 'Pseudo')) }}
          {{ Form::password('password', array('placeholder' => 'Mot de Passe')) }}
          <div class="remember-me">
            <div class="pull-left">
              <label class="checkbox">
                {{ Form::checkbox('remember', 'true', false) }} Se souvenir de moi
              </label>
            </div>
            <div class="pull-right">
              {{ link_to('password/remind', 'J\'ai oublié mon mot de passe.') }}
            </div>
            <div class="clearfix"></div>
          </div>
          {{ Form::submit('Se connecter', array('class' => 'btn btn-primary btn-large')) }}
        {{ Form::close()}}
        <h4><i class="icon-question-sign"></i> Je n'ai pas de compte.</h4>
        {{ link_to('guest\register', 'S\'inscrire', array('class' => 'btn btn-large bottom-space')) }}
        <h4><i class="icon-thumbs-up"></i> Se connecter avec un autre compte</h4>
        <ul class="signin-with-list">
          <li>
            <a class="btn-twitter">
              <i class="icon-twitter icon-large"></i>
              Se connecter avec Twitter
            </a>
          </li>
          <li>
            <a class="btn-facebook">
              <i class="icon-facebook icon-large"></i>
              Se connecter avec Facebook
            </a>
          </li>
          <li>
            <a class="btn-google">
              <i class="icon-google-plus icon-large"></i>
              Se connecter avec Google
            </a>
          </li>
          <li>
            <a class="btn-github">
              <i class="icon-github icon-large"></i>
              Se connecter avec Github
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@stop