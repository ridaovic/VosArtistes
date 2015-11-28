<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
         <link rel="stylesheet" href="css/jquery-ui.css" />
        <link rel="stylesheet" href="css/datepicker.css" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet">
           <link rel="stylesheet" type="text/css" href="css/styles.css">
                 
         

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--> 
        <title>Vos artistes</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/autocomplete_ar.js"></script>
        <script src="js/autocomplete_art_oeuvre.js"></script>
        <script src="js/autocomplete_oeuvre.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/nice_select.js"></script>
        <link href="css/nice_select.css" rel="stylesheet">

            <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 5,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        
        

      });
    </script>

    <script type="text/javascript" > $('document').ready(function(){ $('.change').niceselect(); }) </script>
   
   
    </head>

    <body>

        <div id="bloc_page">
            <header>
                   <div id="header_top">
                     <div id="logo">
                        <img src="images/logo.png">
                     </div>
                     <div id="header_left">
                      <div id="lang">
                        <div class="btn-group">
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                              fr
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">fr</a></li>
                              <li><a href="#">en</a></li>
                            </ul>
                          </div>
                        </div>
                      </div> 
                      <div id="newsletter">
                      <form class="newsletterform" action="#">
                      <input type="text" placeholder="newsletter">
                      <button class="btn btn-default" type="submit"><i class="fa fa-check"></i></button>
                      </form> </div>


                       <nav>
                            <div id='cssmenu'>
                            <ul>
                               <li><a href='index.php'><span>Accueil</span></a></li>
                               <li><a href='artistes.php'><span>Artistes</span></a></li>
                               <li><a href='oeuvres.php'><span>Oeuvres</span></a></li>
                               <li><a href='evenments.php'><span>Actualités & Evénements</span></a></li>
                               <li><a href='search.php'><span>Espace Membres</span></a></li>
                               <li class='last'><a href='contact.php'><span>Contact</span></a></li>
                            </ul>
                            </div>
                    </nav>
                     </div> <br>
                   </div> 

               
                   <div id="header_bottom">
                     
                     <div style="float: left;width: 500px;">
                      

                      <div id="search">
                          <!--All -->
                          <form class="searchform" id="aaa" action="#">
                              <input style="width:454px;" type="text" placeholder=" Artiste, Evènement, Œuvre...">


                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                          <!-- Artistes Oeuvres -->
                          <form class="searchform" action="#" id="bbb" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste, Œuvre"  id="search_a_o"><span>|</span>



                              <select class="select" style="width:125px;">
                                  <option>Type D’oeuvre</option>
                                  <option value="Sculptures">Sculptures</option>
                                  <option value="Photographies">Photographies</option>
                                  <option value="Bijoux">Bijoux</option>
                                  <option value="Livres">Livres</option>
                                  <option value="Objets de décoration">Objets de décoration</option>
                                  <option value="Caftans">Caftans</option>
                                  <option value="Meubles">Meubles</option>
                                  <option value="Tapis">Tapis</option>
                              </select>
                              <span>|</span>

                              <select class="select" style="width:75px;">
                                  <option>Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option>Naif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Artistes -->
                          <form class="searchform" action="#" id="eee" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Artiste"  id="tags"><span>|</span>



                              <select class="select" style="width:125px;">
                                  <option>Type D’oeuvre</option>
                                  <option value="Sculptures">Sculptures</option>
                                  <option value="Photographies">Photographies</option>
                                  <option value="Bijoux">Bijoux</option>
                                  <option value="Livres">Livres</option>
                                  <option value="Objets de décoration">Objets de décoration</option>
                                  <option value="Caftans">Caftans</option>
                                  <option value="Meubles">Meubles</option>
                                  <option value="Tapis">Tapis</option>
                              </select>
                              <span>|</span>

                              <select class="select" style="width:75px;">
                                  <option>Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option>Naif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          <!-- Oeuvres -->

                          <form class="searchform" action="#" id="fff" style="display:none">
                              <input style="width:226px;" type="text" placeholder=" Œuvre"  id="search_o"><span>|</span>



                              <select class="select" style="width:125px;">
                                  <option>Type D’oeuvre</option>
                                  <option value="Sculptures">Sculptures</option>
                                  <option value="Photographies">Photographies</option>
                                  <option value="Bijoux">Bijoux</option>
                                  <option value="Livres">Livres</option>
                                  <option value="Objets de décoration">Objets de décoration</option>
                                  <option value="Caftans">Caftans</option>
                                  <option value="Meubles">Meubles</option>
                                  <option value="Tapis">Tapis</option>
                              </select>
                              <span>|</span>

                              <select class="select" style="width:75px;">
                                  <option>Style</option>
                                  <option>Moderne</option>
                                  <option>Figuratif</option>
                                  <option>Abstrait</option>
                                  <option>Naif</option>
                              </select>

                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>

                          <!-- evenments -->
                          <form class="searchform" action="#" id="ccc">
                              <input type="text" placeholder="Evénement" style="width:120px;"><span>|</span>

                              <select class="select" style="width:130px;">

                                  <option>Type D’événement</option>
                                  <option>Vernisage</option>
                                  <option>Exposition photo</option>
                                  <option>Festival</option>
                                  <option>Conférenc et Galas</option>
                                  <option>Salon</option>
                                  <option>Autres</option>
                              </select>
                              <span>|</span>
                              <input type="text" placeholder=" debut" value="" id="dpd1" style="width:80px;">
                              <span>|</span>
                              <input type="text" placeholder=" fin" value="" id="dpd2" style="width:80px;">



                              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                     </div>
                     </div>
                    
                     <div id="search_av"><span id="sva">Chercher avancée</span> 
                       
                       <div id="search_sub">
                          
                          <table style="width:100%">
                            <tr>
                              <td><label>Artistes</label></td>
                              <td><input type="checkbox" id="art" value="artiste" checked=""></td>
                            </tr>

                            <tr>
                              <td><label>Oeuvres</label></td>
                              <td><input type="checkbox" id="oeu" value="oeuvre" checked=""></td>
                            </tr>

                            <tr>
                              <td><label>Evénements</label></td>
                              <td><input type="checkbox" id="eve" value="Evenement" checked=""></td>
                            </tr>
                          </table>

                       </div>
                     </div>

                     <div class="social">
                       
                       <span><a href='#'><img src="images/twitter.png"></a></span>
                       <span><a href='#'><img src="images/google.png"></a></span>
                       <span><a href='#'><img src="images/facebook.png"></a></span>
                     </div>
                      <br>
                   </div> 
            </header>
            
           <section class="sec_article">
           <br>
                 

              <div id="artist_left">
             
                 <div id="search_per">
                  <div id="search_titre">Personaliser votre recherche</div>
                   <div id="search_form">
                       <form>
                           <label> Artiste :</label><br><input type="text"  id="tags1"><br>
                           <label> Type D’oeuvre :</label><br><select class="select1">
                               <option value="All" selected="selected"></option>
                               <option value="Sculptures">Sculptures</option>
                               <option value="Photographies">Photographies</option>
                               <option value="Bijoux">Bijoux</option>
                               <option value="Livres">Livres</option>
                               <option value="Objets de décoration">Objets de décoration</option>
                               <option value="Caftans">Caftans</option>
                               <option value="Meubles">Meubles</option>
                               <option value="Tapis">Tapis</option> </select>

                           <label> style :</label><br><select class="select1"><option></option>
                               <option>Moderne</option>
                               <option>Figuratif</option>
                               <option>Abstrait</option>
                               <option>Naif</option>
                           </select>
                           <br>

                       </form>
                   <br>
                  </div>
                 </div>
                 <br>
                 <br>
                 
                 <div class="artistarticle">
                
                    <div class="seagreen"><span>Oeuvres Tendances</span></div><br>

                    <div class="oeuvre">
                      <div class="oeuvre_img"><img src="images/tableaux/1.jpg" width="120" height="90"></div>
                        <div class="oeuvre_detail"><strong>“La cicona”</strong><br>Boukil Abdellah Sculptures</div>
                        <div class="oeuvre_plus"><a class="textdeco" href="oeuvre.php">+</a></div>
                    </div><hr style="background: none repeat scroll 0 0 #41966c;height: 2px;width: 200px;">

                    <div class="oeuvre">
                      <div class="oeuvre_img"><img src="images/tableaux/1.jpg" width="120" height="90"></div>
                        <div class="oeuvre_detail"><strong>“La cicona”</strong><br>Boukil Abdellah Sculptures</div>
                        <div class="oeuvre_plus"><a class="textdeco" href="oeuvre.php">+</a></div>
                    </div><hr style="background: none repeat scroll 0 0 #41966c;height: 2px;width: 200px;">


                    <div class="oeuvre">
                      <div class="oeuvre_img"><img src="images/tableaux/1.jpg" width="120" height="90"></div>
                        <div class="oeuvre_detail"><strong>“La cicona”</strong><br>Boukil Abdellah Sculptures</div>
                        <div class="oeuvre_plus"><a class="textdeco" href="oeuvre.php">+</a></div>
                    </div>
                  </div>
                <br>
                 <br>
              
                <div class="artistarticle">
                
                    <div class="teal"><span>Evénements & News</span></div><br>

                    <div class="evenment">
                    <span class="evenment_titre">Festival National des Arts Populaires</span>

                    <div class="evenment_img"><img src="images/1.jpg"></div><br>

                    <p>Du 03 Au 16 juin 2014 à 18h30.<br>Au Palais des congrès, Marrakech.</p>

                    <div class="evenment_plus"><a class="textdeco" href="evenment.php">+</a></div>

                    </div>

                </div>

                <br>
                 <br>

             </div>
             <div id="artist_right">

             
              <div style="float: right; margin-right: 10px;">
                    <span><a href="#sui"><img src="images/sui.png"></a></span>
              </div>
            

              <div style="float: left; margin-left: 18px;">
                     <span><a href="#pre"><img src="images/pre.png"></a></span>
              </div>
                
              <div id="h1-id" align="center"><h1>Majorelle</h1> </div>
          
                
                <div id="artist_detail">
        
                  Nom : <span> Majorelle </span><br><br>
                  Prénom: <span> Jacques</span><br><br>
                  Age: <span> Mixte</span><br><br>
                  Nationalité : <span> Français</span><br><br>
                  Style : <span> Moderne</span><br><br>
                </div>
                 <div id="artist_img">
                   <img src="images/artiste.jpg" height="280"><br>
                   <div class="right">
                     <img src="images/face.png">
                   <img src="images/twit.png">
                   <img src="images/linkedin.png">
                   <img src="images/google+.png">
                   </div>
                </div>
                <br>
                
                <div id="biographie">
                  <h1>Biographie :</h1>
                  <p>Les Kasbahs de l'Atlas Album contiennent 30 planches, rehaus sées d'or et d'argent sur carton, dont 21 en quadrichromie et 9 en offset (ainsi que la table des matières) reliure en tissu, dans son emboitage d'origine en vert.</p>
                  <p>
                    Achevé le 15 octobre 1930 et édité sous la direction de Lucien Vogel chez Jules Meynial à Paris, 520 exemplaires, l’album est précédé d’une lettre-préface du maréchal Lyautey et d’un article de Pierre Mac Orlan emboîtés dans un tissu brodé, 39 x 30 cm ...
                  </p><br>
                  <a href="#" class="right">Lire la suite</a>
                </div>
                <br>

                 <div class="content">
                 <h3>Ses Oeuvres</h3>
                      <div class="slider center">
                        <div><h3><a href="img/11.jpg" class="zoombox zgallery1" title="oeuvre.php" ><img src="img/1.jpg" ></a></h3></div>
                        <div><h3><a href="img/13.jpg" class="zoombox zgallery1" title="oeuvre.php" ><img src="img/2.jpg" ></a></h3></div>
                        <div><h3><a href="img/12.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/3.jpg" ></a></h3></div>
                        <div><h3><a href="img/14.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/4.jpg" ></a></h3></div>
                        <div><h3><a href="img/15.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/5.jpg" ></a></h3></div>
                        <div><h3><a href="img/16.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/6.jpg" ></a></h3></div>
                        <div><h3><a href="img/17.jpg" class="zoombox zgallery1" title="oeuvre.php"><img src="img/7.jpg" ></a></h3></div>
                      </div>
                  </div>
                <br>

               
                

                <!-- <div id="pagination">
                  <a href="" class="left"> << Précédant </a>
                  <a href="" class="right"> Suivant >> </a>
                </div> -->
                 </div>
                <br>
            
             
           </section>
            
          
            <footer>
           
                <div id="footer_top"> <br>
                  <div class="row">
                      <div class="col-lg-4">
                        <div class="liste">
                                  <ul>
                                      <li><a href="#">Artistes</a></li>
                                      <li><a href="#">Oeuvres</a></li>
                                      <li><a href="#">Actualités & Evénements</a></li>
                                      
                                  </ul>
                        </div>
                      </div>
                      
                      <div class="col-lg-4">
                        <div class="liste">
                          <ul>
                              <li><a href="#">Mentions légales</a></li>
                              <li><a href="#">Accès partenaire</a></li>
                              <li><a href="#">Accés membre</a></li>
                              <li><a href="#">Condition générale de vente</a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-lg-4">
                        <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
                          </ul>
                        </div>
                      </div>
        
                    </div>

                  <br>
                  </div>

                <div id="footer_bottom">
                  <div id="footer_bottom_left">Copyright @2014</div>
                  <div id="footer_bottom_center"><img src="images/logoeco.png"></div>
                  <div id="footer_bottom_right">
                    <span><img src="images/facebook-footer.png"></span>
                    <span><img src="images/twitter-footer.png"></span>
                    <span><img src="images/rss-footer.png"></span>
                  </div>
                  

                </div>

               
                
            </footer>
        </div>



          <div class="xxx">
            
                <header class="header" style="background:#c85484">
              <div id="n"><a href="#" class="slideout-menu-toggle" ><i class="fa fa-bars"></i> </a></div>

              <div class="slideout-menu" id="slideout-rose">
               <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Accueil</a></li>
                <li><a href="artistes.php"><i class="fa fa-paint-brush"></i> Artistes</a></li>
                <li><a href="oeuvres.php"><i class="fa fa-picture-o"></i> Oeuvres</a></li>
                <li><a href="evenments.php"><i class="fa fa-calendar"></i> Actualités & Evénements</a></li>
                <li><a href="#"><i class="fa fa-users"></i> Espace Membres</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Contact</a></li>
                <li class="def slideout-rose">Social Media</li>
                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                <li class="def slideout-rose">Newsletter</li>
                
              </ul>
              <div style="margin: 10px;">
                <h4>Email Newsletters</h4>
                  <p>Abonnez-vous à recevoir l'inspiration, des idées et nouvelles dans votre boîte de réception.</p>

                  <form>
                    <input type="text" placeholder="newsletter">
                    <span class="nbutton slideout-rose">Souscrire</span>
                  </form>
              </div>
              
              </div>

                    <div id="logo">
                        <img src="images/logo.png">
                    </div>

                    <div id="sos"><i class="fa fa-search"></i></div>

                </header>

                <div class="contents">

                <section>
                  <div class="social">
                  <div class="left-social">
                       <span><a href='#'><img src="images/twitter3.png"></a></span>
                       <span><a href='#'><img src="images/google2.png"></a></span>
                       <span><a href='#'><img src="images/facebook1.png"></a></span>
                  </div>
                  
                   <form class="mininewsletterformrose" action="#">
                      <input type="text" placeholder="newsletter">
                      <button class="btn btn-default" type="submit"><i class="fa fa-check"></i></button>
                      </form>
                  
                 </div>
                </section>

                <section>
                 <div id="ra" class="racolorrose">

                  <div class="searchmob">
                   
                     <table  style="margin: 0 auto; width:90%; text-align: right;">
                            <tr>
                              <td><label>Artistes</label></td><td><input id="miniart" type="checkbox" ></td>
                              
                               <td><label>Oeuvres</label></td><td><input id="minioeu" type="checkbox"></td>
                             
                               <td><label>Evenement</label></td><td><input id="minieve" type="checkbox"></td>
                              
                            </tr>

                          </table>
                          <form id="kkk" class="raform " action="#" style="display:block;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres,Evénements"><br><br>
                      <button type="button" class=" btm-themesrose ">Valider</button><br>


                  </form>

                  <form id="hhh" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Artistes,Oeuvres"><br><br>

                      <select>
                          <option>Type D’oeuvre</option>
                          <option value="Sculptures">Sculptures</option>
                          <option value="Photographies">Photographies</option>
                          <option value="Bijoux">Bijoux</option>
                          <option value="Livres">Livres</option>
                          <option value="Objets de décoration">Objets de décoration</option>
                          <option value="Caftans">Caftans</option>
                          <option value="Meubles">Meubles</option>
                          <option value="Tapis">Tapis</option>
                          <option value="Tableaux">Tableaux</option>
                      </select><br><br>
                      <select>
                         <option>Style</option>
                          <option>Moderne</option>
                          <option>Figuratif</option>
                          <option>Abstrait</option>
                          <option>Naif</option>
                      </select><br><br>

                      <button type="button" class=" btm-themesrose ">Valider</button>

                      
                  </form>

                  <form id="ddd" class="raform" action="#" style="display:none;">
                      
                      <input type="text" placeholder="Evénements"><br><br>
                      <input id="dp5" type="text" placeholder="Date début"><br><br>
                      <input id="dp6" type="text" placeholder="Date fin"><br><br>

                      <button type="button" class=" btm-themesrose ">Valider</button>

                      
                  </form>
                   
                     <br>
                  </div>
                  
               
                    

                </div>
                <br>


                <div class="mini art">
                
                <img src="images/mobil/even.jpg" class="peloton"><br>
                

                  

                  <div class="detail">
                      <table style="width:100%">
                       
                        <tr>
                          <td><span>Nom :</span>  Majorelle</td>
                          <td><span>Prénom :</span>   Jacques</td>
                        </tr>
                        <tr>
                          <td><span>Age :</span>  Mixte</td>
                          <td><span>Style :</span>   Moderne</td>
                        </tr>
                         <tr>
                          <td colspan="2"> <span>Nationalité :</span>  Français </td>
                        </tr>

                      </table>
                    </div>

                  
                     <div class="detail">
                       <h1>Biographie : </h1>
                      <p>Les Kasbahs de l'Atlas Album contiennent 30 planches, rehaus sées d'or et d'argent sur carton, dont 21 en quadrichromie et 9 en offset (ainsi que la table des matières) reliure en tissu, dans son emboitage d'origine en vert.
                      maréchal Lyautey et d’un article de Pierre Mac Orlan emboîtés dans un tissu brodé, 39 x 30 cm ...</p>
                      
                      <br>
                      <a class="right" href="#"  style="color:#c7447a">Lire la suite</a>
                      <br>
                    </div>

                  
                <br>
                <span class="minibtn" style="background:#c85484; color:#FFF;">Voir ses Oeuvres </span>

                </div>

                <br>
                <br>
                </section>

                 

                <section class="footer" style="background:#c85484">
                <div id="fmobil" style="background:#c85484">
                  <div class="liste no">
                          <ul>
                              <li><i class="fa fa-phone"></i><a href="#"> +212.6.60.15.94.94</a></li>
                              <li><i class="fa fa-envelope"></i><a href="#">  vosartistes.com@gmail.com</a></li>
                              <li><i class="fa fa-fax"></i><a href="#"> +212.5.22.94.24.13</a></li>
                          </ul>
                  </div>


                  <div class="bottom_right">
                    
                    <div class="ftr">
                      <i><img src="img/logoeco.png"></i>
                      <i class="fa fa-facebook"></i>
                      <i class="fa fa-twitter"></i>
                      <i class="fa fa-rss"></i>
                    </div>
                    
                    
                    <div>Copyright @2014</div>
                  

                  </div>


                </div>

                </section>

                   
                </div>

        </div>
    
