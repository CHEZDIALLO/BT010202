<?php
   include('connect.php');
   $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
   $tel=$_POST['tel'];
   $desig=$_POST['designation'];
   $qte=$_POST['qte'];
   
  
        if(isset($_POST['Envoyer'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $tel=$_POST['tel'];
        $desig=$_POST['designation'];
        $qte=$_POST['qte'];
           
       }
      

       $sql= "INSERT INTO `commande`(`id`, `Nom_cli`, `Prenom_cli`,`Tel_cli`, `Designation_prod`,`Quantite_prod`)VALUES ('',?,?,?,?,?)";
       $db->prepare($sql)->execute([$nom,$prenom,$tel,$desig,$qte]);
   echo "Votre commande a bien été envoyée";
 
 
?>