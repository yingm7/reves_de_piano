<html>
<head> 
<title> Au-Naturel </title>


<link rel="shortcut icon" href="images/ams.png">
<meta name="viewport" content="width=device-width">

  <meta http-equiv="X-UA-Compatible" content="IE=11,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="vierport" content="width=device-width"/>
     
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QXRFH8KVFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QXRFH8KVFZ');
</script>

</head>
<body style="background-image:url(images/fond2.jpg); background-size:cover;"> 
<section> 
<link rel ="stylesheet" label="name1" type="text/css" href="css/anim.css">

<table>
<tr> 

<th>


<div class="cylon_eye"></div> 

</th>  

<th> 
<br> <br> <br>


<div align"center">
<?php
session_start();
 
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
 
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
 $_SESSION['avatar'] = $userinfo['avatar'];
         header("Location: profiltest2.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<br>
   <link rel="stylesheet" href="bouton.css">
      
         <h2></h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
	<br> 

      </div>

<a href="inscription.php"><h4> Pour s'inscrire </h4><a/><br>
<a href="connexion.php"><h4> Edition de votre profil </h4><a/><br>
<img src ="images/pierre3.gif"width="50" height="50"><br><br><br><br>
<h17>"Dans la nature on respire ce que l'âme ressent et expire ce que l'esprit évacue."<br> 
Sonia Lahsaini
<br> 
<img src="images/rond2.gif">

</h17> 
</th>  


<th>  <div class="test"  >


<br> 

	 

</div>  </th>


</tr>
<tr>  <th colspan ="3">    <div align="center">
<audio controls autoplay>
 
  <source src="audio/9.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

</div>  </th>     </tr>

 </table>
</section>
 <footer> </footer> </th>




</body>
</html>
