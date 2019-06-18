@extends('mytemplate')

@section('content')
<br><br><br>
 @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
		<div>
		<center>
		{{ Form::open(array('url' => 'search', 'method' => 'POST')) }}
		{{ Form::text('recherche', null, array('placeholder' => 'Recherche')) }}
		{{ Form::select('categorie', 
									array(	
											'' => 'Toutes les catégories',
											'vetement' => 'Vetements',
											'jouet' => 'Jouets',
											'chambre' => 'Chambre',
											'bainEtSoin' => 'Bain et soins',
											'sortie' => 'Sortie',
											'securite' => 'Sécurité'
											)) }}
		{{ Form::select('region',
									array(  
											'' => 'Toutes les régions',
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
		{{ Form::submit('Valider', array('class' => 'btn btn-primary')) }}
		{{ Form::close()}}
		</center>
		</div>
<div>
@for ($i = 0; $i < count($annonces); $i++)
      
	      	
		        <div class="thumbnail">
		          <div class="caption" style="height: 200px;">
				  <div>
		            	<img src="{{ $annonces[$i]->image }}" alt="{{ $annonces[$i]->titre }}" width="100" align="left" hspace="20">
				  </div>		
		            <h3>{{ $annonces[$i]->titre }}</h3>
					<h5>
						{{ $annonces[$i]->prix }}€
					</h5>
		            <p>
		            	{{ $annonces[$i]->region.'/'.$annonces[$i]->departement }}
		            </p>
					<p>
						<a href="{{ url('annonce/'.$annonces[$i]->id) }}" class="btn">Voir cette annonce</a>
					</p>
		          </div>
		        </div>
	      	

	    @endfor
		
		 
		<center>
   		 {{ $annonces->links() }}
   		</center>
	
  </div>
@stop