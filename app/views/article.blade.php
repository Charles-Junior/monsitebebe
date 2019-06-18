@extends('mytemplate')

@section('content')
{{ HTML::script('js/changeImage.js') }}
<div class="container">
    <!-- Start: Party description -->
    <article class="article">
      <div class="row bottom-space">
        <div class="span12">
          <div class="page-header">
            <h1>{{ $annonce->titre }}</h1>
          </div>
        </div>
        <div class="span7">
			<center>
          <img src="{{ '../'.$annonce->image }}" class="thumbnail product-snap" width="300" id="imageVue">  
			</center>
        </div>
			
			<img src="{{ '../'.$annonce->image }}" class="thumbnail product-snap" width="100" id="imageP" onClick="changeImageP()">
			@if($annonce->imageD != null)
			
			<img src="{{ '../'.$annonce->imageD }}" class="thumbnail product-snap" width="100" id="imageD" onClick="changeImageD()">
			
			@endif
			
			@if($annonce->imageT != null)
			
			<img src="{{ '../'.$annonce->imageT }}" class="thumbnail product-snap" width="100" id="imageT" onClick="changeImageT()">
			
			@endif
		<div>
		<div class="page-header"> </div>
		<div class="page-header">
		<h5>Prix: {{ $annonce->prix }}€</h5>
		<h5> Departement: {{ $annonce->departement }} </h5>

		<h5>Email: {{ $infosUser->email }}</h5>
		@if ($annonce->telephone == null) 
			<h5>Numero de telephone: Le dépositaire de l'annonce n'as pas souhaité communiquer son numéro de téléphone </h5>
		@else	
		<h5>Numero de telephone: {{ $annonce->telephone }} </h5>
		@endif
		</div>
		<h5>Description: {{ $annonce->texte }} </h5>
		</div>
	 </div>
        </div>      
@stop