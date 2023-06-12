<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> ONEE </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i><img src="./image/onee.png" alt="" style="height: 2.5em;"></i>
      <span class="logo_name">ONEE - BO</span>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a href="./admin.php">
            <i><img src="./image/admin.png" alt="" style="height: 1em;"></i>
            <span class="link_name">Admin</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="./admin.php">Admin</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="./index.php">
            <i><img src="./image/formulaire.png" alt="" style="height: 1em;"></i>
            <span class="link_name">Nouvelle demamde</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Nouvelle demamde</a></li>
        </ul>
      </li>
</ul>
  </div>
  <section class="home-section">
    <?php
    //vérifier que le bouton ajouter a bien été cliqué
    if(isset($_POST['button'])){
        //extraction des informations envoyé dans des variables par la methode POST
        extract($_POST);
        //verifier que tous les champs ont été remplis
        if(isset($nom) && isset($prenom) && ($cin)&& ($specialite)&& ($naissance)&& ($ville)&& ($mail)){
             //connexion à la base de donnée
             include_once "connexion.php";
             //requête d'ajout
             $req = mysqli_query($con , "INSERT INTO employe VALUES(NULL, '$nom', '$prenom','$specialite','$cin','$naissance','$ville','$mail')");
             if($req){//si la requête a été effectuée avec succès , on fait une redirection
                 header("location: envoie.html");
             }else {//si non
                 $message = "Erreur d'envoi";
             }

        }else {
            //si non
            $message = "Veuillez remplir tous les champs !";
        }
    }
 
 ?>
 <div class="form">
     <h2>Nouvelle demamde</h2>
     <p class="erreur_message">
         <?php 
         // si la variable message existe , affichons son contenu
         if(isset($message)){
             echo $message;
         }
         ?>

     </p>
     <form action="" method="POST">
         <label>Nom</label>
         <input type="text" name="nom" require>
         <label>Prénom</label>
         <input type="text" name="prenom" require>
         <label>Specialite</label>
         <input type="text" name="specialite" require>
         <label>CIN</label>
         <input type="text" name="cin" require>
         <label>Date de naissance</label>
         <input type="date" name="naissance" require>
         <label>Ville</label>
         <input type="text" name="ville" require>
         <label>E-mail</label>
         <input type="email" name="mail" require>
         <input type="submit" value="Ajouter" name="button">
     </form>
 </div>
</body>
  </section>

  <script src="script.js"></script>

</body>
</html>
