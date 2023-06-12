<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link rel="stylesheet" href="liste.css">
    <link rel="stylesheet" href="style.css">
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
  <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Specialite</th>
                <th>CIN</th>
                <th>Date de naissance</th>
                <th>Ville</th>
                <th>E-mail</th>
                <th>Accepter</th>
                <th>Refuser</th>
                
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM Employe");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore de demande" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['specialite']?></td>
                            <td><?=$row['cin']?></td>
                            <td><?=$row['naissance']?></td>
                            <td><?=$row['ville']?></td>
                            <td><?=$row['mail']?></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><button><img src="./image/accepter.png"></a></button></td>
                            <td><button  name=""><img src="./image/refuser.webp"></a></button></td>
                            
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>  
  </section>

    
        
   
   
   
   
 
</body>
</html>