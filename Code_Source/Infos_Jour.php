<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/Icône_Soleil.png">

    <title>Données du Jour</title>

    <!-- Fichiers Bootstrap -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!--fichier css pour l'armature de la page -->
    <link href="./css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    

          
    <div class="inner">
    </div>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <p><?php include('./includes/header.html'); ?></p>
        <div class="cover-container">

            <div class="inner cover">
            </div>
            <div style="background:url('./images/Fond_Portfolio2.jpg'); opacity: 0.9; margin-left: 15%; padding: 20px; margin-right: 15%; border-radius: 30px ">
                <h1 class="cover-heading">Ephémérides:</h1>
                <div id="Ephemeride">
                    <p><?php include('./includes/Ephemeride.html'); ?></p>
                </div>

                <script type="text/javascript">
                    document.getElementById('Ephemeride').style.display="none"; /* masquage du widget de base */
                </script>
                
                <a href="http://time.is/Nantes" style="hidden" id="time_is_link" rel="nofollow" style="font-size:36px"></a>   <?php /* informations sur le lever et coucher de soleil*/?>
                <h2>
                <span id="Nantes_z71f" style="font-size:36px"></span>
                <br><br>
                <span id="Rezé_z71f" style="font-size:36px"></span>
                <script src="http://widget.time.is/fr.js"></script>
                <script type="text/javascript">
                  time_is_widget.init(
                  {
                    Nantes_z71f:
                    {
                      template:"SUN", 
                      sun_format:"Lever de soleil: srhour:srminute",
                      coords:"47.2172500,-1.5533600"
                    },
                    Rezé_z71f:
                    {
                      template:"SUN",
                      sun_format:"Coucher de soleil: sshour:ssminute ",
                      coords:"47.2172500,-1.5533600"
                    }
                  });
                </script>
                <br>
                <br>
                Semaine
                  
                <script type="text/javascript">      /*          Numero de la semaine             */
                            (function()
                            {
                            	var e=document.getElementsByTagName("a");
                            	var t=e.length;
                            	var n,r,i,s,o,u;
                            	for(s=0;s<t;s++)
                            	{
                            		n=e[s];r=n.attributes;
                            		i=r.length;
                            		for(o=0;o<i;o++)
                            		{
                            			if("href"===r[o].name)
                            			{
                            				u=r[o].value;
                            				if(0===u.indexOf("http://icalendrier.fr"))
                            				{
                            					window.glbf=true;
                            					s=t
                            				}o=i
                            			}
                            		}
                            	}
                            })();
                            (function()
                            {
                            	if(window.glbf)
                            	{
                            		Date.prototype.getWeek=function()
                            		{
                            			var e=new Date(this.valueOf());
                            			var t=(this.getDay()+6)%7;
                            			e.setDate(e.getDate()-t+3);
                            			var n=e.valueOf();
                            			e.setMonth(0,1);
                            			if(e.getDay()!=4)
                            			{
                            				e.setMonth(0,1+(4-e.getDay()+7)%7)
                            			}
                            			return 1+Math.ceil((n-e)/6048e5)
                            		};
                            		document.write((new Date).getWeek())
                            	}
                            })()
                </script>  
                <br><br>
                <script type="text/javascript">       /*           Nom du Jour          */
                    (function()
                    {
                    	window.glbf=false;
                    	window.caldate=new Date;
                    	var e=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
                    	document.write(e[window.caldate.getDay()])
                    })()
                </script> 
                <script type="text/javascript">      /*           Numero du Jour           */
                                (function()
                                {
                                	window.glbf=true;
                                	if(window.glbf)
                                	{
                                		var e=window.caldate.getDate();
                                		if(e<10)
                                		{
                                			document.write("0")
                                		}
                                		else
                                		{
                                			document.write((""+e).charAt(0))
                                		}
                                		if(e<10)
    	                            	{
    	                            		e="0"+e
    	                            	}
                                		document.write((""+e).charAt(1))
                                	}
                                })()
                </script>

                <script type="text/javascript">               /*            Nom du Mois            */
                            (function(){var e=new Array("Jan.","Fév.","Mar.","Avr.","Mai","Juin","Juil.","Août","Sep.","Oct.","Nov.","Déc.");document.write(e[window.caldate.getMonth()])})()
                </script> 
                <br><br>
                Nous fétons la saint(e)        
                <script type="text/javascript">         /*           Nom du saint            */
                            eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(4r(){Z f=[1,2,3,4,5,6,7,8,9,10,11,12];f[1]=b c();f[1][1]="2k 0 l\'2o";f[1][2]="2E";f[1][3]="2Gè3b";f[1][4]="3l";f[1][5]="3P";f[1][6]="Mé1r";f[1][7]="1t";f[1][8]="1D";f[1][9]="1F";f[1][10]="1P";f[1][11]="1X";f[1][12]="1Z";f[1][13]="2m";f[1][14]="2r";f[1][15]="Ré2S";f[1][16]="3g";f[1][17]="3o";f[1][18]="47";f[1][19]="5O";f[1][20]="Sé1v";f[1][21]="1Eès";f[1][22]="E";f[1][23]="2g";f[1][24]="gçk 0 2p";f[1][25]="2D 0 y";f[1][26]="2I";f[1][27]="2Tèi";f[1][28]="1d d\'3G";f[1][29]="3Y";f[1][30]="4f";f[1][31]="4E";f[2]=b c();f[2][1]="4Y";f[2][2]="Oé5R";f[2][3]="5U";f[2][4]="Vé5X";f[2][5]="7p";f[2][6]="7r";f[2][7]="1lè1m";f[2][8]="1n";f[2][9]="1o";f[2][10]="1p";f[2][11]="1q Q 0 1s";f[2][12]="Fé1u";f[2][13]="Bé1w";f[2][14]="1x";f[2][15]="1y";f[2][16]="1z";f[2][17]="1A";f[2][18]="1B";f[2][19]="1C";f[2][20]="Xée";f[2][21]="1e";f[2][22]="1G";f[2][23]="1H";f[2][24]="1I";f[2][25]="1Jéo";f[2][26]="1K";f[2][27]="1L";f[2][28]="1M";f[2][29]="1N";f[3]=b c();f[3][1]="1O";f[3][2]="1g i 1Q";f[3][3]="1Ré1Sé";f[3][4]="1T";f[3][5]="1U";f[3][6]="1V";f[3][7]="Fé1Wé";f[3][8]="h 0 1Y";f[3][9]="gç1h";f[3][10]="2a";f[3][11]="2b";f[3][12]="2c";f[3][13]="2d";f[3][14]="2e";f[3][15]="2f";f[3][16]="Béné2h";f[3][17]="2i";f[3][18]="2j";f[3][19]="1j";f[3][20]="2l";f[3][21]="Aé2n";f[3][22]="Léa";f[3][23]="2q";f[3][24]="w";f[3][25]="2s";f[3][26]="2t";f[3][27]="2u";f[3][28]="2v";f[3][29]="2w";f[3][30]="2xédée";f[3][31]="2y";f[4]=b c();f[4][1]="2z";f[4][2]="2A";f[4][3]="2B";f[4][4]="2C";f[4][5]="Nèp";f[4][6]="2F";f[4][7]="J-2H. 0 q 2J";f[4][8]="2K";f[4][9]="2L";f[4][10]="2M";f[4][11]="2N";f[4][12]="2O";f[4][13]="2P";f[4][14]="2Q";f[4][15]="2R";f[4][16]="Tît-1j";f[4][17]="2U";f[4][18]="2V";f[4][19]="2W";f[4][20]="2X";f[4][21]="2Y";f[4][22]="2Z";f[4][23]="32";f[4][24]="33èi";f[4][25]="34";f[4][26]="35";f[4][27]="36";f[4][28]="37é38";f[4][29]="w 0 39";f[4][30]="3a";f[5]=b c();f[5][1]="FêU 3c 3d";f[5][2]="3e";f[5][3]="3f - u";f[5][4]="3h";f[5][5]="3i";f[5][6]="3j";f[5][7]="3kèi";f[5][8]="W 3m";f[5][9]="3nôv";f[5][10]="3p";f[5][11]="3q";f[5][12]="3r";f[5][13]="3s";f[5][14]="3t";f[5][15]="3u";f[5][16]="3vé";f[5][17]="3w";f[5][18]="3x";f[5][19]="3y";f[5][20]="3z";f[5][21]="3A";f[5][22]="3B";f[5][23]="3C";f[5][24]="3D";f[5][25]="3E";f[5][26]="Bé3F";f[5][27]="Y";f[5][28]="3H";f[5][29]="3I";f[5][30]="3J";f[5][31]="3K. 0 q 3L";f[6]=b c();f[6][1]="3M";f[6][2]="3N";f[6][3]="Ké3O";f[6][4]="1k";f[6][5]="3Q";f[6][6]="3R";f[6][7]="3S";f[6][8]="Mé3T";f[6][9]="3U";f[6][10]="3V";f[6][11]="3Wé";f[6][12]="3X";f[6][13]="1a 0 3Z";f[6][14]="40ée";f[6][15]="41";f[6][16]="h gçk Ré42";f[6][17]="43é";f[6][18]="Lé44";f[6][19]="45";f[6][20]="46è1b";f[6][21]="48é";f[6][22]="49";f[6][23]="4a";f[6][24]="h-4b";f[6][25]="4c";f[6][26]="4d";f[6][27]="4e";f[6][28]="Nénée";f[6][29]="1c - y";f[6][30]="4g";f[7]=b c();f[7][1]="4h";f[7][2]="4i";f[7][3]="1d";f[7][4]="4j";f[7][5]="1a";f[7][6]="4k";f[7][7]="4l";f[7][8]="4m";f[7][9]="4n";f[7][10]="4o";f[7][11]="Tît";f[7][12]="4p";f[7][13]="4q m 4sël";f[7][14]="FêU 4t";f[7][15]="4u";f[7][16]="4v Q 4w 4x";f[7][17]="4y";f[7][18]="4zédé4A";f[7][19]="4Bèp";f[7][20]="4C";f[7][21]="4D";f[7][22]="x 4F";f[7][23]="4G";f[7][24]="4H";f[7][25]="u";f[7][26]="4I m 4J";f[7][27]="4K";f[7][28]="4L";f[7][29]="4M";f[7][30]="4N";f[7][31]="4O 0 4P";f[8]=b c();f[8][1]="4Q";f[8][2]="4R 4S";f[8][3]="4T";f[8][4]="h-x 4U";f[8][5]="4V";f[8][6]="4W-4X";f[8][7]="1fé4Z";f[8][8]="50";f[8][9]="51";f[8][10]="52";f[8][11]="53";f[8][12]="54";f[8][13]="55";f[8][14]="56";f[8][15]="57";f[8][16]="58";f[8][17]="59";f[8][18]="Hélèp";f[8][19]="h 5a";f[8][20]="5b";f[8][21]="5c";f[8][22]="5d";f[8][23]="5e 0 5f";f[8][24]="5gélé5h";f[8][25]="5i";f[8][26]="5j";f[8][27]="5k";f[8][28]="Y";f[8][29]="5l";f[8][30]="5m";f[8][31]="5n";f[9]=b c();f[9][1]="5o";f[9][2]="5p";f[9][3]="5qé5r";f[9][4]="5s";f[9][5]="5tï5u";f[9][6]="5v";f[9][7]="5w";f[9][8]="5xé";f[9][9]="5y";f[9][10]="5zès";f[9][11]="5A";f[9][12]="5B";f[9][13]="Xé";f[9][14]="5C 5D";f[9][15]="5E";f[9][16]="5F";f[9][17]="5G";f[9][18]="5Hè5I";f[9][19]="5J";f[9][20]="5K";f[9][21]="5L";f[9][22]="5M";f[9][23]="5N";f[9][24]="jè5P";f[9][25]="5Q";f[9][26]="Côv m 1e";f[9][27]="E 0 y";f[9][28]="5S";f[9][29]="5T";f[9][30]="Jérôv";f[10]=b c();f[10][1]="jérè1i 0 Jé5V";f[10][2]="Lé5W";f[10][3]="Gé5Y";f[10][4]="gçk d\'5Z";f[10][5]="60";f[10][6]="61";f[10][7]="62";f[10][8]="Pé63";f[10][9]="64";f[10][10]="65";f[10][11]="66";f[10][12]="67";f[10][13]="Gé68";f[10][14]="69";f[10][15]="jérè1i d\'6a";f[10][16]="6b";f[10][17]="6c";f[10][18]="6d";f[10][19]="6eé";f[10][20]="6f";f[10][21]="Cé6g";f[10][22]="6h";f[10][23]="h 0 6i";f[10][24]="6j";f[10][25]="6ké6l";f[10][26]="6m";f[10][27]="6n";f[10][28]="6o";f[10][29]="6p";f[10][30]="6q";f[10][31]="6r";f[11]=b c();f[11][1]="6s";f[11][2]="Dé6t";f[11][3]="6u";f[11][4]="1g";f[11][5]="6v";f[11][6]="6w";f[11][7]="6x";f[11][8]="6y";f[11][9]="jé6z";f[11][10]="Lé6A";f[11][11]="W 6B";f[11][12]="6C";f[11][13]="6D";f[11][14]="6E";f[11][15]="6F";f[11][16]="6G";f[11][17]="6H";f[11][18]="6I";f[11][19]="6J";f[11][20]="6K";f[11][21]="Oé6L 0 x";f[11][22]="Cé6M";f[11][23]="Aé6N";f[11][24]="6O";f[11][25]="w";f[11][26]="6P";f[11][27]="Sé6Q";f[11][28]="u 0 q 6R";f[11][29]="6S";f[11][30]="6Té";f[12]=b c();f[12][1]="6U";f[12][2]="6V";f[12][3]="gçk 6W";f[12][4]="6X";f[12][5]="Gé6Y";f[12][6]="6Z";f[12][7]="70";f[12][8]="71.72";f[12][9]="1c 73";f[12][10]="74";f[12][11]="75";f[12][12]="J-gç. 0 76";f[12][13]="77";f[12][14]="78";f[12][15]="79";f[12][16]="7a";f[12][17]="1fël";f[12][18]="7b";f[12][19]="7c";f[12][20]="jé7d";f[12][21]="7e";f[12][22]="gç1h 7fè1b";f[12][23]="7g";f[12][24]="7hèi";f[12][25]="7iël";f[12][26]="7j";f[12][27]="h";f[12][28]="7k";f[12][29]="7l";f[12][30]="7m";f[12][31]="7n";7o(z.7q){Z a=f[z.I.7s()+1][z.I.7t()];7u.7v(a)}})();',62,466,'de|||||||||||new|Array||||Fran|Jean|le|Th|ois||et|||ne|la||||Jacques|me|Catherine|Marie|Paul|window|Cl||||Vincent||||caldate|||||Ir|Pr||Dame|||Beno|te||Armistice|Aim|Augustin|var|||||||||||Antoine|re|Pierre|Thomas|Damien|Ga|Charles|oise|se|Joseph|Clotilde|Eug|nie|Jacqueline|Apolline|Arnaud|Ntr|laine|Lourdes|Raymond|lix|bastien|atrice|Valentin|Claude|Julienne|Alexis|Bernadette|Gabin|Lucien|Agn|Alix|Isabelle|Lazare|Modeste|Rom|Nestor|Honorine|Romain|Auguste|Aubin|Guillaume|Bon|Gu|nol|Casimir|Olive|Colette|licit|Pauline|Dieu|Tatiana|||||||||||Vivien|Rosine|Justine|Rodrigue|Mathilde|Louise|Banard|dicte|Patrice|Cyrille|Jour|Printemps|Yvette|mence|an|Sales|Victorien|Nina|Annonciation|Larissa|Habib|Gontran|Gwladys|Am|Benjamin|Hugues|Sandrine|Richard|Isidore|Conversion|Basile|Marcellin|Genevi|Bapt|Paule|Salle|Julie|Gautier|Fulbert|Stanislas|Jules|Ida|Maxime|Paterne|mi|Ang|Anicet|Parfait|Emma|Odette|Anselme|Alexandre|||Georges|Fid|Marc|Alida|Zita|Val|rie|Sienne|Robert|ve|du|travail|Boris|Philippe|Marcel|Sylvain|Judith|Prudence|Gis|Odilon|1945|Pac|Roseline|Solange|Estelle|Achille|Rolande|Matthias|Denise|Honor|Pascal|Eric|Yves|Bernardin|Constantin|Emile|Didier|Donatien|Sophie|renger|Aquin|Germain|Aymar|Ferdinand|Visit|Vierge|Justin|Blandine|vin|Edouard|Igor|Norbert|Gilbert|dard|Diane|Landry|Barnab|Guy|Gildas|Padoue|Elis|Germaine|gis|Herv|once|Romuald|Silv|Prisca|Et|Alban|Audrey|Baptiste|Prosper|Anthelme|Fernand|Martine|Martial|Thierry|Martinien|Florent|Mariette|Raoul|Thibault|Amandine|Ulrich|Olivier|Henri|function|Jo|Nationale|Donald|Nte|Mt|Carmel|Charlotte|Fr|ric|Ars|Marina|Victor|Marcelle|Madeleine|Brigitte|Christine|Anne|Joachin|Nathalie|Samson|Marthe|Juliette|Ignace|Loyola|Alphonse|Julien|Eymard|Lydie|Vianney|Abel|Trans|figuration|Ella|tan|Dominique|Amour|Laurent|Claire|Clarisse|Hippolyte|Evrard|Assomption|Armel|Hyacinthe|Eudes|Bernard|Christophe|Fabrice|Rose|Lima|Barth|my|Louis|Natacha|Monique|Sabine|Fiacre|Aristide|Gilles|Ingrid|Gr|goire|Rosalie|Ra|ssa|Bertrand|Reine|Nativit|Alain|In|Adelphe|Apollinaire|Croix|Glorieuse|Roland|Edith|Renaud|Nad|ge|Emilie|Davy|Matthieu|Maurice|Automne|Marius|cle|Hermann|sentation|Venceslas|Michel|Blaise|sus|ger|ronique|rard|Assise|Fleur|Bruno|Serge|lagie|Denis|Ghislain|Firmin|Wilfried|raud|Juste|Avila|Edwige|Baudoin|Luc|Ren|Adeline|line|Elodie|Capistran|Florentin|Cr|pin|Dimitri|Emeline|Jude|Narcisse|Bienvenue|Quentin|Toussaint|funts|Hubert|Sylvie|Bertille|Carine|Geoffroy|odore|on|1918|Christian|Brice|Sidoine|Albert|Marguerite|Elisabeth|Aude|Tanguy|Edmond|sence|cile|ment|Flora|Delphine|vrin|Marche|Saturnin|Andr|Florence|Viviane|Xavier|Barbara|rald|Nicolas|Ambroise|Immac|Conception|Fourier|Romaric|Daniel|Chantal|Lucie|Odile|Ninon|Alice|Gatien|Urbain|ophile|Hiver|Xavi|Armand|Ad|No|Etienne|Innocents|David|Roger|Sylvestre|if|Agathe|glbf|Gaston|getMonth|getDate|document|write'.split('|'),0,{}))
                </script>         
                <br>    <br>    
                Phase de la lune :                 
                
                <script type="text/javascript">    /*           Phases de la lune            */
             	    function moon_day(e){var t=function(e){return e-Math.floor(e)};var n=e.getJulian();var r=e.getFullYear();var i=3.14159265/180;var s,o,u,a,f,l,c,h,p,d;s=Math.floor((r-1900)*12.3685);o=(r-1899.5)/100;u=o*o;a=o*o*o;f=2415020+29*s;l=1178e-7*u-1.55e-7*a+(.75933+.53058868*s)-(837e-6*o+335e-6*u);c=360*t(s*.08084821133)+359.2242-333e-7*u-347e-8*a;h=360*t(s*.07171366128)+306.0253+.0107306*u+1236e-8*a;p=360*t(s*.08519585128)+21.2964-.0016528*u-239e-8*a;var v=0;var m=0;while(m<n){var g=l+1.530588*v;var y=(c+v*29.10535608)*i;var b=(h+v*385.81691806)*i;var w=(p+v*390.67050646)*i;g-=.4068*Math.sin(b)+(.1734-393e-6*o)*Math.sin(y);g+=.0161*Math.sin(2*b)+.0104*Math.sin(2*w);g-=.0074*Math.sin(y-b)-.0051*Math.sin(y+b);g+=.0021*Math.sin(2*y)+.001*Math.sin(2*w-b);g+=.5/1440;d=m;m=f+28*v+Math.floor(g);v++}return(n-d)/29.53059}Date.prototype.getJulian=function(){return this/864e5-this.getTimezoneOffset()/1440+2440587.5};var today=new Date;var names=["Nouvelle lune","Premier croissant","Premier quartier","Gibbeuse croissante","Pleine lune","Gibbeuse décroissante","Dernier quartier","Dernier croissant","Nouvelle lune"];var bgpos=[0,-18,-36,-54,-72,-90,-108,-126,0];var moonphIndex=Math.floor((moon_day(today)+.0625)*8);window.document.getElementById("mphabg").style.backgroundPosition=bgpos[moonphIndex]+"px 0";document.write(names[moonphIndex])
                </script>
                </h2>
            
         


          </div>
        </div>
      </div>
    </div>




      <!-- Fichiers Javascript de Bootstrap--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./bootstrap/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
