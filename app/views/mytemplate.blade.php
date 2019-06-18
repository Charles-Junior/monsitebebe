<!DOCTYPE html>
<html>
	<head>  
		 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
         <meta http-equiv="Content-Language" content="fr">
		 <meta charset="utf-8">
		 <title>Mon site pour bébé</title>
		
		 <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    <!-- Bootstrap responsive -->
    {{ HTML::style('css/bootstrap-responsive.min.css') }}
    <!-- Font awesome - iconic font with IE7 support --> 
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::style('css/font-awesome-ie7.css') }}
	 
	</head>
			
					<body>
					<header>
							<!--------------------------------->
							<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
	      <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			<!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">  
				<ul class="nav pull-left">
				<li>{{ link_to('/', 'Acceuil') }}</li>
				</ul>
              <ul class="nav pull-right">
                @if (Auth::check())
				  <li>{{ link_to('auth/deposit', 'Déposer une annonce') }}</li>
				  <li>{{ link_to('auth/myaccount', 'Gerer mon compte') }}</li>
                  <li>{{ link_to('auth/logout', 'Deconnexion') }}</li>
                @else
				  <li>{{ link_to('guest/login', 'Déposer une annonce') }}</li>
                  <li>{{ link_to('guest/register', 'Inscription') }}</li>
                  <li>{{ link_to('guest/login', 'Connexion') }}</li>
                @endif
              </ul>
			  </div>
         </div>
        </div>
      </div>
	  </header>
	  <div>
	  <br><br><br>
	  @yield('content')
	  </div>
	</body>
	
</html>