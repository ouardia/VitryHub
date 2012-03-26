<?php
    if (elgg_is_logged_in()) {
            forward('activity');
    } else {
	$top_box = $vars['login'];
      }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
    </head>
     
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }
            (document, 'script', 'facebook-jssdk'));
        </script>
        <script>!
                function(d,s,id){
                var js,fjs=d.getElementsByTagName(s)[0];
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}
            }
            (document,"script","twitter-wjs");
        </script>
        
        <?php function AfficheSource($url){
            if ($ouverture = @fopen($url, "rb")){
                if ($lecture = stream_get_contents($ouverture))
                    {$pos = strpos($lecture, 'mn<');
                    $inf=substr($lecture, $pos-3,5);
                    if (strpbrk($inf,'<')){
                        $inf=strtr($inf,'<',' ');  
                        }
                    if(strpbrk($inf,'>')){
                        $inf=strtr($inf,'>',' '); 
                        }
                    return $inf;
                    }
                    }
                    @fclose($ouverture); 
                    }?>
        <br/><br/>
        
        <h2>
            <center> Local Information Service for Vitry-Sur-Seine Pilot </center> 
        </h2>
        <div class="fb-like" data-href="https://www.facebook.com/pages/PEOPLE-Smart-City-Vitry-sur-Seine/161606083921466" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="verdana"></div>
        <br/> <br/>
        <a href="https://twitter.com/SmartCity_Vitry" class="twitter-follow-button" data-show-count="false" data-lang="fr">Suivre @SmartCity_Vitry</a>
        <br/> <br/>
        <table width="100%" cellpadding="0" cellspacing="40" border="0" >
            <tr>
                <td bgcolor="#FF9900"> <center> Cartographie </center> </td>
                <td bgcolor="#FF9900"> <center> <?php echo utf8_encode("Météo"); ?> </center> </td>
                <td bgcolor="#FF9900"> <center> <?php echo utf8_encode("Qualité de l'air"); ?> </center></td>
                <td bgcolor="#FF9900"> <center> Prochain Bus </center></td>
            </tr>
            <tr>
                <td>
                    <br/><br/>
                    <center><iframe width="300" height="325" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=120+Rue+Paul+Armangot,+Vitry-sur-Seine&amp;aq=1&amp;oq=120+rue+paul+a&amp;sll=46.75984,1.738281&amp;sspn=8.174018,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=120+Rue+Paul+Armangot,+94400+Vitry-sur-Seine,+Val-De-Marne,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;ll=48.776814,2.376365&amp;output=embed"></iframe><br/><small><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=120+Rue+Paul+Armangot,+Vitry-sur-Seine&amp;aq=1&amp;oq=120+rue+paul+a&amp;sll=46.75984,1.738281&amp;sspn=8.174018,21.643066&amp;ie=UTF8&amp;hq=&amp;hnear=120+Rue+Paul+Armangot,+94400+Vitry-sur-Seine,+Val-De-Marne,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;ll=48.776814,2.376365" style=";text-align:left">Agrandir le plan</a></small> 
                    </center>
                </td> 
                <td>
                    <br/><br/>
                    <center><SCRIPT LANGUAGE="JavaScript" charset="UTF-8" SRC="http://france.meteofrance.com/portlet/plugins/meteo/VignetteMeteoVille3.javascript?idLieu=940810" TYPE="text/javascript"> </SCRIPT> 
                    </center>
                </td>
                <td> 
                <br/><br/>
                <center>
                    <?php echo utf8_encode("Rejets et niveaux de pollution près de chez vous ");
                    ?>
                <br/><br/> 
                </center>
                     <a href="http://www.airparif.fr/etat-air/air-et-climat-commune/ninsee/94081">
                         <center><img src="mod/LocalInformationService/graphics/airparif.png"/> </center> </a>
                </td>
                <td>
                    
                     
                    <center>  
                        <font size="11" >
                    <?php
                    //Url de la page web
                    $domaine = "http://www.ratp.fr/horaires/fr/ratp/bus/prochains_passages/PP/B132/132_581_591/A";
                    $domaine1 = "http://www.ratp.fr/horaires/fr/ratp/bus/prochains_passages/PP/B293/293_925_1003/A";
                    
                    //On affiche le code 
                    //Dirction Vitry Moulin Vert
                    echo '<br/> <br/>';
                    echo  ' <div align="center"><font face="arial" size="3">Bus <font color="blue"> 132 </font> dans: <font color="blue">'.AfficheSource($domaine). '</font> </font> <br/>'; 
                    //Dirction Choisy Sud 
                    echo '<br/>';
                    echo '<div align="center"><font face="arial" size="3"> Bus <font color="blue">293 </font>dans: <font color="blue">'. AfficheSource($domaine1).'</font></font></div>';  
                    
                    ?>
                        <br/><br/>
                        <a href="http://www.ratp.fr/horaires/fr/ratp/bus">
                        <center><img src="mod/LocalInformationService/graphics/ratp.png"/> </center> </a>
                        </font>
                    </center>
                </td>
            </tr>

            </table>
        <table width="100%" cellpadding="0" cellspacing="40" border="0">
            <tr>
                <td bgcolor="#FF9900"> <center>  Info Traffic </center> </td>
                <td bgcolor="#FF9900"> <center> Etat de Transports en Commun </center></td>
            </tr>
            <tr>
                <td><br/><br/>
                    <center><script type="text/javascript" src="http://www.infotrafic.com/js/affiliate.js.php?Affi=d51aee2659ed0810cd1aa232df22a3a2"> </script> </center>
               </td>
                <td><br/><br/>

				<br/><br/>
                  <center>           
                       <?php  
                            $url="http://wap.ratp.fr/siv/perturbation";
                            if ($ouverture = @fopen($url, "rb"))
                                {if ($lecture = stream_get_contents($ouverture))
                                        {$cpos = strpos($lecture, '<div class="subtitle">');
                                          $pos = strpos($lecture, 'Etat des');
                                          $inf=substr($lecture, $cpos, $pos - $cpos);
                                           echo utf8_encode($inf);
                                         }
                                }
                        ?>   
                      
                  </center>    
                  
                    
                </td>   
            </tr>  
        </table>

    </body>


</html>
