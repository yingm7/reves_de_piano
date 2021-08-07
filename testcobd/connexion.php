<html>


<head>

<title> Au-Naturel </title>


<style>
.mystyle1
{

 border: 0;
    line-height: 1;
    padding: 0 10px;
    font-size: 22px;
    text-align: center;
    color: white;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(106, 106, 220, 50);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.mystyle1:hover {
    background-color: blue;
}
.mystyle1:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}


.clignote {
  color:blue;
  animation: clignote 2s linear infinite;
text-shadow: 1px 1px 1px #000;
font-size: 50px;
}
@keyframes clignote {  
  50% { opacity: 0; }
}

</style>

</head>
<body>

<nav>
    


<button type="button" class="mystyle1"  onclick="self.location.href='index.php'" >
Accueil

    </button>

</nav>



<Link rel= "Stylesheet" type="text/css" href= "css/racines.css" /> 
<link rel ="stylesheet"  type="text/css" href="../../css/fond.css" >
<table>
<tr>
<th>


    


   






</th>

<th>  <div align"center">
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
         header("Location: editionprofil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<br><br><br><br><br><br>
   <link rel="stylesheet" href="css/bouton.css">
      
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
		 
      </div>
  
<br>

<img src ="images/pierre3.gif"width="50" height="50">




<th>









 

  
     
 






   </th>
</tr>
</table>


 <footer> 

 </footer>

</body>
</html>

