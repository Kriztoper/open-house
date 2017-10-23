<!DOCTYPE html>
<html>
    <head>
        <title>Developers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/developers.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>
  <body>

      <div class="back"><a href="{{ url('/dashboard') }}">DASHBOARD</a></div>
      <h1 class="jumbotron Absolute-Center"><img src="http://i.imgur.com/vOlWVBr.png" class="gap">DEVELOPERS</h1>

      <div>
        <div class="Absolute-Center">

          <?php
            $avatar = array(
			  "http://i.imgur.com/I6z5K7W.jpg", "http://i.imgur.com/7a6Bu0z.jpg", "http://i.imgur.com/xt4OW4B.jpg", "http://i.imgur.com/1RdipGh.jpg",
              "http://i.imgur.com/ImJxxzf.jpg", "http://i.imgur.com/o3muWud.jpg", "http://i.imgur.com/1pbtTof.jpg",
              "http://i.imgur.com/P2bD7va.jpg", "http://i.imgur.com/RS2A2yO.jpg", "http://i.imgur.com/nrPYpv1.jpg",
              "http://i.imgur.com/tTrvdwY.jpg", "http://i.imgur.com/bHlKMUX.jpg", "http://i.imgur.com/E2iMJCH.jpg",
              "http://i.imgur.com/gX9w8Dr.jpg", "http://i.imgur.com/UaIQF4z.jpg", "http://i.imgur.com/rEyL8Zm.jpg",
              "http://i.imgur.com/jyOQ6He.jpg", "http://i.imgur.com/OmHr4E9.jpg", "http://i.imgur.com/pEbA65z.jpg"
              );

            $fb = array(
			  "https://www.facebook.com/daniel.hizon", "https://www.facebook.com/mikee.margallo", "https://www.facebook.com/ejtan1998", "https://www.facebook.com/kriztoper.urmeneta",
              "https://www.facebook.com/babalcon44", "https://www.facebook.com/jay.dejesus.27", "https://www.facebook.com/TheJoshuaRenzo",
              "https://www.facebook.com/arnimaxine.hilvano", "https://www.facebook.com/jamesmichael.kuizon", "https://www.facebook.com/jeff.lucanas",
              "https://www.facebook.com/franciscarlo.molina", "https://www.facebook.com/bart.monton", "https://www.facebook.com/theOnlyRex",
              "https://www.facebook.com/zyraphyl.penaranda.1", "https://www.facebook.com/CallMeTailer", "https://www.facebook.com/albuenjan.rosello",
              "https://www.facebook.com/charlotte.sacmar", "https://www.facebook.com/valjamir.tingson", "https://www.facebook.com/carlo.valleramos"
              );

            $twit = array(
			  "https://twitter.com/Daniel_Jr_L", "https://twitter.com/Mikeeliti_ako", "https://twitter.com/edwardtan1998", "NONE", 
              "https://twitter.com/bababalcon", "https://twitter.com/_iamnotJ", "https://twitter.com/_jrenzo",
              "https://twitter.com/Ri_Maxine", "https://twitter.com/jhamezzz1315", "NONE",
              "https://twitter.com/TWICE_MOMOls", "NONE", "https://twitter.com/the_OnlyRex",
              "NONE", "https://twitter.com/CallMeTailer", "https://twitter.com/albuenRosello03",
              "https://twitter.com/charmooot", "https://twitter.com/val_waray_klaro", "https://twitter.com/CarloValleramos"
              );

            $insta = array(
			  "https://www.instagram.com/daniel_gjr/", "https://www.instagram.com/mikeemargallo/","https://www.instagram.com/d.war.do/", "NONE",
              "https://www.instagram.com/bababalcon/", "NONE", "https://www.instagram.com/joshua_renzo/",
              "https://www.instagram.com/jemerald14/", "https://www.instagram.com/jhamezzz1315/", "NONE",
              "NONE", "NONE", "https://www.instagram.com/rexolis/", 
              "NONE", "https://www.instagram.com/karlpujante/", "NONE",
              "https://www.instagram.com/charmooot/", "https://www.instagram.com/val_waray_klaro/", "https://www.instagram.com/carlovalleramos/"
              );

            $pokemon = array(
              "https://cdn.bulbagarden.net/upload/0/01/Spr_2c_155.png", "https://cdn.bulbagarden.net/upload/6/60/Spr_3e_280.png", "https://cdn.bulbagarden.net/upload/7/7b/Spr_5b_144.png", "https://cdn.bulbagarden.net/upload/2/2a/Spr_3e_201.png",
              "http://i.imgur.com/JoIqmF2.gif", "http://i.imgur.com/PnkDOMH.gif", "http://i.imgur.com/6BDPSgJ.gif",
              "http://i.imgur.com/ucq3CmI.gif", "http://i.imgur.com/hv2GaTP.gif", "http://i.imgur.com/sZOte2o.gif",
              "http://i.imgur.com/O4bNGIu.gif", "http://i.imgur.com/Mzhlp4J.gif", "http://i.imgur.com/l5INYxC.gif",
              "http://i.imgur.com/qbjyyK4.gif", "http://i.imgur.com/9Bsza6A.gif", "http://i.imgur.com/ASwbYdl.gif",
              "http://i.imgur.com/MUVn9O2.gif", "http://i.imgur.com/0QCguSy.gif", "http://i.imgur.com/sgUvHGO.gif"
              );

            $names = array(
			  "Daniel Hizon", "Jhunn Margallo", "Edward Tan", "Kriztoper Uremeneta",
              "James Babalcon", "Jay de Jesus", "Joshua Dorado", "Maxine Hilvano", "James Kuizon", "Jeff Lucanas", "Francis Molina", "Bart Monton", "Rex Olis",
              "Zyra Penaranda", "Khalile Pujante", "Albuen Rosello", "Charlotte Sacmar", "Val Tingson", "Carlo Valleramos"
              );

            $job = array(0,1,0,0,1,0,0,0,0,0,0,0,0,0,1,0,1,0,1);

            for ($i=0; $i < count($avatar); $i++) { 
              # code...
              echo '<div class="pic col-md-12"><div><div class="col-md-5 dp">';

              echo '<img src="'.$avatar[$i].'" width="200" class="img-circle" height="200"></div>';

              echo '<div class="col-md-6 gob"><p class="pad">';

              echo '<a href="'.$fb[$i].'"><img src="http://i.imgur.com/eZ77z46.png" class="marg" width="50" height="50"></a>';

              if ($twit[$i] != "NONE") {
                # code...
                echo '<a href="'.$twit[$i].'"><img src="http://i.imgur.com/BzXX5xf.png" class="marg" width="50" height="50"></a>';
              }

              if ($insta[$i] != "NONE") {
                # code...
                echo '<a href="'.$insta[$i].'"><img src="http://i.imgur.com/cW6nHoy.png" class="marg" width="50" height="50"></a>';
              }
              
              echo '<img src="'.$pokemon[$i].'" width="50" class="marg" height="50"></p>';
              echo '<p>'.$names[$i].'</p>';

              if($job[$i] == 1) {
                # code...
                echo '<p>Front End</p></div></div></div>';
              }
              else{
                echo '<p>Back End</p></div></div></div>'; 
              }
              
              
            }


          ?>

        </div>
      
      </div>

    </div>
  </body>
</html>