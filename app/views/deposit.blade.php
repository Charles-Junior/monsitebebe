@extends('mytemplate')

@section('content')
{{ HTML::script('js/changeannonce.js') }}
<div class="container">
<div class="page-header">
  <h1>Deposer une annonce</h1>
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
    <h4 class="widget-header"><i class="icon-info-sign"></i> Informations sur l'annonce</h4>
    <div class="widget-body">
      <div class="center-align">
      	{{ Form::open(array('url' => 'auth/deposit', 'method' => 'POST', 'files' => true, 'class' => 'form-horizontal form-signin-signup')) }}
      	  <div class="form-group {{ $errors->has('categorie') ? 'error' : '' }}">
          {{ Form::select('categorie', 
									array(	
											'vetement' => 'Vetements',
											'jouet' => 'Jouets',
											'chambre' => 'Chambre',
											'bainEtSoin' => 'Bain et soins',
											'sortie' => 'Sortie',
											'securite' => 'Securite'
											)) }}
      	  </div>
		  <br>
      	  <div class="form-group {{ $errors->has('partoupro') ? 'error' : '' }}">
          {{ Form::select('partoupro',
									array(  
											'particulier' => 'Particulier',
											'professionnel' => 'Professionnel'
											 )) }}
      	  </div>
		  <br>
      	  <div class="form-group {{ $errors->has('type') ? 'error' : '' }}">
          {{ Form::select('type',
									array(  
											'offre' => 'Offre',
											'demande' => 'Demande'
											 )) }}
          </div>
		  <div class="form-group {{ $errors->has('region') ? 'error' : '' }}" style="visibility:hidden" >
          {{ Form::label('region', 'region') }}
          </div>
          <div class="form-group {{ $errors->has('region') ? 'error' : '' }}" onchange="changeDepartement()">
          {{ Form::select('region',
									array(  
											'Selectionner une region' => array(
																				'alsace' => 'Alsace',
																				'aquitaine' => 'Aquitaine',
																				'auvergne' => 'Auvergne',
																				'basseNormandie' => 'Basse-Normandie',
																				'bourgogne' => 'Bourgogne',
																				'bretagne' => 'Bretagne',
																				'centre' => 'Centre',
																				'champagneArdenne' => 'Champagne-Ardenne',
																				'corse' => 'Corse',
																				'francheComte' => 'Franche-Compte',
																				'hauteNormandie' => 'Haute-Normandie',
																				'ileDeFrance' => 'Ile-de-France',
																				'languedocRoussillon' => 'Languedoc-Roussillon',
																				'limousin' => 'Limousin',
																				'lorraine' => 'Lorraine',
																				'midiPyrenees' => 'Midi-Pyrenees',
																				'nordPasDeCalais' => 'Nord-Pas-de-Calais',
																				'paysDeLaLoire' => 'Pays de la Loire',
																				'picardie' => 'Picardie',
																				'poitouCharentes' => 'Poitou-Charentes',
																				'provenceAlpesCoteDazur' => 'Provence-Alpes-Cote D\'Azur',
																				'rhoneAlpes' => 'Rhone-Alpes'
																				
																			   ))) }}
          </div>
		  <div class="form-group {{ $errors->has('departement') ? 'error' : '' }}" style="visibility:hidden">
          {{ Form::label('departement','departement') }}
          </div>
          <div class="form-group {{ $errors->has('departement') ? 'error' : '' }}">
         {{ Form::select('departement',
									array(  
											'Selectionner un departement' => array (
											
											
											 ))) }}
      	  </div>
		  <br>
		   <div class="form-group {{ $errors->has('telephone') ? 'error' : '' }}">
          {{ Form::text('telephone', null, array('placeholder' => 'Numero de telephone')) }}
          </div>
		  <br>
		   <div class="form-group {{ $errors->has('titre') ? 'error' : '' }}">
          {{ Form::text('titre', null, array('placeholder' => 'Titre de l\'annonce')) }}
          </div>
		  <br>
		   <div class="form-group {{ $errors->has('texte') ? 'error' : '' }}">
          {{ Form::textarea('texte', null, array('placeholder' => 'Informations concernant l\'annonce')) }}
          </div>
		  <br>
		  <div class="form-group {{ $errors->has('prix') ? 'error' : '' }}">
          {{ Form::text('prix', null, array('placeholder' => 'Prix')) }} en euros
          </div>
		  <br>
		  <div class="form-group {{ $errors->has('image') ? 'error' : '' }}">
		  {{ Form::file('image') }} 
		  </div>
		  <div class="form-group {{ $errors->has('imageD') ? 'error' : '' }}">
		  {{ Form::file('imageD') }} 
		  </div>
		  <div class="form-group {{ $errors->has('imageT') ? 'error' : '' }}">
		  {{ Form::file('imageT') }} 
		  </div>
		   <br>
      	  <div class="form-group">
          {{ Form::submit('Valider', array('class' => 'btn btn-primary btn-large')) }}
          </div>
        {{ Form::close()}}
@stop
@stop