@extends('mytemplate')
 
@section('content')

<div class="container">
<div class="page-header">
  <h1>S'incrire sur monsitepourbebe</h1>
</div>
@if ($errors->count() > 0)
    <div class="row">
        <div class="alert alert-danger">
        @foreach($errors->all() as $message)
            {{ $message }}<br />
        @endforeach          
        </div>
    </div>
@endif
<div class="row">
  <div class="span6 offset3">
    <h4 class="widget-header"><i class="icon-user"></i> Inscription</h4>
    <div class="widget-body">
      <div class="center-align">
      	{{ Form::open(array('url' => 'guest/register','class' => 'form-horizontal form-signin-signup')) }}
      	  <div class="form-group {{ $errors->has('username') ? 'error' : '' }}">
          {{ Form::text('username', null, array('placeholder' => 'Pseudo')) }}
      	  </div>
      	  <div class="form-group {{ $errors->has('email') ? 'error' : '' }}">
          {{ Form::text('email', null, array('placeholder' => 'Adresse Email')) }}
		  <i class="icon-exclamation-sign" onmouseover="this.title='Pensez à entrer une adresse valide.Celle ci s\'affichera lorsque vous posterez une annonce.';"></i>
      	  </div>
      	  <div class="form-group {{ $errors->has('firstname') ? 'error' : '' }}">
          {{ Form::text('firstname', null, array('placeholder' => 'Nom')) }}
          </div>
          <div class="form-group {{ $errors->has('lastname') ? 'error' : '' }}">
          {{ Form::text('lastname', null, array('placeholder' => 'Prénom')) }}
          </div>
          <div class="form-group {{ $errors->has('password') ? 'error' : '' }}">
          {{ Form::password('password', array('placeholder' => 'Mot de Passe')) }}
      	  </div>
      	  <div class="form-group">
      	  {{ Form::password('password_confirmation', array('placeholder' => 'Confirmation mot de Passe')) }}
      	  </div>
      	  <div class="form-group">
          {{ Form::submit('S\'inscrire', array('class' => 'btn btn-primary btn-large')) }}
          </div>
        {{ Form::close()}}
        <h4><i class="icon-question-sign"></i> J'ai déjà un compte.</h4>
        {{ link_to('guest\login', 'Se connecter', array('class' => 'btn btn-large bottom-space')) }}
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
@stop

