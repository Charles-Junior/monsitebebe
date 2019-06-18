@extends('mytemplate')

@section('content')
<br><br><br>
@if ($errors->count() > 0)
    <div class="row">
        <div class="alert alert-danger">
        @foreach($errors->all() as $message)
            {{ $message }}<br />
        @endforeach          
        </div>
    </div>
@endif
		<div class="page-header">
		<h1>Modifier votre compte</h1>
		</div>
		<div>
		{{ Form::open(array('url' => 'auth/updateaccount', 'method' => 'POST')) }}
		<h5> Nom d'utilisateur : {{ $username }}</h5>
		<div class="form-group {{ $errors->has('firstname') ? 'error' : '' }}">
		{{ Form::text('firstname', $firstname, array('placeholder' =>'Nom' )) }}
		</div>
		<div class="form-group {{ $errors->has('lastname') ? 'error' : '' }}">
		{{ Form::text('lastname', $lastname, array('placeholder' =>'Prenom' )) }}
		</div>
		<div class="form-group {{ $errors->has('email') ? 'error' : '' }}">
		{{ Form::text('email', $email, array('placeholder' =>'Email' )) }}
		</div>
		<div class="form-group {{ $errors->has('password') ? 'error' : '' }}">
          {{ Form::password('password', array('placeholder' => 'Mot de Passe')) }}
      	</div>
      	<div class="form-group">
      	  {{ Form::password('password_confirmation', array('placeholder' => 'Confirmation mot de Passe')) }}
      	  </div>
		<div>
        {{ Form::submit('Enregistrer', array('class' => 'btn btn-primary')) }}
         </div>
        {{ Form::close()}}
		</div>
		
@stop