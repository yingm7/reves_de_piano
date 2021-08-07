<?php
session_start();
 
$bdd = new PDO('mysql:host=aunatupma1830400.mysql.db;dbname=aunatupma1830400', 'aunatupma1830400', 'Neptune240984');
 
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Mon profil</title>
      <meta charset="utf-8">
   </head>
   <body>   

<?php
// génère le cookie
$contenu = 'pseudo'; // le contenu de votre cookie
setcookie("pseudo", $userinfo['pseudo'], time()+36000);
$contenu2 = 'id'; // le contenu de votre cookie
setcookie("id", $userinfo['id'], time()+36000);
?>




      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=1) {
header("Location: 2cxrb33x444/2cxrb33x444.php");


         ?>
         <br />


         
         <?php
         }


         ?>
<br>


<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=2) {
         header("Location: 9374ru82eti/9374ru82eti.php"); 
?>
         <br />
         
         <?php
         }
         ?>


<br>
<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=9) {
 header("Location: 573hc2du57e/573hc2du57e.php"); 
         
?>
         <br />
         
         <?php
         }
         ?>


<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=10) {
 header("Location: 6f2e8s45dn3/6f2e8s45dn3.php"); 
         ?>
         <br />
         
         <?php
         }
         ?>
<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=11) {
          header("Location: tf35r74i67r/tf35r74i67r.php"); 
?>
         <br />
         
         <?php
         }
         ?>

<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=12) {
 header("Location: uq4u6e7944f/uq4u6e7944f.php"); 
         ?>
         <br />
         
         <?php
         }
         ?>

<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=13) {
 header("Location: 25f37b9k9md/25f37b9k9md.php"); 
         ?>
         <br />
         
         <?php
         }
         ?>
<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=14) {
 header("Location: v267yv5c6t9/v267yv5c6t9.php"); 
         ?>
         <br />
        
         <?php
         }
         ?>
<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=15) {
 header("Location: xbb5w675h22/xbb5w675h22.php"); 
         ?>
         <br />
         
         <?php
         }
         ?>

<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=16) {
 header("Location: 266b5qws8t3/266b5qws8t3.php"); 
         ?>
         <br />
        
         <?php
         }
         ?>

<br>

<?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']=17) {
 header("Location: 777iv5jgu35/777iv5jgu35.php"); 
         ?>
         <br />
         
         <?php
         }
         ?>

      </div>
   </body>
</html>
<?php   
}
?>