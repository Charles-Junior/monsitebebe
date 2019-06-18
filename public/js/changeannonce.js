var x;
var y;
var z;

function changeDepartement()
{
	x = document.getElementById("region").value;
	y = document.getElementById("departement");
	
		if (x == "alsace")
			{
				departementValue = ['basRhin','hautRhin'];
				departementText = ['Bas-Rhin','Haut-Rhin'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{  
							 var p=new Option(departementText[i],departementText[i]);
							 y.options[i]=p;
							 
							//y.options[i].value=departementText[i];
							//y.options[i].text=departementText[i];
							
						} 
						
			}
			
		if (x == "aquitaine")
			{
				departementValue = ['dordogne','gironde','landes','lotEtGaronne','pyreneesAtlantiques'];
				departementText = ['Dordogne','Gironde','Landes','Lot-et-Garonne','Pyrenees-Atlantiques'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{	
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "auvergne")
			{
				departementValue = ['allier','cantal','hauteLoire','puyDeDome'];
				departementText = ['Allier','Cantal','Haute-Loire','Puy-de-Dome'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}

		if (x == "basseNormandie")
			{
				departementValue = ['calvados','manche','orne'];
				departementText = ['Calvados','Manche','Orne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "bourgogne")
			{
				departementValue = ['coteDor','nievre','saoneEtLoire','yonne'];
				departementText = ['Cote-d\'or','Nievre','Saone-et-Loire','Yonne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}

			
		if (x == "bretagne")
			{
				departementValue = ['cotesDarmor','finistere','illeEtVilaine','morbihan'];
				departementText = ['Cotes-d\'Armor','Finistere','Ille-et-Vilaine','Morbihan'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
			
		if (x == "centre")
			{
				departementValue = ['cher','eureEtLoire','indre','indreEtLoire','loirEtCher','loiret'];
				departementText = ['Cher','Eure-et-Loire','Indre','Indre-et-Loire','Loir-et-Cher','Loiret'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "champagneArdenne")
			{
				departementValue = ['ardennes','aube','marne','hauteMarne'];
				departementText = ['Ardennes','Aube','Marne','Haute-Marne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "francheComte")
			{
				departementValue = ['doubs','jura','hauteSaone','territoireDeBelfort'];
				departementText = ['Doubs','Jura','Haute-Saone','Territoire-de-Belfort'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "hauteNormandie")
			{
				departementValue = ['eure','seineMaritime'];
				departementText = ['Eure','Seine-Maritime'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "ileDeFrance")
			{
				departementValue = ['paris','seineEtMarne','yvelines','essone','hautsDeSeine','seineSaintDenis','valDeMarne','valDoise'];
				departementText = ['Paris','Seine-Et-Marne','Yvelines','Essone','Hauts-De-Seine','Seine-Saint-Denis','Val-de-Marne','Val-d\'oise'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "languedocRoussillon")
			{
				departementValue = ['aude','gard','herault','lozere','pyreneesOrientales'];
				departementText = ['Aude','Gard','Herault','Lozere','Pyrenees-Orientales'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "limousin")
			{
				departementValue = ['correze','creuse','hauteVienne'];
				departementText = ['Correze','Creuse','Haute-Vienne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "lorraine")
			{
				departementValue = ['meurtheEtMoselle','meuse','moselle','vosges'];
				departementText = ['Meurthe-et-Moselle','Meuse','Moselle','Vosges'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "midiPyrenees")
			{
				departementValue = ['ariege','aveyron','hauteGaronne','gers','lot','hautesPyrenees','tarn','tarnEtGaronne'];
				departementText = ['Ariege','Aveyron','Haute-Garonne','Gers','Lot','Hautes-Pyrenees','Tarn','Tarn-et-Garonne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "nordPasDeCalais")
			{
				departementValue = ['nord','PasDeCalais'];
				departementText = ['Nord','Pas-de-Calais'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "paysDeLaLoire")
			{
				departementValue = ['loireAtlantique','maineEtLoire','mayenne','sarthe','vendee'];
				departementText = ['Loire-Atlantique','Maine-et-Loire','Mayenne','Sarthe','Vendee'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "picardie")
			{
				departementValue = ['aisne','oise','somme'];
				departementText = ['Aisne','Oise','Somme'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "poitouCharentes")
			{
				departementValue = ['charente','charenteMaritime','deuxSevres','vienne'];
				departementText = ['Charente','Charente-Maritime','Deux-Sevres','Vienne'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "provenceAlpesCoteDazur")
			{
				departementValue = ['alpesDeHauteProvence','hauteAlpes','alpesMaritimes','bouchesDuRhone','var','vaucluse'];
				departementText = ['Alpes-de-Haute-Provence','Haute-Alpes','Alpes-Maritimes','Bouches-du-Rhone','Var','Vaucluse'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
			
		if (x == "rhoneAlpes")
			{
				departementValue = ['ain','ardeche','drome','isere','loire','rhone','savoie','hauteSavoie'];
				departementText = ['Ain','Ardeche','Drome','Isere','Loire','Rhone','Savoie','Haute-Savoie'];
				y.options.length=departementValue.length;
					for(i=0;i<departementValue.length;i++)
						{
							var p=new Option(departementText[i],departementText[i]);
							y.options[i]=p;
						}
			}
}