<script type="text/javascript" src="js/app.js"></script>

<script src="js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('.slideout-menu-toggle').on('click', function(event){
      event.preventDefault();
      // create menu variables
      var slideoutMenu = $('.slideout-menu');
      var slideoutMenuWidth = $('.slideout-menu').width();
      
      // toggle open class
      slideoutMenu.toggleClass("open");
      
      // slide menu
      if (slideoutMenu.hasClass("open")) {
        slideoutMenu.animate({
          left: "0px"
        }); 
         $( "#ra" ).removeClass( "visible" )
         $( '.peloton' ).removeClass( "blur" );
        $( '.miniartistes' ).removeClass( "blur" );

      } else {
        slideoutMenu.animate({
          left: -slideoutMenuWidth
        }, 250);  
      }
    });
});
</script>
  <script>
  
    $(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });


$(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd3').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd4')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd4').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });
$(function(){
      window.prettyPrint && prettyPrint();
      // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dp5').datepicker({
          onRender: function(date) {
            //return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dp6')[0].focus();
        }).data('datepicker');
        var checkout = $('#dp6').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
    });


  </script>


  <script type="text/javascript" src="js/slick.js"></script>
 <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="js/zoombox.js"></script>
        <script type="text/javascript">
            //<![CDATA[
            $(function(){
                $('a.zoombox').zoombox();
            });

            //]]>
        </script>


    </body>
</html>