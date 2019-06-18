@extends('mytemplate')

@section('content')
<br><br><br>
 @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
		<div class="page-header">
		<h1>Vos informations</h1>
		</div>
		<div>Nom d'utilisateur : {{ $username }} </div>
		<div>Nom : {{ $firstname }} </div>
		<div>Prénom : {{ $lastname }} </div>
		<div>Email : {{ $email }} </div>
		<div>
		<em class="pull-right">
			<a href="{{ url('auth/updateaccount') }}" class="btn btn-primary">Modifier mon compte</a>		
		</em> 
		</div>
		<br><br>
		
		<div class="page-header">
		<h2>Mes annonces</h2>
		</div>
		<div>
@for ($i = 0; $i < count($mesAnnonces); $i++)
      
	      	
		        <div class="thumbnail">
		          <div class="caption" style="height: 200px;">
				  <div>
		            	<img src="{{ '../'.$mesAnnonces[$i]->image }}" alt="{{ $mesAnnonces[$i]->titre }}" width="100" align="left" hspace="20" >
				  </div>		
		            <h3>{{ $mesAnnonces[$i]->titre }}</h3>
					<h5>
						{{ $mesAnnonces[$i]->prix }}€
					</h5>
		            <p>
		            	{{ $mesAnnonces[$i]->region.'/'.$mesAnnonces[$i]->departement }}
		            </p>
					<p>
						<a href="{{ url('annonce/'.$mesAnnonces[$i]->id) }}" class="btn">Voir mon annonce</a>
					</p>
					<div>
						<em class="pull-right">
					{{ Form::open(array('url' => 'auth/myaccount', 'method' => 'POST')) }}
					{{ Form::hidden('id_annonce', $mesAnnonces[$i]->id) }}
					{{ Form::submit('Delete',array('class' => 'btn btn-danger icon-trash')) }}
					{{ Form::close()}}
						</em>
		          </div>
		        </div>
	      	

	    @endfor
		
		 
		<center>
   		 {{ $mesAnnonces->links() }}
   		</center>
	
  </div>
@stop